<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function request(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => ['required', 'string', 'max:255', 'email', 'unique:users'],
        ]);

        return back()->with('success', __('Registration request sent.'));
    }
}
