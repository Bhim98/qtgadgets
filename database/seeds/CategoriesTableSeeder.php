<?php

use App\Category;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();

        Category::insert([
            ['name' => 'Laptops', 'slug' => 'laptops', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Desktops', 'slug' => 'desktops', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Mobile Phones', 'slug' => 'mobile-phones', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Tablets', 'slug' => 'tablets', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'PC Parts', 'slug' => 'pc-parts', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Gaming', 'slug' => 'gaming', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Networking', 'slug' => 'networking', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }

}
