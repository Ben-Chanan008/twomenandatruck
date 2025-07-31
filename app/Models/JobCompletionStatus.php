<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class JobCompletionStatus extends Model
{
    //
    protected $guarded = [];
    protected $table = 'job_completion_status';

    public function jobSchedule(): BelongsTo
    {
        return $this->belongsTo(JobSchedule::class);
    }
}