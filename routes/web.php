<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\MailController;

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

Route::get('send-mail', [MailController::class, 'index']);

Route::get('stripe', [StripeController::class, 'index']);
Route::post('stripe/create-charge', [StripeController::class, 'createCharge'])->name('stripe.create-charge');


// Route::get('/', function () {
//     return view('login');
// });

Route::post('/create',[App\Http\Controllers\EditorController::class,'index']);

// Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
Route::get('/', [App\Http\Controllers\IndexController::class,'index']);
Route::get('/read', [App\Http\Controllers\IndexController::class,'service']);
Route::get('/readmore', [App\Http\Controllers\IndexController::class,'about']);
Route::get('/link', [App\Http\Controllers\IndexController::class,'link']);
Route::get('/blog', [App\Http\Controllers\IndexController::class,'blog']);
// Route::get('/indexhome', [App\Http\Controllers\IndexController::class, 'index']);

Route::post('/contact', [App\Http\Controllers\IndexController::class, 'contact'])->name('contact');

//auth routes
Route::group(['middleware' => 'prevent-back-history'],function(){
	
Auth::routes();
Route::get('/admin', [App\Http\Controllers\HomeController::class,'index']);

//Route::get('/admins', [App\Http\Controllers\HomeController::class,'index'])->name('home');

});
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
Route::Resource('/faq',App\Http\Controllers\FaqController::class);
Route::Resource('/foots',App\Http\Controllers\FooterController::class);
Route::Resource('/subs',App\Http\Controllers\SubscribeController::class);
// Route::Resource('/teams',App\Http\Controllers\ContactController::class);



