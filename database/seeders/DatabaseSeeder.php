<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(50)->create();
        \App\Models\Seller::factory(50)->create();
        \App\Models\Invoice::factory(50)->create();
        \App\Models\Product::factory(50)->create();
    }
}
