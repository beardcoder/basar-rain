<?php

use App\Http\Controllers\ContactUsFormController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use Spatie\Honeypot\ProtectAgainstSpam;


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

Route::get('/', [PageController::class, 'home'])->name('frontend.home');
Route::post('/contact', [ContactUsFormController::class, 'ContactUsForm'])->middleware(ProtectAgainstSpam::class)->name('contact.store');
Route::get('{slug}', [PageController::class, 'show'])->name('frontend.page');
