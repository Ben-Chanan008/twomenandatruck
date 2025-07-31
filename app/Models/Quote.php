<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Notifications\Notifiable;

class Quote extends Model
{
    //
    protected $guarded = [];
    use SoftDeletes, Notifiable;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function schedule(): HasOne
    {
        return $this->hasOne(JobSchedule::class);
    }

    public function services(): BelongsToMany
    {
        return $this->belongsToMany(ServicesDetail::class, 'job_services')->withTimestamps();
    }
}