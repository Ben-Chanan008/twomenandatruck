<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class JobSchedule extends Model
{
    //
    use SoftDeletes;
    public $guarded = [];
    
    public function quote(): BelongsTo
    {
        return $this->belongsTo(Quote::class);
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'assign_job_workers');
    }

    public function jobStatus(): HasMany
    {
        return $this->hasMany(JobCompletionStatus::class);
    }
}