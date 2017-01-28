<?php

use Illuminate\Database\Seeder;
use App\SectionUser;
class SectionUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('section_users')->delete();
        SectionUser::create([
          'iduser'=>'2',
          'idsubject'=>'1'
        ]);
        SectionUser::create([
          'iduser'=>'2',
          'idsubject'=>'2'
        ]);
        SectionUser::create([
          'iduser'=>'2',
          'idsubject'=>'3'
        ]);
        SectionUser::create([
          'iduser'=>'2',
          'idsubject'=>'4'
        ]);
        SectionUser::create([
          'iduser'=>'2',
          'idsubject'=>'5'
        ]);
        SectionUser::create([
          'iduser'=>'2',
          'idsubject'=>'6'
        ]);
    }
}
