<?php

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

// 新規登録
Route::get('signup','Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup','Auth\RegisterController@register')->name('signup.post');

// ログイン認証
Route::get('login','Auth\LoginController@showLoginForm')->name('login');
Route::post('login','Auth\LoginController@login')->name('login.post');
Route::get('logout','Auth\LoginController@logout')->name('logout.get');

// ユーザ一覧表示
Route::resource('users','UsersController',['only'=>['index']]);

//マイページ表示
Route::get('users/{userid}/userpage','UsersController@userpage')->name('users.userpage');
Route::get('users/mypage','UsersController@mypage')->name('users.mypage');

// 管理画面
Route::resource('films','FilmsController');

// 批評画面
Route::resource('critics','CriticsController',['except' => ['create','show']]);
Route::group(['middleware' => ['auth']], function () {
    
    
    Route::get('critics/{critic}','CriticsController@show')->name('critics.show');
    Route::get('critics/{filmid}/create', 'CriticsController@create')->name('critics.create');
    
});    