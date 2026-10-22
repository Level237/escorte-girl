<?php

use App\Http\Controllers\Api\V1\AccountController;
use App\Http\Controllers\Api\V1\AnnouncementController;
use App\Http\Controllers\Api\V1\Auth\LoginController;
use App\Http\Controllers\Api\V1\Auth\LogoutController;
use App\Http\Controllers\Api\V1\Auth\PasswordController;
use App\Http\Controllers\Api\V1\Auth\RegisterController;
use App\Http\Controllers\Api\V1\BannerController;
use App\Http\Controllers\Api\V1\CountryController;
use App\Http\Controllers\Api\V1\EscortProfileController;
use App\Http\Controllers\Api\V1\LookupController;
use App\Http\Controllers\Api\V1\MediaController;
use App\Http\Controllers\Api\V1\MembershipController;
use App\Http\Controllers\Api\V1\OwnedAnnouncementController;
use App\Http\Controllers\Api\V1\QuarterController;
use App\Http\Controllers\Api\V1\SearchController;
use App\Http\Controllers\Api\V1\TownController;
use Illuminate\Support\Facades\Route;

/*
| Catalogue public v1. Les routes historiques de routes/api.php restent en place.
| GET /api/v1/faqs n'est pas déclaré ici : cette URL est déjà le CRUD admin.
*/

Route::prefix('v1')->name('v1.')->middleware('json')->group(function () {
    Route::prefix('auth')->name('auth.')->group(function () {
        Route::post('register', [RegisterController::class, 'store'])->name('register');
        Route::post('login', [LoginController::class, 'store'])->name('login');
        Route::post('password/questions', [PasswordController::class, 'questions'])->name('password.questions');
        Route::post('password/verify', [PasswordController::class, 'verify'])->name('password.verify');
        Route::post('password', [PasswordController::class, 'update'])->name('password.update');
        Route::post('logout', [LogoutController::class, 'store'])->middleware(['auth:api', 'ban'])->name('logout');
    });

    Route::middleware(['auth:api', 'ban'])->group(function () {
        Route::get('me', [AccountController::class, 'show'])->name('me.show');
        Route::patch('me', [AccountController::class, 'update'])->name('me.update');
        Route::put('me/security-question', [AccountController::class, 'securityQuestion'])->name('me.security-question');
        Route::get('me/purchases', [AccountController::class, 'purchases'])->name('me.purchases');
        Route::get('me/payments', [AccountController::class, 'payments'])->name('me.payments');
    });

    Route::middleware(['auth:api', 'ban', 'scopes:escort'])->group(function () {
        Route::get('me/escort', [EscortProfileController::class, 'show'])->name('me.escort.show');
        Route::put('me/escort', [EscortProfileController::class, 'update'])->name('me.escort.update');
        Route::put('me/escort/services', [EscortProfileController::class, 'services'])->name('me.escort.services');
        Route::post('me/escort/images', [EscortProfileController::class, 'images'])->name('me.escort.images');

        Route::get('me/announcements', [OwnedAnnouncementController::class, 'index'])->name('me.announcements.index');
        Route::post('me/announcements', [OwnedAnnouncementController::class, 'store'])->name('me.announcements.store');
        Route::patch('me/announcements/{announcement}', [OwnedAnnouncementController::class, 'update'])->name('me.announcements.update');
        Route::delete('me/announcements/{announcement}', [OwnedAnnouncementController::class, 'destroy'])->name('me.announcements.destroy');
        Route::post('me/announcements/{announcement}/images', [OwnedAnnouncementController::class, 'images'])->name('me.announcements.images');
        Route::delete('me/announcements/{announcement}/images/{image}', [OwnedAnnouncementController::class, 'destroyImage'])->name('me.announcements.images.destroy');
    });

    Route::get('announcements', [AnnouncementController::class, 'index'])->name('announcements.index');
    Route::get('announcements/by-town', [AnnouncementController::class, 'byTown'])->name('announcements.by-town');
    Route::get('announcements/{announcement}', [AnnouncementController::class, 'show'])->name('announcements.show');
    Route::get('announcements/{announcement}/similar', [AnnouncementController::class, 'similar'])->name('announcements.similar');
    Route::post('announcements/{announcement}/visits', [AnnouncementController::class, 'visit'])->name('announcements.visits');
    Route::get('announcements/{announcement}/reviews', [AnnouncementController::class, 'reviews'])->name('announcements.reviews');

    Route::get('search', [SearchController::class, 'index'])->name('search');

    Route::get('towns', [TownController::class, 'index'])->name('towns.index');
    Route::get('towns/{town}', [TownController::class, 'show'])->name('towns.show');
    Route::get('towns/{town}/quarters', [TownController::class, 'quarters'])->name('towns.quarters');
    Route::get('quarters', [QuarterController::class, 'index'])->name('quarters.index');
    Route::get('countries', [CountryController::class, 'index'])->name('countries.index');

    Route::get('lookups/categories', [LookupController::class, 'categories'])->name('lookups.categories');
    Route::get('lookups/ethnicities', [LookupController::class, 'ethnicities'])->name('lookups.ethnicities');
    Route::get('lookups/skin-colors', [LookupController::class, 'skin-colors'])->name('lookups.skin-colors');
    Route::get('lookups/shapes', [LookupController::class, 'shapes'])->name('lookups.shapes');
    Route::get('lookups/heights', [LookupController::class, 'heights'])->name('lookups.heights');
    Route::get('lookups/weights', [LookupController::class, 'weights'])->name('lookups.weights');
    Route::get('lookups/services', [LookupController::class, 'services'])->name('lookups.services');
    Route::get('lookups/questions', [LookupController::class, 'questions'])->name('lookups.questions');

    Route::get('banners', [BannerController::class, 'index'])->name('banners.index');

    Route::get('memberships', [MembershipController::class, 'index'])->name('memberships.index');
    Route::get('memberships/premium', [MembershipController::class, 'premium'])->name('memberships.premium');
    Route::get('memberships/{membership}', [MembershipController::class, 'show'])->name('memberships.show');

    Route::get('media/announcements/{announcement}/images/{filename}', [MediaController::class, 'announcementImage'])->name('media.announcements.image');
    Route::get('media/announcements/{announcement}/video', [MediaController::class, 'announcementVideo'])->name('media.announcements.video');
    Route::get('media/banners/{banner}', [MediaController::class, 'banner'])->name('media.banners.show');
});
