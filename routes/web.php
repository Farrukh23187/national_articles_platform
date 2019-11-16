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
Route::view('/home', 'home');
Route::view('/about', 'about');

Route::get('/search', 'CompanyController@search');
Route::resource('companies', 'CompanyController');

Route::get('/search_employee', 'EmployeeController@search');
Route::resource('employees', 'EmployeeController');

Route::view('/contact', 'contact')->name('contact');
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');






Route::view('/backend','backend.login')->name('backend');
Route::post('/backend','AuthController@login')->name('backend');

Route::middleware(['auth:web'])->group(function () {
    Route::resources([
        'users' => 'UserController',
        'roles' => 'RoleController',
        'permissions' => 'PermissionController',
        'categories' => 'CategoryController',
        'articles' => 'ArticleController',
        'authors' => 'AuthorController',
        'journals' => 'JournalController'
        ]);

        Route::get('logout', 'AuthController@logout')->name('backend.logout');
        Route::view('/backend/index', 'backend/index')->name('index');
        
});
        // Route::resource('categories', 'CategoryController')->middleware('auth');
        // Route::resource('types', 'TypeController')->middleware('auth');
        // Route::resource('articles', 'ArticleController')->middleware('auth');
        // Route::resource('authors', 'AuthorController')->middleware('auth');
