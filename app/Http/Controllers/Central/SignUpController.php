<?php

namespace App\Http\Controllers\Central;

use App\Http\Controllers\Controller;
use App\Models\CentralUser;
use App\Models\Tenant;
use App\Models\User;
use App\Notifications\VerifyCodeRequested;
use App\Services\FlowControlService;
use App\Services\VerifyCodeService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Inertia\Inertia;
use Illuminate\Validation\Rules;

class SignUpController extends Controller
{
    private const FLOW_NAME = 'signup';
    private const STEP_REQUEST_VERIFY_CODE = 0;
    private const STEP_FILL_FORM = 1;

    public function __construct(
        private VerifyCodeService  $verifyCodeService,
        private FlowControlService $flowControlService,
    )
    {
    }

    private function render($data)
    {
        return Inertia::render('@frontend::SignUp', $data);
    }

    public function create(Request $request)
    {
        $key = $request->session()->get('flow_key');
        if ($request->query('reset')) {
            $this->flowControlService->endFlow(self::FLOW_NAME, $key);
        }
        if (!$this->flowControlService->isFlowStarted(self::FLOW_NAME, $key ?: '')) {
            $key = $this->flowControlService->startFlow(self::FLOW_NAME);
            $request->session()->put('flow_key', $key);
        }
        $step = $this->flowControlService->getStep(self::FLOW_NAME, $key);
        $meta = $this->flowControlService->getMetaForFlow(self::FLOW_NAME, $key);
        return $this->render($meta + compact('step'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email', 'unique:users,email', 'max:255', 'string'],
            'email_verify_code' => ['present', 'nullable', 'string', 'size:6'],
            'id' => ['required_with:email_verify_code', 'nullable', 'string', 'min:6', 'max:12'],
            'name' => ['required_with:email_verify_code', 'nullable', 'string', 'max:255'],
            'password' => ['required_with:email_verify_code', 'nullable', 'string', 'min:8', 'max:255', Rules\Password::defaults()],
        ]);

        $flow_key = $request->session()->get('flow_key');
        $step = $this->flowControlService->getStep(self::FLOW_NAME, $flow_key);
        switch ($step) {
            case self::STEP_REQUEST_VERIFY_CODE:
                return $this->handleStepRequestVerifyCode($flow_key, $request);
            case self::STEP_FILL_FORM:
                return $this->handleStepFillForm($flow_key, $request);
            default:
                abort(404);
        }
    }

    private function handleStepRequestVerifyCode(string $flow_key, Request $request)
    {
        $this->flowControlService->storeMetaForFlow(self::FLOW_NAME, $flow_key, [
            'email' => $request->input('email'),
        ]);
        $this->flowControlService->nextStep(self::FLOW_NAME, $flow_key);
        $tmp_user = new User([
            'name' => 'Guest',
            'email' => $request->input('email'),
        ]);
        $code = $this->verifyCodeService->generateAndStore('email', $tmp_user->email);
        $tmp_user->notify(new VerifyCodeRequested($code));
        return $this->render([
            'step' => self::STEP_FILL_FORM,
            'email' => $request->input('email'),
        ]);
    }

    private function handleStepFillForm(string $flow_key, Request $request)
    {
        $code = $request->post('email_verify_code');
        $id = $request->post('id');
        $name = $request->post('name');
        $password = $request->post('password');

        if (!$this->verifyCodeService->verify('email', $request->post('email'), $code)) {
            return back()->withErrors([
                'email_verify_code' => __('The code is incorrect.'),
            ]);
        }

        /** @var User $c_user */
        $c_user = CentralUser::query()->create([
            'name' => $name,
            'email' => $request->post('email'),
            'password' => Hash::make($password),
        ]);
        $tenant = Tenant::query()->create([
            'id' => $id,
        ]);
        $tenant->run(function () use ($c_user) {
            User::create([
                'uuid' => $c_user->uuid,
                'name' => $c_user->name,
                'email' => $c_user->email,
                'password' => $c_user->password,
            ]);
        });
        $this->flowControlService->endFlow(self::FLOW_NAME, $flow_key);
        return redirect()->route('central::home');
    }
}
