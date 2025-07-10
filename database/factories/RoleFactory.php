<?php

namespace Database\Factories;

use App\Models\Role;
use App\Models\User;
use App\Models\UserRole;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Role>
 */
class RoleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'role' => fake()->sentence(1),
            'status' => 'active'
        ];
    }

    /* public function configure(): static
    {
        return $this->afterCreating(function (Role $role, User $user) {
            UserRole::create([
                'roles_id' => $role->id,
                'users_id' => ,
                'user_status' => 'pending'
            ]);
        });
    } */
}