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
          'name'=>'หน่วยรับตัวอย่างอาหารสัตว์',
        ]);
    }
}
