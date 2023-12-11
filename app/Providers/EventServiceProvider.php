<?php

namespace App\Providers;

use App\Events\UserRegisteredEvent;
use App\Events\WorkspaceCreatedEvent;
use App\Listeners\CreateWorkspaceListener;
use App\Listeners\SendEmailVerificationNotificationListener;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        WorkspaceCreatedEvent::class => [],

        UserRegisteredEvent::class => [
//            CreateWorkspaceListener::class,
            SendEmailVerificationNotificationListener::class,
        ],
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        //
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
