<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('category_products')->insert([
            ['name' => 'Furniture'],
            ['name' => 'Electronics'],
            ['name' => 'Clothing'],
        ]);
    }
}
