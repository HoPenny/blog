<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return ['subject' => $this->faker->name(),
            'content' => $this->faker->company(),
            'cgy_id' => $this->faker->randomDigitNot(0),
            'enabled' => $this->faker->randomElement([true, false]),
            'pic' => 'storage\app\pic\1669795015.jpg'];
    }
}