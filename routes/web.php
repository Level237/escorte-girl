<?php

//Importing admin
use App\Http\Controllers\Admin\User\ActivateUserController;
use App\Http\Controllers\Admin\User\AddUserController;
use App\Http\Controllers\Admin\User\ListUserController;
use App\Http\Controllers\Admin\User\SuspendUserController;

use App\Http\Controllers\Admin\Membership\ListMemberShipController;
use App\Http\Controllers\Admin\Membership\CreateMemberShipController;
use App\Http\Controllers\Admin\Membership\EditMemberShipController;
use App\Http\Controllers\Admin\Membership\DeleteMemberShipController;

use App\Http\Controllers\Admin\Town\CreateTownController;
use App\Http\Controllers\Admin\Town\EditTownController;
use App\Http\Controllers\Admin\Town\ListTownController;
use App\Http\Controllers\Admin\Town\DeleteTownController;

use App\Http\Controllers\Admin\Quarter\CreateQuarterController;
use App\Http\Controllers\Admin\Quarter\EditQuarterController;
use App\Http\Controllers\Admin\Quarter\ListQuarterController;
use App\Http\Controllers\Admin\Quarter\DeleteQuarterController;


use App\Http\Controllers\Admin\Contact\ListContactController;
use App\Http\Controllers\Admin\Contact\EditContactController;
use App\Http\Controllers\Admin\Contact\DeleteContactController;

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
use App\Http\Controllers\Dashboard\DashboardCustomerController;
use App\Http\Controllers\Escort\ChoosePlanController;

//Importing search route
use App\Http\Controllers\Search\SearchController;

//Importing Controllers for Membership
use App\Http\Controllers\Memberships\MemberShipController;
use App\Http\Controllers\Purchase\CurrentUserPurchaseController;
use App\Http\Controllers\Purchase\PurchaseController;
use App\Http\Controllers\Purchase\PurchaseMomoController;

//Importing Contact Controller
use App\Http\Controllers\ContactController;

//Importing Denounce Controller
use App\Http\Controllers\ReportController;
use App\Http\Controllers\User\ReviewUserController;

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


    //SEARCH GROUP URL
Route::get('search',[SearchController::class,'search'])->name('search');

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

//REPORT GROUP URL
Route::get('/report/{id}/{type}',[ReportController::class,'create'])->name('report');
Route::post('/report',[ReportController::class,'store'])->name('report.store');

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
Route::get('/list',[LocationController::class,'index'])->name('list');
Route::get('/adstown',[AdsController::class, 'adsTown'])->name('adstown');
Route::get('/adstown/{id}',[AdsController::class, 'adsByTown'])->name('ads.town');
Route::get('/adsquarter/{id}',[AdsController::class, 'adsByQuarter'])->name('ads.quarter');
Route::get('/adscategory/{id}',[AdsController::class, 'adsByCategory'])->name('ads.category');
Route::get('escorts/{id}',[DetailEscortController::class, 'show'])->name('escort.details');
Route::get('displayProfil/{id}/{path}',[EscortController::class, 'displayProfil'])->name('display.profil');
Route::get('escort/list/{id?}',[EscortController::class, 'list'])->name('escort.list');
Route::get('escortbyquarter/{quarterID}',[EscortController::class, 'escortByQuater'])->name('escort.quarter');
Route::get('ads/list/{id?}',[AdsController::class, 'list'])->name('ads.list');
Route::get('ads/{id}',[AdsController::class, 'show'])->name('ads.details');
Route::get('displayadsimage/{id}/{path}',[AdsImageController::class, 'displayAdsImage'])->name('display.ads.image');

Route::post('ads/image',[AdsImageController::class, 'images'])->name('ads.image');

Route::get('/contact',[ContactController::class,'create'])->name('contact');
Route::post('/contact',[ContactController::class,'store'])->name('contact.store');



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
    Route::get('/payment',[PurchaseMomoController::class,'openPopup'])->name('init-payment');

    Route::post('init/payment',[PurchaseMomoController::class,'initPayment'])->name('initPayment');

//ESCORT GROUP URL

Route::get('choosePlan/{id}',[ChoosePlanController::class,'PlanShow'])->name('show.plan');


//Memberships GROUP URL
Route::get('/memberships/{adsId}',[MemberShipController::class, 'display'])->name('membership.display');
Route::get('/memberships',[MemberShipController::class, 'index'])->name('membership.index');

//Annoucements GROUP URL
Route::get('/ads',[AdsController::class, 'create'])->name('ads.create');
Route::get('/editads/{id}',[AdsController::class, 'edit'])->name('ads.edit');

Route::post('/ads',[AdsController::class, 'save'])->name('ads.save');
Route::post('/ads/update',[AdsController::class, 'update'])->name('ads.update');

Route::post('ads/delete/{id}',[AdsController::class, 'delete'])->name('ads.delete');



Route::post('ads/updateimage',[AdsImageController::class, 'updateImage'])->name('update.image');

Route::get('/mes-abonnements',[CurrentUserPurchaseController::class,'currentPurchase'])->name('my-purchase');
    //Memberships GROUP URL
