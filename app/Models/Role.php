<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    //
    use SoftDeletes, HasFactory;
    protected $fillable = [
        'role',
        'status'
    ];

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, UserRole::class)
                    ->as('role')
                    ->withPivot(['user_status', 'updated_at']); 
    }

    public function role_accesses(): HasMany
    {
        return $this->hasMany(RoleAccess::class);
    }
}