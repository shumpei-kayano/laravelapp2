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
//----------トップページの表示-----------
Route::get('hello', 'HelloController@index');
Route::post('hello', 'HelloController@post');

//----------データの挿入-----------
Route::get('hello/add', 'HelloController@add');
Route::post('hello/add', 'HelloController@create');

//----------データの更新-----------
Route::get('hello/edit', 'HelloController@edit');
Route::post('hello/edit', 'HelloController@update');

//----------データの削除-----------
Route::get('hello/del', 'HelloController@del');
Route::post('hello/del', 'HelloController@remove');

Route::get('hello/show', 'HelloController@show');


//-------------ORM(Person)--------------
Route::get('person', 'PersonController@index'); 

//検索
Route::get('person/find', 'PersonController@find');
Route::post('person/find', 'PersonController@search');
//新規保存
Route::get('person/add', 'PersonController@add');
Route::post('person/add', 'PersonController@create');
//更新
Route::get('person/edit', 'PersonController@edit');
Route::post('person/edit', 'PersonController@update');
//削除
Route::get('person/del', 'PersonController@delete');
Route::post('person/del', 'PersonController@remove');

//-------------ORM(Board)--------------
Route::get('board', 'BoardController@index');

Route::get('board/add', 'BoardController@add');
Route::post('board/add', 'BoardController@create');


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

//jissyu6_1
Route::get('jissyu13', 'Jissyu6_1Controller@index');
Route::post('jissyu13/find', 'Jissyu6_1Controller@find');

//jissyu6_3
Route::get('jissyu14', 'Jissyu6_3Controller@index');
Route::post('jissyu14/find', 'Jissyu6_3Controller@find');
Route::get('jissyu14/show', 'Jissyu6_3Controller@show');
Route::get('jissyu14/add', 'Jissyu6_3Controller@add');
Route::post('jissyu14/create', 'Jissyu6_3Controller@create');
Route::get('jissyu14/edit', 'Jissyu6_3Controller@edit');
Route::post('jissyu14/update', 'Jissyu6_3Controller@update');
Route::get('jissyu14/del', 'Jissyu6_3Controller@del');
Route::post('jissyu14/remove', 'Jissyu6_3Controller@remove');

//jissyu6_4
Route::get('jissyu15', 'Jissyu6_4Controller@index');
Route::get('jissyu15/add', 'Jissyu6_4Controller@add');
Route::post('jissyu15/create', 'Jissyu6_4Controller@create');
