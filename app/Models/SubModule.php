<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SubModule extends Model
{
    //
    use SoftDeletes, HasFactory;
    public function module(): BelongsTo
    {
        return $this->belongsTo(Module::class);
    }

    public function routes(): HasMany
    {
        return $this->hasMany(Route::class);
    }
}