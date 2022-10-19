<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
Route::get('/indexhome', [App\Http\Controllers\IndexController::class, 'index']);

// CRUD ROUTES
Route::Resource('/employees',App\Http\Controllers\EmployeesController::class);
Route::Resource('/about',App\Http\Controllers\AboutController::class);
Route::Resource('/slider',App\Http\Controllers\SliderController::class);
Route::Resource('/servicesemp',App\Http\Controllers\ServicesController::class);
Route::Resource('/testinomial',App\Http\Controllers\TestinomialController::class);
Route::Resource('/portfolios',App\Http\Controllers\PortfolioController::class);
Route::Resource('/counter',App\Http\Controllers\CounterController::class);
Route::Resource('/values',App\Http\Controllers\ValuesController::class);
Route::Resource('/clients',App\Http\Controllers\ClientsController::class);
Route::Resource('/contacts',App\Http\Controllers\ContactController::class);

Route::post('/contact', [App\Http\Controllers\IndexController::class, 'contact'])->name('contact');
//auth routes
Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class,'index'])->name('home');



