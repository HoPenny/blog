<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        return ['cgy_id' => $this->faker->numberBetween(1, 10),
            'title' => $this->faker->sentence,
            'desc' => $this->faker->sentence,
            'salary' => $this->faker->numberBetween(40000, 80000),
            'enabled' => $this->faker->numberBetween(1, 10)];
    }
}
