<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Workspace extends Model
{
    protected $fillable = ['name', 'user_id', 'default'];

    public function scopeMine(Builder $query): Builder
    {
        return $query->where('user_id', auth()->id());
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function timers(): HasMany
    {
        return $this->hasMany(Timer::class, 'workspace_id');
    }
}
