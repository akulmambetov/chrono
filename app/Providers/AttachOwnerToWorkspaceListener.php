<?php

namespace App\Providers;

use App\Events\WorkspaceCreatedEvent;
use App\Models\Role;

class AttachOwnerToWorkspaceListener
{

    /**
     * Handle the event.
     */
    public function handle(WorkspaceCreatedEvent $event): void
    {
        $event->workspace->participants()->create([
            'user_id' => $event->user->id,
            'role_id' => Role::query()->where('name', Role::ADMIN)->first()->id
        ]);
    }
}
