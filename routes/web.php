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

//jissyu5_1
Route::get('jissyu10', 'Jissyu5_1Controller@index');
Route::get('jissyu10/show', 'Jissyu5_1Controller@show');

//jissyu5_2
Route::get('jissyu11', 'Jissyu5_2Controller@index');
Route::get('jissyu11/show', 'Jissyu5_2Controller@show');
Route::get('jissyu11/add', 'Jissyu5_2Controller@add');
Route::post('jissyu11/add', 'Jissyu5_2Controller@create');
Route::get('jissyu11/edit', 'Jissyu5_2Controller@edit');
Route::post('jissyu11/edit', 'Jissyu5_2Controller@update');
Route::get('jissyu11/del', 'Jissyu5_2Controller@del');
Route::post('jissyu11/del', 'Jissyu5_2Controller@remove');

//jissyu5_3
Route::get('jissyu12', 'Jissyu5_3Controller@index');
Route::get('jissyu12/show', 'Jissyu5_3Controller@show');
Route::get('jissyu12/add', 'Jissyu5_3Controller@add');
Route::post('jissyu12/create', 'Jissyu5_3Controller@create');
Route::get('jissyu12/edit', 'Jissyu5_3Controller@edit')->name('edit');
Route::post('jissyu12/update', 'Jissyu5_3Controller@update');
Route::get('jissyu12/del', 'Jissyu5_3Controller@del');
Route::post('jissyu12/remove', 'Jissyu5_3Controller@remove');

//jissyu5_5
Route::get('customer', 'Jissyu5_5Controller@index');
Route::get('customer/add', 'Jissyu5_5Controller@add');
Route::post('customer/add', 'Jissyu5_5Controller@create');

//jissyu5_6
Route::get('ensyu1', 'Ensyu1Controller@index');
Route::get('ensyu1/show', 'Ensyu1Controller@show');
Route::get('ensyu1/add', 'Ensyu1Controller@add');
Route::post('ensyu1/create', 'Ensyu1Controller@create');
Route::get('ensyu1/edit', 'Ensyu1Controller@edit');
Route::post('ensyu1/update', 'Ensyu1Controller@update');
Route::get('ensyu1/del', 'Ensyu1Controller@del');
Route::post('ensyu1/remove', 'Ensyu1Controller@remove');



