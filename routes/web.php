<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DigiPortfolioController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\TradPortfolioController;
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

//MAIN PAGES
Route::get('/',[HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);

//PORTFOLIO 
Route::get('/portfolio/traditionnel', [TradPortfolioController::class, 'index']);
Route::get('/portfolio/traditionnel/{id}', [TradPortfolioController::class, 'show']);

Route::get('portfolio/digital', [DigiPortfolioController::class, 'index']);
Route::get('/portfolio/digital/{id}', [DigiPortfolioController::class, 'show']);

//MAILING
// Route::post('/contact/send', [ContactController::class, 'store']);
Route::post('/mailSent', [ContactController::class, 'mailing']);