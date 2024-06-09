<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;

Route::controller(AuthController::class)->group(function () {
  Route::get('register','register')->name('register');
  Route::post('register', 'registerSave')->name('register.save');

  Route::get('login', 'login')->name('login');
  Route::post('login', 'loginAction')->name('login.action');

  Route::get('logout', 'logout')->middleware('auth')->name('logout');

  Route::post('contact', [ReviewController::class, 'reviewSave'])->name('review.save');
});



Route::middleware('auth')->group(function () {
  Route::get('dashboard', function () {
      return view('dashboard');
  })->name('dashboard');

  Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
  Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
  Route::post('/profile', [AuthController::class, 'updateProfile'])->name('profile.update');

  Route::get('/reviews', [ReviewController::class, 'index'])->name('reviews');
  Route::delete('/reviews/destroy/{id}', [ReviewController::class, 'destroy'])->name('reviews/destroy');

  Route::get('/products', [App\Http\Controllers\ProductController::class, 'index'])->name('products');
  Route::get('/products/create', [App\Http\Controllers\ProductController::class, 'create'])->name('products/create');
  Route::post('/products/store', [App\Http\Controllers\ProductController::class, 'store'])->name('products/store');
  Route::get('/products/show/{id}', [ProductController::class, 'show'])->name('products/show');
  Route::get('/products/edit/{id}', [ProductController::class, 'edit'])->name('products/edit');
  Route::put('/products/edit/{id}', [ProductController::class, 'update'])->name('products/update');
  Route::delete('/products/destroy/{id}', [ProductController::class, 'destroy'])->name('products/destroy');
  
});

Route::get('/app', function () {
   return view('components.app');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/menu', function () {
  return view('components.menu');
});
Route::get('/contact', function () {
  return view('components.contact');
});


Route::get('/menu/show', [ProductController::class, 'showMenu']);
