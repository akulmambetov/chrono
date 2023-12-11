<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Permission\Models\Role as SpatieRole;

class Role extends SpatieRole
{
    use HasFactory;

    public const ADMIN = 'admin';
    public const OWNER = 'owner';
    public const PARTICIPANT = 'participant';
}
