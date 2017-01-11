<?php
use App\User;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('indexfirst');
});
// Route::get('/login', function () {
//     return view('login');
// });
Route::resource('users','UserController');
Route::get('/checkuser', 'LoginController@checkuser');
Route::group(['middleware'=>['web']],function(){
  Route::get('/login',['as'=>'login','uses'=>'AuthController@login']);
  Route::get('/handlelogin',['as'=>'handlelogin','uses'=>'AuthController@handlelogin']);
});
