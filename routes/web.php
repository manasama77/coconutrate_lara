<?php

use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [LandingController::class, 'index'])->name('home');
Route::get('/about-us', [LandingController::class, 'about_us'])->name('about_us');
Route::get('/our-innovation', [LandingController::class, 'our_innovation'])->name('our_innovation');
Route::get('/our-method', [LandingController::class, 'our_method'])->name('our_method');
Route::get('/nutritional-properties', [LandingController::class, 'nutritional_properties'])->name('nutritional_properties');
Route::get('/contact-us', [LandingController::class, 'contact_us'])->name('contact_us');
Route::post('/contact-us', [LandingController::class, 'contact_us_store'])->name('contact_us.store');
