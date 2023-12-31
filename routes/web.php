<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginRegistrationController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\DomainController;

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

Route::get('/',[HomeController::class,'index']);
Route::get('paypal', function () {
    return view('paypal');
});
Route::get('privacy-policy', function () {
    return view('privacy-policy');
});
Route::get('domain-search', [ServiceController::class, 'domainSearch']); 
Route::get('checkout', [CheckoutController::class, 'index']); 
Route::get('add-domain', [DomainController::class, 'addDomain']); 
Route::get('our-service', [ServiceController::class, 'webHosting']); 
Route::get('web-hosting-starter', [ServiceController::class, 'webHosting']); 
Route::get('web-hosting-plus', [ServiceController::class, 'webHosting']); 
Route::get('web-hosting-pro', [ServiceController::class, 'webHosting']); 
Route::get('contact-us', [ContactController::class, 'index']); 
Route::get('cart', [CartController::class, 'index']); 

Route::post('/add-to-cart', [CartController::class,'addToCart'])->name('cart.add');
Route::post('/add-domain-process', [DomainController::class,'addDomainProcess']);

Route::get('dashboard', [LoginRegistrationController::class, 'dashboard']); 
Route::get('login', [LoginRegistrationController::class, 'index']);
Route::post('validate-login', [LoginRegistrationController::class, 'validateLogin']);
Route::get('forgot-password', [LoginRegistrationController::class, 'forgotPassword']);
Route::post('forgot-password-process', [LoginRegistrationController::class, 'forgotPasswordProcess']);
Route::get('registration', [LoginRegistrationController::class, 'registration']);
Route::post('validate-registration', [LoginRegistrationController::class, 'validateRegistration']);
Route::get('signout', [LoginRegistrationController::class, 'signOut']);
