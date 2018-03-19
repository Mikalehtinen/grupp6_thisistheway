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

Route::get('/home/{user}', 'HomeController@show')->name('home.show');
Route::post('/home', 'RatingController@store')->name('ratings.store');
Route::get('/home/{rating}', 'RatingController@show')->name('userratings.show');


Route::get('/movies','MovieController@index')->name('movies.index');
Route::post('/movies','MovieController@store')->name('movies.store');
Route::get('/movies/create', 'MovieController@create')->name('movies.create');
Route::get('/movies/{movie}', 'MovieController@show')->name('movies.show');
Route::get('/movies/{movie}/edit', 'MovieController@edit')->name('movies.edit');
Route::put('/movies/{movie}', 'MovieController@update')->name('movies.update');

Route::get('/movies/{rating}', 'RatingController@show')->name('rating.show');
Route::get('/movies/{rating}', 'RatingController@index')->name('rating.index');


Route::get('/actors', 'ActorController@index')->name('actors.index');
Route::post('/actors', 'ActorController@store')->name('actors.store');
Route::get('/actors/create', 'ActorController@create')->name('actors.create');
Route::get('/actors/{actor}', 'ActorController@show')->name('actors.show');
Route::get('/actors/{actor}/edit', 'ActorController@edit')->name('actors.edit');
Route::put('/actors/{actor}', 'ActorController@update')->name('actors.update');

Route::get('/directors', 'DirectorController@index')->name('directors.index');
Route::post('/directors', 'DirectorController@store')->name('directors.store');
Route::get('/directors/create', 'DirectorController@create')->name('directors.create');
Route::get('/directors/{director}', 'DirectorController@show')->name('directors.show');
Route::get('/directors/{director}/edit', 'DirectorController@edit')->name('directors.edit');
Route::put('/directors/{director}', 'DirectorController@update')->name('directors.update');


//gör en grupp med prefixet admin, så slipper man skriva /admin/login hela tiden.
Route::prefix('admin')->group(function(){
  Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
  Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
  Route::get('/','AdminController@index')->name('admin.dashboard');
  Route::get('/{admin}','AdminController@show')->name('admin.show');
});
