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
Route::get('hello', 'HelloController@index')
->middleware('auth');
Route::post('hello', 'HelloController@post');

//----------ログイン処理-----------
Route::get('hello/auth', 'HelloController@getAuth');
Route::post('hello/auth', 'HelloController@postAuth');

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

//---------Restful-----------
Route::get('rest', 'RestappController@index');
Route::get('rest/create', 'RestappController@create');
Route::post('rest', 'RestappController@store');
Route::get('rest/{id}', 'RestappController@show');
Route::get('rest/{id}/edit', 'RestappController@edit');
Route::put('rest/{id}', 'RestappController@update');
Route::delete('rest/{id}', 'RestappController@destroy');
Route::get('hello/rest', 'HelloController@rest');

//セッションの利用
Route::get('hello/session', 'HelloController@ses_get');
Route::post('hello/session', 'HelloController@ses_put');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
