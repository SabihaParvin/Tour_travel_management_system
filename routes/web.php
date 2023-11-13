<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\PlaceController;
use App\Http\Controllers\Backend\ReportController;
use App\Http\Controllers\Backend\ReviewController;
use App\Http\Controllers\Backend\PackageController;
use App\Http\Controllers\Backend\PaymentController;
use App\Http\Controllers\Backend\RatingsController;
use App\Http\Controllers\Backend\TouristController;
use App\Http\Controllers\Backend\BookingsController;
use App\Http\Controllers\Backend\LocationController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Frontend\HomeController as FrontendHomeController;
use App\Models\User;


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
    //website route

    Route::get('/',[FrontendHomecontroller::class,'home'])->name('home');



    //admin panel routes

    Route::group(['prefix'=>'admin'],function(){

    Route::get('/login', [UserController::class, 'loginform'])->name('admin.login');
    Route::post('/login-form-post', [UserController::class, 'loginpost'])->name('admin.login.post');

    Route::group(['middleware' => 'auth'], function () {
    Route::get('/logout',[UserController::class,'logout'])->name('admin.logout');

    Route::get('/', [HomeController::class, 'home'])->name('dashboard');

    Route::get('/users/list',[UserController::class,'list'])->name('users.list');
    Route::get('/users/form',[UserController::class,'form'])->name('users.form');
    Route::post('/users/store',[UserController::class,'store'])->name('users.store');
    

    Route::get('/tourist/list', [TouristController::class, 'list'])->name('tourist.list');
    Route::get('/tourist/form', [TouristController::class, 'form'])->name('tourist.form');
    Route::post('/tourist/store', [TouristController::class, 'store'])->name('tourist.store');


    Route::get('/packages/list', [PackageController::class, 'list'])->name('packages.list');
    Route::get('/package/form', [PackageController::class, 'form'])->name('packages.form');
    Route::post('/package/store', [PackageController::class, 'store'])->name('packages.store');

    Route::get('/place/list', [PlaceController::class, 'list'])->name('place.list');

    Route::get('/location/list', [LocationController::class, 'list'])->name('location.list');
    Route::get('/location/form', [LocationController::class, 'form'])->name('location.form');
    Route::post('/location/store', [LocationController::class, 'store'])->name('location.store');

    Route::get('/bookings/list', [BookingsController::class, 'list'])->name('bookings.list');

    Route::get('/payment/list', [PaymentController::class, 'list'])->name('payment.list');

    Route::get('/report/list', [ReportController::class, 'list'])->name('report.list');

    Route::get('/review/list', [ReviewController::class, 'list'])->name('review.list');

    Route::get('/ratings/list', [RatingsController::class, 'list'])->name('ratings.list');

    Route::get('/blog/list', [BlogController::class, 'list'])->name('blog.list');

    //Route::get('/tourist/form', [TouristController::class, 'form']);
    //Route::post('/tourist/store', [TouristController::class, 'store'])->name('tourist.store');
});
});