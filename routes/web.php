<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomain;

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
    return view('welcome');
})->middleware('guest');
Route::get('/home', function () {
    return view('home');
})->name('home')->middleware(['auth']);
Route::get('/temp', [App\Http\Controllers\UserController::class, 'tp']);
Route::get('/tt',function(){
return "hello";
})->domain('tt.localhost');