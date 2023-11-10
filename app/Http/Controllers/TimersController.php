<?php

namespace App\Http\Controllers;

use App\Models\Timer;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TimersController extends Controller
{
    public function index()
    {
        $timers = Timer::with('workspace')
            ->associated()
            ->get();

        return Inertia::render('Timer/Index', compact('timers'));
    }

    public function create(Request $request)
    {
    }

    public function store(Request $request)
    {
    }

    public function show(Timer $timer)
    {
    }

    public function edit(Timer $timer)
    {
    }

    public function update(Request $request, Timer $timer)
    {
    }

    public function destroy(Timer $timer)
    {
    }
}
