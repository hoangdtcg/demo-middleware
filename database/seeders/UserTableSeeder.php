<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
//        DB::table('products')->insert(["name"=>"Khoi", "description"=>"Khuyến mãi", "price"=>"100"]);

//        $product = new Product();
//        $product->name = "Kiên";
//        $product->description = "Hàng tồn";
//        $product->price = "1000";
//        $product->save();

        Product::factory()->count(10)->create();
    }
}
