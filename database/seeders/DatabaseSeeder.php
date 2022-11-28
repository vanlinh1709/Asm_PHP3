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
//                'fullname'=> 'Trần Văn Linh ' . $i,
//                'email'=> 'linh' .$i . '@gmail.com',
//                'phonenumber'=> '012345678',
//                'avatar'=> 'avatar ' .$i. '.jpg',
//                'address'=> 'Hà nội',
//                'password' => Hash::make('123456'),
//                'role_id' => 1,

//	category_id	product_name	product_price	promo_price	number	status
                    'category_id' => 5,
                    'product_name' => 'Product ' .$i,
                    'product_price' => 100000,
                    'promo_price' => 80000,
                    'product_image' => '1.jpg',
                    'number' => 100,
                    'status' => 1,
            ];
            array_push($Bigarr, $arr);
            $i++;
        }//end while
//        fullname	email	phonenumber	avatar	address	password	role_id
        DB::table('product')->insert(
            $Bigarr
        );//End ->insert()
    }
}
