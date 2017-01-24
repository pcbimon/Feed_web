<?php

use Illuminate\Database\Seeder;
use App\TypeUser;
class TypeUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('type_users')->delete();
        TypeUser::create([
          'TypeName'=>'Administator'
        ]);
    }
}
