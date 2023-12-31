<?php

namespace App\Http\Controllers;

use App\Events\WorkspaceCreatedEvent;
use App\Models\Workspace;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

        if ($request->user()->workspaces->isEmpty()) {
            $validated['default'] = true;
        }

        $workspace = Workspace::create($validated);

        WorkspaceCreatedEvent::dispatch($workspace, $request->user());

        return to_route('workspaces.index');
    }

    public function show(Workspace $workspace)
    {
        return Inertia::render('Workspace/Show', [
            'workspace' => $workspace
        ]);
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

    public function setDefault(Request $request, Workspace $workspace)
    {

        $request->user()->workspaces()->update([
            'default' => DB::raw('id = ' . $workspace->id),
        ]);

        return to_route('workspaces.index');
    }
}
