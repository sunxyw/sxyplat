<?php

namespace App\Http\Controllers\Central;

use App\Http\Controllers\Controller;
use App\Mail\RegisterRequested;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Inertia\Inertia;
use Illuminate\Validation\Rules;

class SignUpController extends Controller
{
    public function create()
    {
        return Inertia::render('@frontend::SignUp', [
            'emailLocked' => false,
            'email' => '',
        ]);
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

        if (!$request->filled('email_verify_code')) {
            return Inertia::render('@frontend::SignUp', [
                'emailLocked' => true,
                'email' => $request->post('email'),
            ]);
        }

        $code = $request->post('email_verify_code');
        $id = $request->post('id');
        $name = $request->post('name');
        $password = $request->post('password');

        if ($code !== '123456') {
            return back()->withErrors([
                'email_verify_code' => __('The code is incorrect.'),
            ]);
        }

        DB::transaction(function () use ($request, $id, $name, $password) {
            $user = User::create([
                'name' => $name,
                'email' => $request->post('email'),
                'password' => Hash::make($password),
            ]);

            $tenant = $user->tenants()->create([
                'id' => $id,
            ]);

            $tenant->domains()->create([
                'domain' => $id,
            ]);
        });

        return redirect()->route('home');
    }
}
