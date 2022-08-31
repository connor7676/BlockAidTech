<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
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

Route::get('/', PagesController::class . '@index');
Route::get('/payment', PagesController::class . '@payment');
Route::get('/benefits', PagesController::class . '@benefits');
Route::get('/process', PagesController::class . '@process');
Route::get('/team', PagesController::class . '@team');
Route::get('/watchlist', PagesController::class . '@watchlist');
Route::get('/request', PaymentsController::class . '@index')->middleware('auth');
Route::post('/request', PaymentsController::class . '@requestmail')->middleware('auth');

Route::get('/invoice/{id}', PaymentsController::class . '@invoice');

Route::resource('posts', PostsController::class);
Auth::routes();

Route::get('/dashboard', DashboardController::class . '@index');
Route::post('/dashboard/edit', DashboardController::class . '@edit');
Route::get('/dashboard/delete', DashboardController::class . '@delete');
