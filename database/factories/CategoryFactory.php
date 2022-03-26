<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $category = Category::class;
    public function definition()
    {
        return [
                'description'=>$this->faker->text(10),
            ];
    }
}
