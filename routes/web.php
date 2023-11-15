<?php

use App\Http\Controllers\Admin\User\ActivateUserController;
use App\Http\Controllers\Admin\User\AddUserController;
use App\Http\Controllers\Admin\User\ListUserController;
use App\Http\Controllers\Admin\User\SuspendUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Ads\AdsController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\LoginViewController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CreateUserController;
use App\Http\Controllers\User\LogoutController;
use App\Http\Controllers\Ads\AdsImageController;
use App\Http\Controllers\Escort\EscortController;
use App\Http\Controllers\Listing\LocationController;
use App\Http\Controllers\ServerUnavailableController;
use App\Http\Controllers\User\SecureAccountController;
use App\Http\Controllers\Auth\AutomaticLoginController;
use App\Http\Controllers\Escort\DetailEscortController;
use App\Http\Controllers\User\ChangePasswordController;
use App\Http\Controllers\Escort\Profile\StepOneController;
use App\Http\Controllers\Escort\Profile\StepTwoController;
use App\Http\Controllers\Dashboard\DashboardAdminController;
use App\Http\Controllers\Escort\Profile\StepFinalController;
use App\Http\Controllers\Escort\Profile\StepThreeController;
use App\Http\Controllers\Dashboard\DashboardEscortController;

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

Route::post('/answer/verify',[ChangePasswordController::class,'answerVerify'])->name('answer-verify');
Route::get('/answer/verify/change-password',[ChangePasswordController::class,'passwordView'])->name('password-view');
Route::post('/answer/verify/change-password',[ChangePasswordController::class,'change'])->name('password-change');
Route::get('/check-number/answer-question',[ChangePasswordController::class,'answerView'])->name('answerView')->middleware('preventBack');
Route::get('/check-number',[ChangePasswordController::class,'checkNumber'])->name('check-number')->middleware('preventBack');
Route::post('/check-number',[ChangePasswordController::class,'verify'])->name('number-verify')->middleware('preventBack');
// le middleware preventBack permet de proteger les routes de connexion et d'inscription lorsque un utilisateur est connecté
Route::get('/register', [CreateUserController::class, 'create'])->name("register")->middleware('preventBack');
Route::get('/login',[LoginViewController::class,'getViewLogin'])->middleware('preventBack');

Route::post('/login',[LoginController::class,'login'])->name('login');
Route::get('/loginAuto',[AutomaticLoginController::class,'login'])->name('loginAuto');
Route::get('/server-notFound',[ServerUnavailableController::class,'unavailable'])->name('unavailable');


//middleware user

Route::middleware(['user'])->group(function () {

    Route::get("/secure-account/confirm",[SecureAccountController::class,'confirm'])->name('confirm');
    Route::post("/answer",[SecureAccountController::class,'answer'])->name('answer');
    Route::post("/answerStore",[SecureAccountController::class,'answerStore'])->name('answer-store');
    Route::get("/secure-account/questions",[SecureAccountController::class,'answerView'])->name('give-answer');
    Route::get('/secure-account',[SecureAccountController::class,'selectQuestion'])->name('selectQuestion');
    Route::post('/logout',[LogoutController::class,'logout'])
    ->name('logout');
    Route::prefix('dashboard')->group(function () {
        Route::get('index', [DashboardEscortController::class, 'index'])->name('db.escort.index');
    });
});


Route::get('/list',[LocationController::class,'index'])->name('list');

//middleware


//ESCORT GROUP URL

Route::get('escorts/{id}',[DetailEscortController::class, 'show'])->name('escort.details');
Route::get('displayProfil/{id}/{path}',[EscortController::class, 'displayProfil'])->name('display.profil');
Route::get('escort/list',[EscortController::class, 'list'])->name('escort.list');



//Annoucements GROUP URL
Route::get('/ads',[AdsController::class, 'create'])->name('ads.create');
Route::get('/editads/{id}',[AdsController::class, 'edit'])->name('ads.edit');
Route::post('/ads',[AdsController::class, 'save'])->name('ads.save');
Route::get('ads/list',[AdsController::class, 'list'])->name('ads.list');
Route::get('ads/{id}',[AdsController::class, 'show'])->name('ads.details');
Route::get('/adstown/{id}',[AdsController::class, 'adsByTown'])->name('ads.town');

Route::post('ads/image',[AdsImageController::class, 'images'])->name('ads.image');






//Route escort  completed profile middleware
Route::middleware(['escort'])->group(function () {
    Route::prefix('dashboard')->group(function () {
        Route::get('index', [DashboardEscortController::class, 'index'])->name('db.escort.index');
        Route::get('profil', [DashboardEscortController::class, 'profil'])->name('db.escort.profil');
        Route::get('ads', [DashboardEscortController::class, 'ads'])->name('db.escort.ads');
        Route::get('messages', [DashboardEscortController::class, 'messages'])->name('db.escort.messages');
        Route::get('finance', [DashboardEscortController::class, 'finance'])->name('db.escort.finance');
        Route::get('advertise', [DashboardEscortController::class, 'advertise'])->name('db.escort.advertise');
        Route::get('settings', [DashboardEscortController::class, 'settings'])->name('db.escort.settings');
    });
    Route::get('/step-one',[StepOneController::class,'stepOne'])->name('step-one');
    Route::post('/step-one-store',[StepOneController::class,'stepOneStore'])->name('step-one-store');
    Route::get('/step-two',[StepTwoController::class,'stepTwo'])->name('step-two');
    Route::post('/step-two-store',[StepTwoController::class,'stepTwoStore'])->name('step-two-store');
    Route::get('/step-three',[StepThreeController::class,'stepThree'])->name('step-three');
    Route::post('/step-three-store',[StepThreeController::class,'stepThreeStore'])->name('step-three-store');
    Route::get('/step-final',[StepFinalController::class,'stepFinal'])->name('step.final');


});


//middleware admin

Route::middleware(['admin'])->prefix('admin')->group(function () {

   Route::get('dashboard',[DashboardAdminController::class,'index'])->name('admin.dashboard');
   Route::get('users',[ListUserController::class,'listUser'])->name('users');
   Route::get('users/create',[AddUserController::class,'addView'])->name('users.create');
   Route::get('users/suspend',[ListUserController::class,'listUserBan'])->name('users.suspend');
   Route::get('users/role/',[ListUserController::class,'userByRole'])->name('user-by-role');
   Route::get('suspend/user/{id}',[SuspendUserController::class,'ban'])->name('suspend-user');
   Route::get('activate/user/{id}',[ActivateUserController::class,'activate'])->name('activate-user');
});




