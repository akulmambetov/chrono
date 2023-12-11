<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use voku\helper\ASCII;

class Workspace extends Model
{
    protected $fillable = ['name', 'user_id', 'default'];

    public function scopeMine(Builder $query): Builder
    {
        return $query->where('user_id', auth()->id());
    }

    public function scopeDefault(Builder $query): Builder
    {
        return $query->where('default', true);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function participants(): HasMany
    {
        return $this->hasMany(WorkspaceParticipant::class);
    }

    public function timers(): HasMany
    {
        return $this->hasMany(Timer::class, 'workspace_id');
    }

    public function setDefault():void
    {
        $this->update(['default' => true]);
    }
}
