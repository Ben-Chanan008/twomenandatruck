<?php

namespace Database\Seeders;

use App\Models\Role;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(5)->unverified()->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com'n
        // ]);

        Role::factory(3)
            ->sequence(
                ['role' => 'admin'],
                ['role' => 'client'],
                ['role' => 'employee']
            )->create();
    }
}