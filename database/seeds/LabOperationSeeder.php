<?php

use Illuminate\Database\Seeder;
use App\LabOperation;
class LabOperationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('lab_operations')->delete();
        LabOperation::create([
          'name'=>'1'
        ]);
        LabOperation::create([
          'name'=>'2'
        ]);
    }
}
