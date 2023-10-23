<?php

namespace App\Listeners;

use App\Events\UserRegisteredEvent;

class CreateWorkspaceListener
{
    public function handle(UserRegisteredEvent $event)
    {
        $event->user->workspaces()->create([
            'name' => 'Default Workspace',
            'default' => true
        ]);
    }
}
