<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RoleAccess extends Model
{
    //
    use SoftDeletes;
    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class);
    }
}