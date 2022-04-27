<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use Carbon\Carbon;

class CreateCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert([
            [ // 1
                'name' => 'Batteries', 
                'image' => 'img1.jpg', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [ // 2
                'name' => 'Coil', 
                'image' => null, 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [ // 3
                'name' => 'Butance', 
                'image' => 'img2.jpg', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
