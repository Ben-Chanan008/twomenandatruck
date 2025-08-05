<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Module;
use App\Models\SubModule;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;

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

        Module::factory(3)
            ->sequence(
                ['module' => 'user', 'description' => 'Module for user actions'],
                ['module' => 'quote', 'description' => 'Module for quote actions'],
                ['module' => 'assign-job', 'description' => 'Module for assigning jobs'],
            )->create();
/*
        SubModule::factory(2)
            ->sequence(
                ['sub_module' => 'create-user'],
                ['sub_module' => 'edit-user'],
            )->forModule(function (Module $module) {
                return ['module_id' => $module->id];
            })->create();*/
    }
}
