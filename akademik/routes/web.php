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

Route::middleware(['auth'])->group(function()
{
	Route::get('/home', 'HomeController@index')->name('home');
	
	Route::resource('student', 'StudentController');
	Route::patch('student/{student}/evict', 'StudentController@evict')->name('student.evict');
	Route::get('student/{student}/move_in', 'StudentController@move_in')->name('student.move_in');
	Route::patch('student/{student}/move_in', 'StudentController@move_in_patch')->name('student.move_in_patch');
	Route::patch('student/{student}/kaucja', 'StudentController@kaucja')->name('student.kaucja');
	Route::get('student/{student}/add_payment', 'StudentController@add_payment')->name('student.add_payment');
	Route::post('student/{student}/add_payment', 'StudentController@add_payment_store')->name('student.add_payment_store');
	
	Route::resource('room', 'RoomController');
	Route::resource('payment', 'PaymentController');
	Route::resource('alert', 'AlertController');
});

