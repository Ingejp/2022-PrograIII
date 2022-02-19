<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $customer = Customer::class;
    public function definition()
    {
        return [
            'name'=>$this->faker->name,
            'address'=>$this->faker->address(),
            'phone_number'=>$this->faker->phoneNumber,
        ];
    }
}
