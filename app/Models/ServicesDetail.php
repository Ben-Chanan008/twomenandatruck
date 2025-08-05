<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServicesDetail extends Model
{
    //
    use SoftDeletes;

    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }

    public function job_services(): HasMany
    {
        return $this->hasMany(JobService::class);
    }

    public function quotes(): BelongsToMany
    {
        return $this->belongsToMany(Quote::class, 'job_services');
    }
}