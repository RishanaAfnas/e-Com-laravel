<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
    
       
         [
            'name'=>'Panasonic TV',
            "price"=>'400',
            "description"=>'A smart TV with much more features ',
            "category"=>"TV",
            "gallery"=>"https://i.gadgets360cdn.com/products/televisions/large/1548154685_832_panasonic_32-inch-lcd-full-hd-tv-th-l32u20.jpg"
         ],
         [
            'name'=>'Sony TV',
            "price"=>'600',
            "description"=>'A smart TV much more features ',
            "category"=>"TV",
            "gallery"=>"https://4.imimg.com/data4/PM/KH/MY-34794816/lcd-500x500.png"
         ],
         [
            'name'=>'LG fridge',
            "price"=>'200',
            "description"=>'A fridge much more features ',
            "category"=>"Fridge",
            "gallery"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTFx-2-wTOcfr5at01ojZWduXEm5cZ-sRYPJA&usqp=CAU"
         ]
        ]);
    }
}
