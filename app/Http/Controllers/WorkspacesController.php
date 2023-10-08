<?php

namespace App\Http\Controllers;

use App\Models\Workspace;
use Illuminate\Http\Request;
use Inertia\Inertia;

class WorkspacesController extends Controller
{
    public function index()
    {
        $workspaces = Workspace::mine()->get();

        return Inertia::render('Workspace/Index', compact('workspaces'));
    }

    public function create()
    {
        return Inertia::render('Workspace/Create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'name' => 'required'
            ]
        );

        $validated['user_id'] = $request->user()->id;

        Workspace::create($validated);

        return to_route('workspaces.index');
    }

    public function show(Workspace $workspace)
    {
    }

    public function edit(Workspace $workspace)
    {
    }

    public function update(Request $request, Workspace $workspace)
    {
    }

    public function destroy(Workspace $workspace)
    {
    }
}
