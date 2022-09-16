<?php

namespace App\Http\Controllers\Central;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class SignInController extends Controller
{
    public function create()
    {
        return Inertia::render('@frontend::SignIn');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();

            $tenants = Auth::user()->tenants;
            if ($tenants->count() === 1) {
                return redirect()->route('tenant::home')->domain($tenants->first()->domain);
            }

            return redirect()->intended(route('central::dashboard'));
        }

        return back()->with('error', 'The provided credentials do not match our records.');
    }
}
