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
use App\Http\Controllers\Ads\AdsImageController;
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
Route::get('/step-one',[StepOneController::class,'stepOne'])->name('step-one');
Route::post('/step-one-store',[StepOneController::class,'stepOneStore'])->name('step-one-store');
Route::get('/step-two',[StepTwoController::class,'stepTwo'])->name('step-two');
Route::get('/step-three',[StepThreeController::class,'stepThree']);
Route::get('/step-final',[StepFinalController::class,'stepFinal']);

//ESCORT GROUP URL
Route::get('/escorts/{id}',[DetailEscortController::class, 'show'])->name('escort.details');


//Annoucements GROUP URL
Route::get('/ads',[AdsController::class, 'create'])->name('ads.create');
Route::post('/ads',[AdsController::class, 'save'])->name('ads.save');

Route::post('ads/image',[AdsImageController::class, 'images'])->name('ads.image');

Route::prefix('dashboard')->group(function () {
    Route::get('index', [DashboardEscortController::class, 'index'])->name('db.escort.index');
    Route::get('profil', [DashboardEscortController::class, 'profil'])->name('db.escort.profil');
    Route::get('ads', [DashboardEscortController::class, 'ads'])->name('db.escort.ads');
    Route::get('messages', [DashboardEscortController::class, 'messages'])->name('db.escort.messages');
    Route::get('finance', [DashboardEscortController::class, 'finance'])->name('db.escort.finance');
    Route::get('advertise', [DashboardEscortController::class, 'advertise'])->name('db.escort.advertise');
    Route::get('settings', [DashboardEscortController::class, 'settings'])->name('db.escort.settings');
});


//Route with auth middleware
Route::middleware(['auth'])->group(function () {

});

