<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Project
 *
 * @property int $id
 * @property int|null $workspace_id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Project newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Project newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Project query()
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereWorkspaceId($value)
 */
	class Project extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Role
 *
 * @property int $id
 * @property string $name
 * @property string $guard_name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Permission\Models\Permission> $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User> $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder|Role newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|Role query()
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereGuardName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereUpdatedAt($value)
 */
	class Role extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Timer
 *
 * @property int $id
 * @property string $title
 * @property int|null $user_id
 * @property int|null $workspace_id
 * @property int|null $project_id
 * @property \Illuminate\Support\Carbon $started_at
 * @property \Illuminate\Support\Carbon|null $stopped_at
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $user
 * @property-read \App\Models\Workspace|null $workspace
 * @method static \Illuminate\Database\Eloquent\Builder|Timer associated()
 * @method static \Illuminate\Database\Eloquent\Builder|Timer defaultWorkspace()
 * @method static \Illuminate\Database\Eloquent\Builder|Timer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Timer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Timer query()
 * @method static \Illuminate\Database\Eloquent\Builder|Timer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Timer whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Timer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Timer whereProjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Timer whereStartedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Timer whereStoppedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Timer whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Timer whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Timer whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Timer whereWorkspaceId($value)
 */
	class Timer extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property mixed $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, \Spatie\MediaLibrary\MediaCollections\Models\Media> $media
 * @property-read int|null $media_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Permission\Models\Permission> $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Permission\Models\Role> $roles
 * @property-read int|null $roles_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Timer> $timers
 * @property-read int|null $timers_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Workspace> $workspaces
 * @property-read int|null $workspaces_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User role($roles, $guard = null)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent implements \Illuminate\Contracts\Auth\MustVerifyEmail, \Spatie\MediaLibrary\HasMedia {}
}

namespace App\Models{
/**
 * App\Models\Workspace
 *
 * @property int $id
 * @property string $name
 * @property int|null $user_id
 * @property int $default
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\WorkspaceParticipant> $participants
 * @property-read int|null $participants_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Timer> $timers
 * @property-read int|null $timers_count
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Workspace default()
 * @method static \Database\Factories\WorkspaceFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Workspace mine()
 * @method static \Illuminate\Database\Eloquent\Builder|Workspace newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Workspace newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Workspace query()
 * @method static \Illuminate\Database\Eloquent\Builder|Workspace whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workspace whereDefault($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workspace whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workspace whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workspace whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workspace whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workspace whereUserId($value)
 */
	class Workspace extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\WorkspaceParticipant
 *
 * @property int $id
 * @property int $workspace_id
 * @property int $user_id
 * @property int $role_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Role $role
 * @property-read \App\Models\User $user
 * @property-read \App\Models\Workspace $workspace
 * @method static \Illuminate\Database\Eloquent\Builder|WorkspaceParticipant newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WorkspaceParticipant newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WorkspaceParticipant query()
 * @method static \Illuminate\Database\Eloquent\Builder|WorkspaceParticipant whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkspaceParticipant whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkspaceParticipant whereRoleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkspaceParticipant whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkspaceParticipant whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkspaceParticipant whereWorkspaceId($value)
 */
	class WorkspaceParticipant extends \Eloquent {}
}

