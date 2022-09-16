<?php

namespace App\Http\Controllers\Central;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class Dashboard extends Controller
{
    public function __invoke(Request $request)
    {
        return Inertia::render('@frontend::Dashboard');
    }
}
