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
 //---------トップページ----------
Route::get('hello', 'HelloController@index');
Route::post('hello', 'HelloController@post');

 //---------データの挿入----------
Route::get('hello/add', 'HelloController@add');
Route::post('hello/add', 'HelloController@create');


 //---------データの更新----------
 Route::get('hello/edit', 'HelloController@edit');
 Route::post('hello/edit', 'HelloController@update');
 
  //---------データの削除----------
  Route::get('hello/del', 'HelloController@del');
  Route::post('hello/del', 'HelloController@remove');

 Route::get('hello/show', 'HelloController@show');

 //----------Person-------------
 Route::get('person', 'PersonController@index');

 Route::get('person/find', 'PersonController@find');
 Route::post('person/find', 'PersonController@search');

 Route::get('person/add', 'PersonController@add');
 Route::post('person/add', 'PersonController@create');

 Route::get('person/edit', 'PersonController@edit');
 Route::post('person/edit', 'PersonController@update');

 Route::get('person/del', 'PersonController@delete');
 Route::post('person/del', 'PersonController@remove');

 //----------Board-------------
 Route::get('board', 'BoardController@index');

 Route::get('board/add', 'BoardController@add');
 Route::post('board/add', 'BoardController@create');

 //----------RESTful-------------
 Route::resource('rest', 'RestappController'); //7つのアクションの登録
 Route::get('hello/rest', 'HelloController@rest');

//----------セッション-------------
Route::get('hello/session', 'HelloController@ses_get');
Route::post('hello/session', 'HelloController@ses_put');
  
 //----実習用-----
Route::get('jissyu2', 'JissyuController@index');

//jissyu3_1
Route::get('jissyu3', 'Jissyu3_1Controller@index');
Route::post('jissyu3', 'Jissyu3_1Controller@post');

//jissyu3_2
Route::get('jissyu4', 'Jissyu3_2Controller@index');
Route::post('jissyu4', 'Jissyu3_2Controller@post');




    