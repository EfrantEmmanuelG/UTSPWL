<?php

namespace Database\Factories;

use App\Models\Sale;
use Illuminate\Database\Eloquent\Factories\Factory;

class SaleFactory extends Factory
{
    protected $model = Sale::class;
    public function definition(): array { return ['date_of_purchase' => fake()->dateTimeBetween('-1 year', 'now')->format('Y-m-d'), 'customer_id' => \App\Models\Customer::query()->inRandomOrder()->value('customer_id'), 'item_code' => \App\Models\Item::query()->inRandomOrder()->value('item_code')]; }
}
