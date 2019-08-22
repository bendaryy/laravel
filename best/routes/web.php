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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/','home');
Route::view('about','about')->name('about');
Route::get('/contact','ContactFormController@create')->name('contact.create');
Route::post('/contact','ContactFormController@store')->name('contact.store');
// Route::view('contact-us','contact');

// Route::get('customers','customersController@index')->name('customers.index');
// Route::get('customers/create','customersController@create')->name('customers.create');
// Route::post('customers','customersController@store')->name('customers.store');
// Route::get('customers/{customer}','customersController@show')->name('customers.show')->middleware('can:view,customer');
// Route::get('customers/{customer}/edit','customersController@edit')->name('customers.edit');
// Route::patch('customers/{customer}','customersController@update')->name('customers.update');
// Route::DELETE('customers/{customer}','customersController@destroy')->name('customers.destroy');


Route::resource('customers','customersController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
