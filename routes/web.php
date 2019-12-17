<?php
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
//Route::resource('roadsters', 'RoadstersController');
Route::get('/categories/{category}', 'CategoriesController@result')->name('categories.show');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('roadsters', 'RoadstersController');
Route::get('/roadsters/{id}', 'RoadstersController@read');
Route::post('/roadsters/{id}', 'RoadstersController@read')->middleware('auth');
Route::get('/admin', function () {
    return view('theme.default');
});
