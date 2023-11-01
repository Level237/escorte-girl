<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\LoginViewController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\CreateUserController;
use App\Http\Controllers\User\LogoutController;
use App\Http\Controllers\Listing\LocationController;
use App\Http\Controllers\ServerUnavailableController;
use App\Http\Controllers\Escort\profile\StepOneController;

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

// le middleware preventBack permet de proteger les routes de connexion et d'inscription lorsque un utilisateur est connecté
Route::get('/register', [CreateUserController::class, 'create'])->middleware('preventBack');
Route::get('/login',[LoginViewController::class,'getViewLogin'])->middleware('preventBack');

Route::post('/login',[LoginController::class,'login'])->name('login');
Route::get('/server-notFound',[ServerUnavailableController::class,'unavailable'])->name('unavailable');


//middleware user
Route::post('/logout',[LogoutController::class,'logout'])
->name('logout')
->middleware('user');

Route::get('/list',[LocationController::class,'index'])->name('list');

//middleware
Route::get('/step-one',[StepOneController::class,'stepOne']);

