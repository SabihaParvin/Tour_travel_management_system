<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\BlogController;

use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\SpotController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\ReportController;
use App\Http\Controllers\Backend\ReviewController;
use App\Http\Controllers\Backend\PackageController;
use App\Http\Controllers\Backend\PaymentController;
use App\Http\Controllers\Backend\RatingsController;
use App\Http\Controllers\Backend\TouristController;
use App\Http\Controllers\Backend\BookingsController;
use App\Http\Controllers\Backend\LocationController;
use App\Http\Controllers\Frontend\SinglePackageController as FrontendSinglePackageController;
use App\Http\Controllers\Frontend\HomeController as FrontendHomeController;
use App\Http\Controllers\Frontend\TouristController as FrontendTouristController;


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


    Route::get('/registration',[FrontendTouristController::class,'registration'])->name('tourist.registration');
    Route::post('/reg-form-store',[FrontendTouristController::class,'store'])->name('tourist.regform.store');

    Route::get('/login',[FrontendTouristController::class,'login'])->name('tourist.login');
    Route::post('/login',[FrontendTouristController::class,'loginpost'])->name('tourist.login.post');
    

    Route::get('/single-package-view', [FrontendSinglePackageController::class, 'singlePackage'])->name('single.package');

    Route::group(['middleware'=>'auth'],function(){
        Route::get('/profile',[FrontendTouristController::class,'profile'])->name('profile.view');
        Route::get('/logout',[FrontendTouristController::class,('logout')])->name('tourist.logout');
    });

    //admin panel routes

    Route::group(['prefix'=>'admin'],function(){

    Route::get('/login', [UserController::class, 'loginform'])->name('admin.login');
    Route::post('/login-form-post', [UserController::class, 'loginpost'])->name('admin.login.post');

    Route::group(['middleware' => 'auth'], function () {

        Route::group(['middleware' => 'checkAdmin'], function () {

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
    Route::get('/package/delete/{id}',[PackageController::class,'delete'])->name('package.delete');
    Route::get('/package/edit/{id}',[PackageController::class,'edit'])->name('package.edit');
    Route::put('/package/update/{id}',[PackageController::class,'update'])->name('package.update');
    Route::get('/package/view/{id}',[PackageController::class,'view'])->name('package.view');

    Route::get('/spot/list', [SpotController::class, 'list'])->name('spot.list');
    Route::get('/spot/form', [SpotController::class, 'form'])->name('place.form');
    //Route::post('/spot/store', [SpotController::class, 'store'])->name('spot.store');

    Route::get('/location/list', [LocationController::class, 'list'])->name('location.list');
    Route::get('/location/form', [LocationController::class, 'form'])->name('location.form');
    Route::post('/location/store', [LocationController::class, 'store'])->name('location.store');

    Route::get('/bookings/list', [BookingsController::class, 'list'])->name('bookings.list');
    Route::get('/bookings/form', [BookingsController::class, 'form'])->name('bookings.form');
    //Route::post('/bookings/store', [BookingsController::class, 'store'])->name('bookings.store');

    Route::get('/payment/list', [PaymentController::class, 'list'])->name('payment.list');
    Route::get('/payment/form', [PaymentController::class, 'form'])->name('payment.form');
    //Route::post('/payment/store', [PaymentController::class, 'store'])->name('payment.store');

    Route::get('/report/list', [ReportController::class, 'list'])->name('report.list');
    Route::get('/report/form', [ReportController::class, 'form'])->name('report.form');
    //Route::post('/report/store', [ReportController::class, 'store'])->name('report.store');

    Route::get('/review/list', [ReviewController::class, 'list'])->name('review.list');
    Route::get('/review/form', [ReviewController::class, 'form'])->name('review.form');
    //Route::post('/review/store', [ReviewController::class, 'store'])->name('review.store');

    Route::get('/ratings/list', [RatingsController::class, 'list'])->name('ratings.list');
    Route::get('/ratings/form', [RatingsController::class, 'form'])->name('ratings.form');
    //Route::post('/ratings/store', [RatingsController::class, 'store'])->name('ratings.store');

    Route::get('/blog/list', [BlogController::class, 'list'])->name('blog.list');
    Route::get('/blog/form', [BlogController::class, 'form'])->name('blog.form');
    //Route::post('/blog/store', [BlogController::class, 'store'])->name('blog.store');

        });
    });
});