<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Route extends Model
{
    //
    use SoftDeletes;
    public function subModule(): BelongsTo
    {
        return $this->belongsTo(SubModule::class);
    }
}