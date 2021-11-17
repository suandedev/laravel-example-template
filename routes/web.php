<?php

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
//
//Route::get('/', function () {
//    return view('dashboard');
//});
//Route::get('/', function () {
//    return view('home');
//});
//Route::get('/', function () {
//    return view('welcome');
//});
//
//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//    return view('dashboard');
//})->name('dashboard');

Route::get('/', function () {
    return view('myTemplate.home');
})->name('home');
Route::get('/login', function () {
   return view('myTemplate.login');
})->name('login');
Route::get('/register', function (){
   return view('myTemplate.register');
})->name('register');
Route::get('/table', function (){
   return view('myTemplate.table');
})->name('table');
