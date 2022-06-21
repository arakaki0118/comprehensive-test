<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/index', 'IndexController@index')->name('index');

Route::get('/support', 'SupportController@support');

// サポート内容投稿
Route::post('/support', 'SupportController@supportCreate')->name('supportCreate');

Route::get('/supportShow/{support_id}', 'SupportController@supportShowPage')->name('supportShow');

Route::get('/edit/{support_id}', 'SupportController@supportEdit')->name('supportEdit');

Route::post('/edit', 'SupportController@Edit');


Route::get('/destroy/{support_id}', 'SupportController@supportDestroy')->name('supportDestroy');
