<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
          DB::table('products')->insert([
        [
          'name'=>'Samsung',
          'price'=>'300',
          'description'=>'A smartphone extra slim display',
          'category'=>'mobile',
          'gallery'=>'https://www.pexels.com/photo/black-samsung-android-smartphone-on-top-of-brown-wooden-tablke-214487/',
        ],
        [
          'name'=>'Iphone',
          'price'=>'800',
          'description'=>'King of all time smartphone',
          'category'=>'mobile',
          'gallery'=>'https://www.pexels.com/photo/silver-iphone-x-with-airpods-788946/',
        ],
        [
          'name'=>'Motorola',
          'price'=>'500',
          'description'=>'One of oldest smartphone',
          'category'=>'mobile',
          'gallery'=>'https://www.pexels.com/photo/selective-focus-photography-of-person-holding-iphone-displaying-white-screen-336948/',
        ],
        [
          'name'=>'Nokia',
          'price'=>'200',
          'description'=>'most sell phone set ever',
          'category'=>'mobile',
          'gallery'=>'https://www.pexels.com/photo/smartphone-laptop-internet-connection-5741605/',
        ],

        ]);

    }
}