Route::get('/memberships/{adsId}',[MemberShipController::class, 'display'])->name('membership.display');
    Route::get('/step-one',[StepOneController::class,'stepOne'])->name('step-one');
    Route::post('/step-one-store',[StepOneController::class,'stepOneStore'])->name('step-one-store');
    Route::get('/step-two',[StepTwoController::class,'stepTwo'])->name('step-two');
    Route::post('/step-two-store',[StepTwoController::class,'stepTwoStore'])->name('step-two-store');
    Route::get('/step-three',[StepThreeController::class,'stepThree'])->name('step-three');
    Route::post('/step-three-store',[StepThreeController::class,'stepThreeStore'])->name('step-three-store');
    Route::post('/profile-images',[StepThreeController::class,'images'])->name('profile-images');
    Route::get('/step-final',[StepFinalController::class,'stepFinal'])->name('step.final');
    Route::post('/purchaseWithCredit',[PurchaseController::class,'purchaseWithCredit'])->name('purchase-with-credit');
    Route::get('/congratulation/{membership}/{announce}',[PurchaseController::class,'purchaseFinal'])->name('congrats-purchase');
    Route::get('payment/fail',[PurchaseController::class,'purchaseFail'])->name('congrats-fail');
    //Route::get('congratulations/momo',[PurchaseController::class,'purchaseFinalMomo'])->name('congrats-purchase-momo');
    Route::get('purchase/credit',[PurchaseController::class,'purchaseCredit'])->name('purchase.credit');
    Route::post('purchase/credit',[PurchaseController::class,'purchaseInitCredit'])->name('purchase.init.credit');
    Route::get('purchase/credit/successfully/{price}',[PurchaseController::class,'purchaseStoreCredit'])->name('purchase.store.credit');
    Route::get('success/payment',[PurchaseController::class,'purchaseSuccess'])->name('purchase-credit-success');
});

Route::post('/review/{escortId}',[ReviewUserController::class,'review'])->name('review.user')->middleware('customer');

//Customer group route
Route::middleware(['customer'])->prefix('customer')->group(function () {
        Route::get('index', [DashboardCustomerController::class, 'index'])->name('db.customer.index');
        Route::get('profil', [DashboardCustomerController::class, 'profil'])->name('db.customer.profil');
        Route::get('ads', [DashboardCustomerController::class, 'ads'])->name('db.customer.ads');
        Route::get('messages', [DashboardCustomerController::class, 'messages'])->name('db.customer.messages');
        Route::get('finance', [DashboardCustomerController::class, 'finance'])->name('db.customer.finance');
        Route::get('advertise', [DashboardCustomerController::class, 'advertise'])->name('db.customer.advertise');
        Route::get('settings', [DashboardCustomerController::class, 'settings'])->name('db.customer.settings');
    });




//middleware admin

Route::middleware(['admin'])->prefix('admin')->group(function () {

   Route::get('dashboard',[DashboardAdminController::class,'index'])->name('admin.dashboard');
   Route::get('users',[ListUserController::class,'listUser'])->name('users');
   Route::get('users/create',[AddUserController::class,'addView'])->name('users.create');
   Route::post('users/create',[AddUserController::class,'storeUser'])->name('users.create');
   Route::get('users/suspend',[ListUserController::class,'listUserBan'])->name('users.suspend');
   Route::get('users/role/',[ListUserController::class,'userByRole'])->name('user-by-role');
   Route::get('suspend/user/{id}',[SuspendUserController::class,'ban'])->name('suspend-user');
   Route::get('activate/user/{id}',[ActivateUserController::class,'activate'])->name('activate-user');


   Route::get('memberships',[ListMemberShipController::class,'index'])->name('memberships');
   Route::get('memberships/create',[CreateMemberShipController::class,'addView'])->name('memberships.create');
   Route::post('memberships/create',[CreateMemberShipController::class,'store'])->name('memberships.create');
   Route::get('memberships/edit/{id}',[EditMemberShipController::class,'edit'])->name('memberships.edit');
   Route::post('memberships/update',[EditMemberShipController::class,'update'])->name('memberships.update');
   Route::post('memberships/delete/{id}',[DeleteMemberShipController::class,'delete'])->name('memberships.delete');

   Route::get('towns',[ListTownController::class,'index'])->name('towns');
   Route::get('towns/create',[CreateTownController::class,'addView'])->name('towns.create');
   Route::post('towns/create',[CreateTownController::class,'store'])->name('towns.create');
   Route::get('towns/edit/{id}',[EditTownController::class,'edit'])->name('towns.edit');
   Route::post('towns/update',[EditTownController::class,'update'])->name('towns.update');
   Route::post('towns/delete/{id}',[DeleteTownController::class,'delete'])->name('towns.delete');

   
   Route::get('quarters',[ListQuarterController::class,'index'])->name('quarters');
   Route::get('quarters/create',[CreateQuarterController::class,'addView'])->name('quarters.create');
   Route::post('quarters/create',[CreateQuarterController::class,'store'])->name('quarters.create');
   Route::get('quarters/edit/{id}',[EditQuarterController::class,'edit'])->name('quarters.edit');
   Route::post('quarters/update',[EditQuarterController::class,'update'])->name('quarters.update');
   Route::post('quarters/delete/{id}',[DeleteQuarterController::class,'delete'])->name('quarters.delete');


   Route::get('contacts',[ListContactController::class,'index'])->name('contacts');
   Route::get('contacts/edit/{id}',[EditContactController::class,'edit'])->name('contacts.edit');
   Route::post('contacts/update',[EditContactController::class,'update'])->name('contacts.update');
   Route::post('contacts/delete/{id}',[DeleteContactController::class,'delete'])->name('contacts.delete');
});




