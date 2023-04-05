<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
            'name'=>'Panasonic Tv',
            'price'=>'5000',
            'description'=>'A smartphone with 4gb ram etc fetures',
            'category'=>'television',
            'gallery'=>'https://cdn.buyabans.com/media/catalog/product/cache/b26914b4315099761016f66ddcabadb6/7/0/700_1_1.png',
            ],
            [
            'name'=>'Singer Tv',
            'price'=>'6000',
            'description'=>'A smartphone with 4gb ram etc fetures',
            'category'=>'television',
            'gallery'=>'https://www.jungle.lk/wp-content/uploads/2021/09/Panasonic-32-Android-Smart-TV-TH-32JS650N.jpg',
            ],
            [
            'name'=>'Samsung Tv',
            'price'=>'7000',
            'description'=>'A smartphone with 4gb ram etc fetures',
            'category'=>'television',
            'gallery'=>'https://damro.lk/wp-content/uploads/2020/08/ITVE3205.jpg',
            ],
            [
            'name'=>'Zony Tv',
            'price'=>'6000',
            'description'=>'A smartphone with 4gb ram etc fetures',
            'category'=>'television',
            'gallery'=>'https://d3fa68hw0m2vcc.cloudfront.net/bf9/248305513.jpeg',
            ]
        ]);
    }
}
