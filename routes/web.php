<?php
use App\Http\Controllers\EmployeeController;

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


Route::view('/', 'home');
Route::view('/about', 'about');

Route::get('/search', 'CompanyController@search');
Route::resource('companies', 'CompanyController')->middleware('auth');

Route::get('/search_employee', 'EmployeeController@search');

Route::resource('employees', 'EmployeeController')->middleware('auth');
Route::view('/contact', 'contact')->name('contact');

Route::resource('authors', 'AuthorController')->middleware('auth');
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
