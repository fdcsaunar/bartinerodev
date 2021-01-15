<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

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
    return view('home');
});

Route::get('/categories', function () {
    return view('categories');
});

Route::get('/deals', function () {
    return view('deals');
});

Route::get('/trade', function () {
    return view('items.create');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/privacy-policy', function () {
    return view('policy');
});

Route::get('/terms-and-conditions', function () {
    return view('terms');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('items', PostsController::class);
