<?php

use Illuminate\Database\Seeder;
use App\Customer;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('customers')->delete();
        Customer::create([
          'name'=>'ปฏิพัทธ์ ชิวปรีชา',
          'address'=>'109 m.6 Huymoung',
          'email'=>'pcbimon@gmail.com',
          'fax'=>'924934708',
          'telephone'=>'0924934708',
          'path_pic'=>'img/customer/pcbimon@gmail.com201706300924934708.png'
        ]);
    }
}
