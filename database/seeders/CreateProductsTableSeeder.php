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
                'name' => 'DURACELL 9V 1PK (12CT BOX)', 
                'image' => 'img1.jpg', 
                'category_id' => 1, 
                'brand_id' => 1, 
                'price' => '2.99', 
                'quantity' => '120', 
                'description' => 'DURACELL 9V 1PK (12CT BOX)', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [ // 2
                'name' => 'COILS:SMOK NORD 2 REPLACEMENT PODS 3PCS', 
                'image' => 'img2.jpg', 
                'category_id' => 2, 
                'brand_id' => 1, 
                'price' => '2.23', 
                'quantity' => '10', 
                'description' => 'COILS:SMOK NORD 2 REPLACEMENT PODS 3PCS', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [ // 3
                'name' => 'BUTANE:BUTANE REFILL 20CT', 
                'image' => null, 
                'category_id' => 3, 
                'brand_id' => 1, 
                'price' => '10.00', 
                'quantity' => '140', 
                'description' => 'BUTANE:BUTANE REFILL 20CT', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [ // 4
                'name' => 'COILS:X-FORCE COILS', 
                'image' => 'img3.jpg', 
                'category_id' => 2, 
                'brand_id' => 1, 
                'price' => '8.90', 
                'quantity' => '75', 
                'description' => 'COILS:X-FORCE COILS', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [ // 5
                'name' => 'DURACELL D 2 PK ( 6CT BOX )', 
                'image' => null, 
                'category_id' => 1, 
                'brand_id' => 1, 
                'price' => '1.89', 
                'quantity' => '53', 
                'description' => 'DURACELL D 2 PK ( 6CT BOX )', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
