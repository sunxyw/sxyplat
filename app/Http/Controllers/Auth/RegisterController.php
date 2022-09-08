<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\RegisterRequested;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;
use Inertia\Inertia;
use Illuminate\Validation\Rules;

class RegisterController extends Controller
{
    public function request(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => ['required', 'string', 'max:255', 'email', 'unique:users'],
        ]);

        Mail::to($request->post('email'))->send(new RegisterRequested(
            URL::temporarySignedRoute('register', now()->addMinutes(30), [
                'email' => $request->post('email'),
            ])
        ));

        return back()->with('success', __('Registration request sent.'));
    }

    public function create(Request $request, string $email = null)
    {
        if ($email === null) {
            return Inertia::render('Auth/Register');
        }

        return Inertia::render('Auth/Register', [
            'email' => $email,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => ['required', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect()->route('home')->with('success', __('Registration successful.'));
    }
}
