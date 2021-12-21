<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'price' => $this->faker->randomFloat(2, 40, 300),
            'status' => $this->faker->randomElement($this->statuses()),
            'description' => $this->faker->text(50),
            'category_id' => Category::factory(50),
        ];
    }


    private function statuses()
    {
        return [
            'Available',
            'Sold Out',
            'Paused',
        ];
    }
}
