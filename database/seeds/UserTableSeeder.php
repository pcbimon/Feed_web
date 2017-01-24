<?php

use Illuminate\Database\Seeder;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->delete();
        User::create([
          'name'=>'Test USer',
          'email'=>'test@gmail.com',
          'password'=>bcrypt('1234'),
          'path_pic'=>'img/avatar5.png'

        ]);
    }
}
