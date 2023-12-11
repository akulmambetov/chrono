<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class WorkspaceParticipant extends Model
{
    use HasFactory;

    protected $fillable = ['workspace_id', 'user_id', 'role_id'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function workspace(): BelongsTo
    {
        return $this->belongsTo(Workspace::class);
    }

    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class);
    }
}
