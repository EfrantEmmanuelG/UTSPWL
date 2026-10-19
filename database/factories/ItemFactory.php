<?php

namespace Database\Factories;

use App\Models\Item;
use Illuminate\Database\Eloquent\Factories\Factory;

class ItemFactory extends Factory
{
    protected $model = Item::class;
    public function definition(): array { return ['item_code' => 'ITM'.fake()->unique()->numerify('#####'), 'item' => fake()->unique()->words(2, true), 'unit_price' => fake()->randomFloat(2, 10000, 5000000), 'company_id' => \App\Models\Company::query()->inRandomOrder()->value('company_id')]; }
}
