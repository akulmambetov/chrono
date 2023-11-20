<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $workspaces = $request->user()->workspaces;

        return Inertia::render('Dashboard', compact('workspaces'));
    }
}
