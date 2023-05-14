<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('products')->insert([
            [
                'name' => 'Men\'s Black and White Winter Jacket',
                'price' => '3200Ksh',
                'category' => 'Men',
                'description' => 'This puffer-style jacket is made from high-quality materials that provide superior insulation and comfort. The black and white color block design adds a stylish touch to this functional winter essential.',
                'gallery' => 'https://ae01.alicdn.com/kf/HTB1oZfGNFXXXXbVXVXXq6xXFXXX9/OFF-WHITE-Winter-Men-Parkas-Jacket-Hooded-Coat-Mens-Winter-Jackets-And-Coats-Windbreaker-Mens-Parka.jpg'
            ],
            [
                'name' => 'Men\'s Quilted Puffer Jacket',
                'price' => '2900Ksh',
                'category' => 'Men',
                'description' => 'Our men\'s quilted puffer jacket is the perfect choice for staying warm and looking good this classic winter jacket. The high-quality materials and quilted design provide maximum',
                'gallery' => 'https://m.media-amazon.com/images/I/81peEuq967L._AC_UY500_.jpg'
            ],
            [
                'name' => 'Men\'s Black and White Padded Jacket',
                'price' => '2800Ksh',
                'category' => 'Men',
                'description' => 'Our men\'s black and white',
                'gallery' => 'https://img.ssensemedia.com/images/b_white,g_center,f_auto,q_auto:best/222251M178002_1/balmain-black-down-quilted-jacket.jpg'
            ]
        ]);
    }
}
