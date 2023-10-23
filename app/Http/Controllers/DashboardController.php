<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $workspace = $request->user()->workspaces()->default()->first();

        return Inertia::render('Dashboard', $workspace);
    }
}
