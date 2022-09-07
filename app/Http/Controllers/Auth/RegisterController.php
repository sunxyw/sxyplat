<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\RegisterRequested;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    public function request(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => ['required', 'string', 'max:255', 'email', 'unique:users'],
        ]);

        Mail::to($request->post('email'))->send(new RegisterRequested());

        return back()->with('success', __('Registration request sent.'));
    }
}
