<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Timer extends Model
{
    protected $guarded = ['id'];

    protected $casts = [
      'started_at' => 'datetime',
      'stopped_at' => 'datetime'
    ];

    public function scopeAssociated(Builder $query):void
    {
        $query->where('user_id', auth()->id());
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function workspace(): BelongsTo
    {
        return $this->belongsTo(Workspace::class);
    }
}
