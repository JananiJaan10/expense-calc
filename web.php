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
Route::get('/daily', function () {
  return view('daily');
});
Route::get('/monthly', function () {
  return view('monthly');
});

Route::get('/total', function () {return view('total');})->name('total');
Route::get('/yearly', function () {
  return view('yearly');
});


Route::resource('user','PostController');

// InvalidArgumentException in UrlGenerator.php line 304:
// Route [home] not defined.