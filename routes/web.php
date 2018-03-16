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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//test route för movie index.
Route::get('/movies','MovieController@index')->name('movies.index');
//test route för movie show.
Route::get('/movies/{movie}', 'MovieController@show')->name('movies.show');

//gör en grupp med prefixet admin, så slipper man skriva /admin/login hela tiden.
Route::prefix('admin')->group(function(){
  Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
  Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
  Route::get('/','AdminController@index')->name('admin.dashboard');
});
