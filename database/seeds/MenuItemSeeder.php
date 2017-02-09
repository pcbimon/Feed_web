<?php

use Illuminate\Database\Seeder;
use App\MenuItem;
class MenuItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      \DB::table('menu_items')->delete();
      MenuItem::create([
        'name'=>'หน่วยรับตัวอย่างอาหารสัตว์',
      ]);
      MenuItem::create([
        'name'=>'หน่วยการวิเคราะห์',
      ]);
      MenuItem::create([
        'name'=>'หน่วยตรวจสอบข้อมูล',
      ]);
    }
}
