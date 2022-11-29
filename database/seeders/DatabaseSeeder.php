<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $Bigarr = [];
        $i = 0;
        while($i < 5) {
            $arr = [
//	category_id	product_name	product_price	promo_price	number	status
                    'category_id' => 5,
                    'product_name' => 'Product ' .$i,
                    'product_price' => 100000 + ($i * 5000),
                    'promo_price' => 80000 + ($i * 5000),
                    'product_image' => ($i+3).'1'.'.jpg',
                    'number' => 10 + $i,
                    'status' => 1,
                    'product_des'=>'- Được xử lý đặc biệt để cải thiện tình trạng co rút vải sau khi giặt. Phần vai và phần thân rộng hơn để tạo cảm giác vừa vặn.'
            ];
            array_push($Bigarr, $arr);
            $i++;
        }//end while
//        fullname	email	phonenumber	avatar	address	password	role_id
        DB::table('role')->insert(
            [
                [
                    'name' => 'Người dùng'
                ],
                [
                    'name' => 'Quản trị viên'
                ]
            ]
        );//End ->insert()
    }
}
