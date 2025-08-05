<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Module extends Model
{
    //
    use SoftDeletes, HasFactory;
    public function subModules(): HasMany
    {
        return $this->hasMany(SubModule::class);;
    }
}