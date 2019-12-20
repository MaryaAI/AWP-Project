<?php

use App\Http\Controllers\AdminsController;
use Doctrine\DBAL\Schema\Index;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', 'HomeController@index')->name('index');
Route::get('/search', 'HomeController@search')->name('search');
Route::get('/categories/{category}', 'CategoriesController@result')->name('categories.show');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/roadsters', 'RoadstersController');
Route::get('/roadsters/{id}', 'RoadstersController@read');
Route::post('/roadsters/{id}', 'RoadstersController@read')->middleware('auth');

Route::get('/admin', 'AdminsController@index')->name('admin.index')->middleware('auth');;

Route::get('/admin/roadsters', 'RoadstersController@index');
Route::get('/admin/roadsters/create', 'RoadstersController@create')->name('roadsters.create');
Route::post('/admin/roadsters', 'RoadstersController@store');
Route::get('/admin/roadsters/{roadster}', 'RoadstersController@show')->name('roadsters.show');
Route::patch('/admin/roadsters/{roadster}/edit', 'RoadstersController@edit')->name('roadsters.edit');
Route::get('/admin/roadsters/{roadster}', 'RoadstersController@update');

Route::resource('/admin/categories', 'CategoriesController');
Route::resource('/admin/roadsters', 'RoadstersController');


Route::post('/roadsters/{roadster}/rate', 'RoadstersController@rate')->name('roadster.rate');
Route::post('/cart', 'CartController@addToCart')->name('cart.add')->middleware('auth');
Route::get('/cart', 'CartController@viewCart')->name('cart.view');
Route::post('/removeOne/{roadster}', 'CartController@removeOne')->name('cart.remove_one');
Route::post('/removeAll/{roadster}', 'CartController@removeAll')->name('cart.remove_all');

