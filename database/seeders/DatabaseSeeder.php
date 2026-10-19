<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Customer;
use App\Models\Item;
use App\Models\Sale;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Company::factory(10)->create();
        Customer::factory(10)->create();
        Item::factory(10)->create();
        Sale::factory(10)->create();
    }
}
