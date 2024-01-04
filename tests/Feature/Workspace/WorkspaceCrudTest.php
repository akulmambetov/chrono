<?php

namespace Tests\Feature\Workspace;

use App\Models\User;
use App\Models\Workspace;
use Tests\TestCase;

class WorkspaceCrudTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_create_screen_can_be_rendered(): void
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)
            ->get(route('workspaces.create'));

        $response->assertStatus(200);
    }

    public function test_workspace_can_be_created()
    {
        $user = User::factory()
            ->has(Workspace::factory()->count(3))
            ->create();

        $response = $this->actingAs($user)
            ->get(route('workspaces.index'));

        $response->assertOk();
    }
}
