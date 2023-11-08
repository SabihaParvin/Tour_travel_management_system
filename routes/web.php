<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\RatingsController;
use App\Http\Controllers\TouristController;
use App\Http\Controllers\BookingsController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\Backend\UserController;
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

    Route::get('/admin/login', [UserController::class, 'loginform'])->name('admin.login');
    Route::post('/admin-form-post', [UserController::class, 'loginpost'])->name('admin.login.post');

    Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin/logout',[UserController::class,'logout'])->name('admin.logout');

    Route::get('/', [HomeController::class, 'home'])->name('dashboard');

    Route::get('/users/list',[UserController::class,'list']);
    Route::get('/users/form',[UserController::class,'form']);
    Route::post('/users/store',[UserController::class,'store'])->name('users.store');
    

    Route::get('/tourist/list', [TouristController::class, 'list']);
    Route::get('/tourist/form', [TouristController::class, 'form']);
    Route::post('/tourist/store', [TouristController::class, 'store'])->name('tourist.store');


    Route::get('/packages/list', [PackageController::class, 'list']);
    Route::get('/package/form', [PackageController::class, 'form']);
    Route::post('/package/store', [PackageController::class, 'store'])->name('package.store');

    Route::get('/place/list', [PlaceController::class, 'list']);

    Route::get('/location/list', [LocationController::class, 'list']);
    Route::get('/location/form', [LocationController::class, 'form']);
    Route::post('/location/store', [LocationController::class, 'store'])->name('location.store');

    Route::get('/bookings/list', [BookingsController::class, 'list']);
    Route::get('/payment/list', [PaymentController::class, 'list']);

    Route::get('/report/list', [ReportController::class, 'list']);

    Route::get('/review/list', [ReviewController::class, 'list']);

    Route::get('/ratings/list', [RatingsController::class, 'list']);

    Route::get('/blog/list', [BlogController::class, 'list']);

    Route::get('/tourist/form', [TouristController::class, 'form']);
    Route::post('/tourist/store', [TouristController::class, 'store'])->name('tourist.store');
});
