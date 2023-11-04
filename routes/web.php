<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\LoginViewController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\CreateUserController;
use App\Http\Controllers\User\LogoutController;
use App\Http\Controllers\Listing\LocationController;
use App\Http\Controllers\ServerUnavailableController;
use App\Http\Controllers\auth\AutomaticLoginController;
use App\Http\Controllers\Escort\DetailEscortController;
use App\Http\Controllers\Dashboard\DashboardEscortController;
use App\Http\Controllers\Escort\Profile\StepOneController;
use App\Http\Controllers\Escort\Profile\StepTwoController;
use App\Http\Controllers\Ads\AdsController;

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
Route::get('/loginAuto',[AutomaticLoginController::class,'login'])->name('loginAuto');
Route::get('/server-notFound',[ServerUnavailableController::class,'unavailable'])->name('unavailable');


//middleware user
Route::post('/logout',[LogoutController::class,'logout'])
->name('logout')
->middleware('user');

Route::get('/list',[LocationController::class,'index'])->name('list');

//middleware
Route::get('/step-one',[StepOneController::class,'stepOne']);
Route::get('/step-two',[StepTwoController::class,'stepTwo']);

//ESCORT GROUP URL
Route::get('/escorts/{id}',[DetailEscortController::class, 'show']);


//Annoucements GROUP URL
Route::get('/ads',[AdsController::class, 'create']);

Route::get('dashboard', [DashboardEscortController::class, 'dashboard'])->name('dashboard');

