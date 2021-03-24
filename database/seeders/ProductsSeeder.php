<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder

{

 

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('product')->insert([
            [
                'name'=>'samsung',
                "price"=>"300",
                "description"=>"POI which is better to use",
                "category"=>"mobile",
                "gallery"=>"https://www.amazon.in/Android-Smartphone-FidgetGear-Mobile-British/dp/B07ZNX5X65"
            ],
            [
                'name'=>'Nokia',
                "price"=>"400",
                "description"=>"qwe which is better to use",
                "category"=>"mobile",
                "gallery"=>"https://www.setaswall.com/realme-5-wallpapers/"
            ],
            [
                'name'=>'oppo',
                "price"=>"500",
                "description"=>"XYZ which is better to use",
                "category"=>"mobile",
                "gallery"=>"https://www.gizbot.com/photos/vivo-u1-images-4683/"
            ],
            [
                'name'=>'Vivo',
                "price"=>"600",
                "description"=>"ABC which is better to use",
                "category"=>"mobile",
                "gallery"=>"https://www.gizbot.com/photos/vivo-s1-images-4764/"
            ]
           
        ]);
    }
}
