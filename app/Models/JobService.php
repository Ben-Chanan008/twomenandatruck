<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class JobService extends Model
{
    //

    public function quote(): BelongsTo
    {
        return $this->belongsTo(Quote::class);
    }

    public function details(): BelongsTo
    {
        return $this->belongsTo(ServicesDetail::class);
    }
}