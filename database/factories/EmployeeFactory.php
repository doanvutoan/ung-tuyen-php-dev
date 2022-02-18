<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'phone' => $this->faker->unique()->numerify('09########'),
            'point' => rand(0, 9),
            'code' => $this->faker->unique()->numerify('###'),
            'branch' => rand(1, 3),
        ];
    }
}
