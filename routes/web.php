<?php
use App\Http\Middleware\HelloMiddleware;
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


//第１引数　アドレス　第2引数　関数
Route::get('/', function () {
return view('welcome');
        //　　↑resources/views/welcome.blade.phpのこと！
});

Route::get('hello', 'HelloController@index');
Route::post('hello', 'HelloController@post');

//----実習用-----
Route::get('jissyu2', 'JissyuController@index');

//jissyu3_1
Route::get('jissyu3', 'Jissyu3_1Controller@index');
Route::post('jissyu3', 'Jissyu3_1Controller@post');

//jissyu3_2
Route::get('jissyu4', 'Jissyu3_2Controller@index');
Route::post('jissyu4', 'Jissyu3_2Controller@post');

//ブランチテスト
//ブランチテスト２
//ブランチテスト３
//ブランチテスト４

    