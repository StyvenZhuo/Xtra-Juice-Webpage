<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::controller(AuthController::class)->group(function () {
  Route::get('register','register')->name('register');
  Route::post('register', 'registerSave')->name('register.save');
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