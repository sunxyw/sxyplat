<?php

namespace App\Http\Controllers\Central;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class Dashboard extends Controller
{
    public function __invoke(Request $request)
    {
        Auth::logout();
        return Inertia::render('@frontend::Dashboard', [
            'tenants' => $request->user()->tenants->map(fn ($tenant) => [
                'id' => $tenant->id,
                'domain' => "http://{$tenant->domain}",
            ]),
        ]);
    }
}
