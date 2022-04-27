<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WishlistCRUDController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MobileController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
// use Auth;

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

Route::resource('wishlist', WishlistCRUDController::class)->middleware('auth');;

Route::get('/student',[StudentController::class,'show']);

Route::get('/add-customer',[CustomerController::class,'add_customer']);

Route::get('/add-author',[AuthorController::class,'add_author']);

Route::get('/show-author/{id}',[AuthorController::class,'show_author']);

Route::get('/show-both/{id}',[AuthorController::class,'show_both']);

Route::get('/add-post/{id}',[PostController::class,'add_post']);

Route::get('/show-post/{id}',[PostController::class,'show_post']);

Route::get('/show-mobile/{id}',[CustomerController::class,'Show_mobile']);

Route::get('/show-customer/{id}',[MobileController::class,'Show_customer']);

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/wishlist','WishlistCRUDController@index')->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Route::get('/wishlist', function () {
//     return view('wishlist.index');
// })->middleware(['auth'])->name('wishlist');


require __DIR__.'/auth.php';
