<?php

use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\HomeController;
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
// start frontend
 Route::get('/',[PageController::class,"home"]);
 Route::get('/about',[PageController::class,"about"]);
 Route::get('/service',[PageController::class,"service"]);
 Route::get('/blog',[PageController::class,"blog"]);
 Route::get('/contact',[PageController::class,"contact"]);

// end of frontend



Route::resource('/home',HomeController::class);




