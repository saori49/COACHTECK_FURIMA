<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Item;
use App\Models\User;
use App\Models\Condition;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Item::class;

    public function definition(): array
    {
        
        return [
            'user_id' => User::factory(),
            'condition_id' => $this->faker->numberBetween(1, 3),
            'name' => $this->faker->name,
            'price' => $this->faker->numberBetween(100, 10000),
            'description' => $this->faker->realText(20),
            'img_url' => $this->faker->imageUrl(),
        ];
    }
}
