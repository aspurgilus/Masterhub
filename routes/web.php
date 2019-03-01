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
use Illuminate\Support\Facades\Auth;

Route::get('/', 'MainController@index')->name('main');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/email/verifysuccess','HomeController@verifiedMail')->name('verified');

Route::resource('/profile','UserController')->names(['index' => 'profile']);



Route::group([
	'prefix' => 'admin',
	'as' => 'admin.',
	'namespace' => 'Admin',
	'middleware' => ['auth'],
],function() {
	Route::get('/','HomeController@index')->name('home');
	Route::resource('users','UsersController');
});

