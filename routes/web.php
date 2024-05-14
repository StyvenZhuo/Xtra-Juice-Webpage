<?php

use Illuminate\Support\Facades\Route;

Route::get('/app', function () {
   return view('components.app');
});

Route::get('/', function () {
    return view('components.home');
});

Route::get('/menu', function () {
  return view('components.menu');
});
Route::get('/contact', function () {
  return view('components.contact');
});