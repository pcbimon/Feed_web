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
// Route::get('/main', function () {
//     return view('main.index');
// });
// Route::get('/login', function () {
//     return view('login');
// });
// Route::resource('users','UserController');
Route::get('/checkuser', 'LoginController@checkuser');
Route::group(['middleware'=>['web']],function(){
  Route::get('/login',['as'=>'login','uses'=>'AuthController@login']);
  Route::get('/handlelogin',['as'=>'handlelogin','uses'=>'AuthController@handlelogin']);
  Route::get('/logout',['as'=>'logout','uses'=>'AuthController@logout']);
});
Route::group(['middleware'=>['web','auth']],function(){
  Route::get('/main',['as'=>'main','uses'=>'UserController@main']);
  Route::resource('/muser','UserController');
  Route::resource('/tuser','TypeUserController');
  Route::resource('/subjectanalys','SubjectAnalysisController');
});

//simple crud
// Route::get ( '/', 'IndexController@readItems' );
// Route::post ( '/addItem', 'IndexController@addItem' );
// Route::post ( '/editItem', 'IndexController@editItem' );
// Route::post ( '/deleteItem', 'IndexController@deleteItem' );
