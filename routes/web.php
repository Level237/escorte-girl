<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginViewController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\CreateUserController;
use App\Http\Controllers\HomepageController;

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

Route::get('/',[HomepageController::class,'homepage'])->name('homepage');

Route::get('/register', [CreateUserController::class, 'create']);
Route::get('/login',[LoginViewController::class,'getViewLogin']);

Route::post('/login',[LoginController::class,'login'])->name('login');
