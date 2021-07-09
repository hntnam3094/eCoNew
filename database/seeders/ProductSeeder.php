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
        DB::table('products')->insert(
            [
                [
                    'name' => 'Oppo Mobile',
                    'price' => '500',
                    'category' => 'mobile',
                    'description' => 'LG Mobile is a Best Product',
                    'gallery' => 'https://static.toiimg.com/photo/71851476.cms'
                ],
                [
                    'name' => 'IPhone Mobile',
                    'price' => '100',
                    'category' => 'mobile',
                    'description' => 'LG Mobile is a Best Product',
                    'gallery' => 'https://image.thanhnien.vn/1024/uploaded/nthanhluan/2021_06_26/iphone12_ytct.jpg'
                ],
                [
                    'name' => 'Samsung Mobile',
                    'price' => '300',
                    'category' => 'mobile',
                    'description' => 'LG Mobile is a Best Product',
                    'gallery' => 'https://media.doanhnghiepvn.vn/Images/Uploaded/Share/2021/02/03/ec2samsung-galaxy-s21-ultra-5g.jpg'
                ],
                [
                    'name' => 'Nokia Mobile',
                    'price' => '400',
                    'category' => 'mobile',
                    'description' => 'LG Mobile is a Best Product',
                    'gallery' => 'https://cdn01.dienmaycholon.vn/filewebdmclnew/public//userupload/images/dien-thoai-nokia-5-3-chat-luong-cao-4.png'
                ],
                [
                    'name' => 'Samsung Tivi',
                    'price' => '300',
                    'category' => 'tivi',
                    'description' => 'LG Mobile is a Best Product',
                    'gallery' => 'https://cdn.tgdd.vn/Products/Images/1942/219650/ffalcon-40sf1-9-550x340.jpg'
                ],
                [
                    'name' => 'LG Tivi',
                    'price' => '400',
                    'category' => 'tivi',
                    'description' => 'LG Mobile is a Best Product',
                    'gallery' => 'https://cdn.mediamart.vn/Product/tv-led-smart-uhd-55-lg-55um7100pta-x7r35s.png'
                ]
            ]
        );
    }
}
