<?php
use App\User;
use App\Receive;
use App\SubjectAnalysis;
use App\ReceiveDetail;
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
Route::get('/testdata', function()
{
  $excelFile = 'public/excel/test.xlsx';
      $records = \Excel::load($excelFile, function ($reader) {
               $reader->noHeading();
         })->get()[8]->toArray(); //get value in Row

         dd($records);
});
Route::get('/pdf1','PDFController@pdf');
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
  Route::get('/viewsubject',array('as'=>'ViewOnly','uses'=>'SubjectAnalysisController@ViewOnly'));
  Route::resource('/customer','CustomerController');
  Route::resource('/product','ProductController');
  Route::resource('/receive','ReceiveController');
    Route::post('receive/showcustomer','ReceiveController@showcustomer');
    Route::post('receive/showproduct','ReceiveController@showproduct');
    Route::post('receive/check','ReceiveController@receivedetail');
  Route::resource('received/detail','ReceiveDetailController');
    Route::post('received/detail/addsubject','ReceiveDetailController@addsubject');
  Route::resource('received/check','CheckandPrintController');
  Route::resource('received/print','ReceiveResultController');
    Route::post('received/print/pdf','ReceiveResultController@PrintReport');
    Route::post('received/print/sticker','ReceiveResultController@PrintSticker');
});



//simple crud
// Route::get ( '/', 'IndexController@readItems' );
// Route::post ( '/addItem', 'IndexController@addItem' );
// Route::post ( '/editItem', 'IndexController@editItem' );
// Route::post ( '/deleteItem', 'IndexController@deleteItem' );
