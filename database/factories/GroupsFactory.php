<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\students;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\groups>
 */
class GroupsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'name' => $this->faker->text(),
            'description' => $this->faker->text(),
            'student_id' => students::all()->random()->id,
        ];
    }
}
