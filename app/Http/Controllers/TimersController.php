<?php

namespace App\Http\Controllers;

use App\Http\Requests\TimerRequest;
use App\Models\Timer;
use Inertia\Inertia;

class TimersController extends Controller
{
    public function index()
    {
        $timers = Timer::with(['user', 'workspace'])
            ->defaultWorkspace()
            ->associated()
            ->get();

        return Inertia::render('Timer/Index', compact('timers'));
    }

    public function create()
    {
        return Inertia::render('Timer/Create',[
            'model' => new Timer()
        ]);
    }

    public function store(TimerRequest $request)
    {
        Timer::create($request->validated());

        return to_route('timer.index');
    }

    public function show(Timer $timer)
    {
        return Inertia::render('Timer/Show', compact('timer'));
    }

    public function edit(Timer $timer)
    {
    }

    public function update(TimerRequest $request, Timer $timer)
    {
        $timer->update($request->validated());
    }

    public function destroy(Timer $timer)
    {
        $timer->delete();

        return to_route('timer.index');
    }
}
