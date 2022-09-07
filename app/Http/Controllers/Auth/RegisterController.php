<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\RegisterRequested;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;
use Inertia\Inertia;

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

        dd($email);
    }
}
