<?php

use Illuminate\Database\Seeder;
use App\Product;

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
        \DB::table('products')->delete();
        Product::create([
          'name'=>'ชานอ้อยบดละเอียด',
          'countable'=>'100',
          'place_to_buy'=>'ร้านสหกรณ์การเกษตร ตำบลห้วยขวาง อำเภอแม่ขจี จังหวัดนครปฐม',
          'syntax'=>'สีเหลือง ติดป้ายชื่อ นายมานี',
          'namebill'=>'นายมานี หนองงูเหลือม',
          'path_pic'=>'img/testproduct.png',
        ]);

    }
}
