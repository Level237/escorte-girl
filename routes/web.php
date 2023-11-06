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
use App\Http\Controllers\Escort\Profile\StepFinalController;
use App\Http\Controllers\Escort\Profile\StepThreeController;

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


//ESCORT GROUP URL
Route::get('/escorts/{id}',[DetailEscortController::class, 'show']);


//Annoucements GROUP URL
Route::get('/ads',[AdsController::class, 'create']);

Route::get('dashboard', [DashboardEscortController::class, 'dashboard'])->name('dashboard');

//Route with escort middleware
Route::middleware(['escort'])->group(function () {

    Route::get('/step-one',[StepOneController::class,'stepOne'])->name('step-one');
    Route::post('/step-one-store',[StepOneController::class,'stepOneStore'])->name('step-one-store');
    Route::get('/step-two',[StepTwoController::class,'stepTwo'])->name('step-two');
    Route::post('/step-two-store',[StepTwoController::class,'stepTwoStore'])->name('step-two-store');
    Route::get('/step-three',[StepThreeController::class,'stepThree'])->name('step-three');
    Route::post('/step-three-store',[StepThreeController::class,'stepThreeStore'])->name('step-three-store');
    Route::get('/step-final',[StepFinalController::class,'stepFinal']);
});

