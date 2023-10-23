<?php

namespace App\Http\Controllers;

use App\Models\Timer;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TimersController extends Controller
{
    public function index(Request $request)
    {
        return Inertia::render('Timer/Index');
    }

    public function create()
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
