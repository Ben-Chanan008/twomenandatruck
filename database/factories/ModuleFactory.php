<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\SubModule;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Module>
 */
class ModuleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'module' => 'assign-job',
            'description' => 'Module for assigning jobs',
            'has_create' => 1,
            'has_edit' => 1,
            'has_delete' => 1,
            'is_active' => 1,
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Module $module) {
            SubModule::factory()->count(3)->create([
                'module_id' => $module->id
            ]);
        });
    }
}
