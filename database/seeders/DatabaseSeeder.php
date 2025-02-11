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
        $this->call(UsersTabelSeeder::class);
         \App\Models\User::factory(10)->create();
         \App\Models\Category::factory(20)->create();
         \App\Models\Brand::factory(10)->create();
         \App\Models\Product::factory(50)->create();
    }
}
