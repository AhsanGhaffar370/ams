<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use Carbon\Carbon;

class CreateProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::insert([
            [ // 1
                'name' => 'product 1', 
                'category_id' => 1, 
                'image' => 'img1.jpg', 
                'price' => '20', 
                'description' => 'lorem ipsum', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [ // 2
                'name' => 'product 2', 
                'category_id' => 2, 
                'image' => 'img2.jpg', 
                'price' => '20', 
                'description' => 'lorem ipsum', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [ // 2
                'name' => 'product 3', 
                'category_id' => 2, 
                'image' => 'img3.jpg', 
                'price' => '20', 
                'description' => 'lorem ipsum', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [ // 2
                'name' => 'product 4', 
                'category_id' => 2, 
                'image' => 'img4.jpg', 
                'price' => '20', 
                'description' => 'lorem ipsum', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [ // 2
                'name' => 'product 5', 
                'category_id' => 2, 
                'image' => 'img5.jpg', 
                'price' => '20', 
                'description' => 'lorem ipsum', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
