<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'โอวัลติน 3 in 1 เครื่องดื่มมอลต์สกัด รสช็อกโกแลต',
                'product_type_id' => 2,
                'image_url' => 'https://st.bigc-cs.com/cdn-cgi/image/format=webp,quality=90/public/media/catalog/product/03/88/8850086164903/8850086164903_1-20221128120234-.jpg',
                'cost' => 50.00,
                'price' => 55.00,
                'qty' => 100      
            ],
            [
                'name' => 'เครื่องดื่มช็อกโกแลต ไมโล Active-Go 900 กรัม',
                'product_type_id' => 2,
                'image_url' => 'https://officework.co.th/upload/product/1002-0050-01.JPG',
                'cost' => 40.00,
                'price' => 45.00, 
                'qty' => 150     
            ],
        ];
        DB::table('products')->insert($data);
        }
}

