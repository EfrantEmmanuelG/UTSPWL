<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    protected $model = Customer::class;
    public function definition(): array { return ['first_name' => fake()->firstName(), 'last_name' => fake()->lastName(), 'email_address' => fake()->unique()->safeEmail(), 'number_of_complaints' => fake()->numberBetween(0, 5)]; }
}
