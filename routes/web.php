<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
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
    return view('pages.home');
});

Route::get('/home',function (){
    return view('pages.home');
});
//Page controller 
Route::get('about', function () {
    return view('pages.about');
});
Route::get('services', function () {
    return view('pages.services');
});
Route::get('contact', function () {
    return view('pages.contact');
});
Route::get('register', function () {
    return view('pages.register');
});
Route::get('login', function () {
    return view('pages.login');
});
Route::get('/home',[PagesController::class,'home'])->middleware('alreadyLoggedIn');
Route::get('/about',[PagesController::class,'about'])->middleware('alreadyLoggedIn');
Route::get('/services',[PagesController::class,'services'])->middleware('alreadyLoggedIn');
Route::get('/contact',[PagesController::class,'contact'])->middleware('alreadyLoggedIn');
//Login and register
Route::get('/login',[PagesController::class,'login'])->middleware('alreadyLoggedIn');
Route::get('/register',[PagesController::class,'register'])->middleware('alreadyLoggedIn');
Route::post('login-user', [PagesController::class,'loginUser'])->name('login-user');
Route::post('register-user', [PagesController::class,'registerUser'])->name('register-user');
Route::get('/dashboard',[PagesController::class,'dashboard'])->middleware('isLoggedIn');
Route::get('/logout',[PagesController::class,'logout']);
/*
Part 3

Route::get('/home','homeController@index')->name('home');

//Page controller 
Route::get('/about','PagesController@about')->name('about');
Route::get('/services','PagesController@services')->name('services');
Route::get('/contact','PagesController@contact')->name('contact');*/
