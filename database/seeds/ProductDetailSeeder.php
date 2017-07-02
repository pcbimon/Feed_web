<?php

use Illuminate\Database\Seeder;
use App\ProductDetail;

class ProductDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //'syntax'=>'สีเหลือง ติดป้ายชื่อ นายมานี',
        \DB::table('product_details')->delete();
        ProductDetail::create([
          'id_product'=>'1',
          'syntax'=>'T1R1'
        ]);
        ProductDetail::create([
          'id_product'=>'1',
          'syntax'=>'T1R2'
        ]);
        ProductDetail::create([
          'id_product'=>'1',
          'syntax'=>'T1R3'
        ]);
        ProductDetail::create([
          'id_product'=>'1',
          'syntax'=>'T1R4'
        ]);
        ProductDetail::create([
          'id_product'=>'1',
          'syntax'=>'T1R5'
        ]);
        ProductDetail::create([
          'id_product'=>'1',
          'syntax'=>'T1R6'
        ]);
        ProductDetail::create([
          'id_product'=>'1',
          'syntax'=>'T1R7'
        ]);
        ProductDetail::create([
          'id_product'=>'1',
          'syntax'=>'T1R8'
        ]);
        ProductDetail::create([
          'id_product'=>'1',
          'syntax'=>'T1R9'
        ]);
        ProductDetail::create([
          'id_product'=>'1',
          'syntax'=>'T1R10'
        ]);
    }
}
