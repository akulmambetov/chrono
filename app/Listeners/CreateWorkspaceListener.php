<?php

namespace App\Listeners;

use App\Models\Workspace;
use Illuminate\Auth\Events\Registered;

class CreateWorkspaceListener
{
    public function handle(Registered $event)
    {
        Workspace::create(
            [
                'name' => 'Default Workspace',
                'user_id' => $event->user->id
            ]
        );
    }
}
