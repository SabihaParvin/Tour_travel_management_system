<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\VlogController;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\ReportController;
use App\Http\Controllers\Backend\ReviewController;
use App\Http\Controllers\Backend\PackageController;
use App\Http\Controllers\Backend\TouristController;
use App\Http\Controllers\Backend\BookingsController;
use App\Http\Controllers\Backend\LocationController;
use App\Http\Controllers\SslCommerzPaymentController;

use App\Http\Controllers\Frontend\ContactController as FrontendContactController;
use App\Http\Controllers\Frontend\HomeController as FrontendHomeController;
use App\Http\Controllers\Frontend\LocationController as FrontendLocationController;
use App\Http\Controllers\Frontend\ReviewController as FrontendReviewController;
use App\Http\Controllers\Frontend\TouristController as FrontendTouristController;
use App\Http\Controllers\Frontend\BookingsController as FrontendBookingsController;
use App\Http\Controllers\Frontend\SinglePackageController as FrontendSinglePackageController;


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

    Route::get('/',[FrontendHomecontroller::class,'home'])->name('frontend.home');

    Route::get('/search/packages',[FrontendHomeController::class,'searchPackage'])->name('search.package');
    Route::get('/aboutUs',[FrontendHomeController::class,'aboutUs'])->name('about.us');
    Route::get('/contactUs',[FrontendHomeController::class,'contactUs'])->name('contact.us');

    Route::get('/vlog',[FrontendHomeController::class,'vlog'])->name('frontend.vlog');

    Route::get('/location/list', [FrontendLocationController::class, 'location'])->name('frontend.location');
    Route::get('/location/details/{id}', [FrontendLocationController::class, 'details'])->name('frontend.details');
    
    Route::get('/registration',[FrontendTouristController::class,'registration'])->name('tourist.registration');
    Route::post('/reg-form-store',[FrontendTouristController::class,'store'])->name('tourist.regform.store');

    Route::get('/login',[FrontendTouristController::class,'login'])->name('tourist.login');
    Route::post('/login',[FrontendTouristController::class,'loginpost'])->name('tourist.login.post');

    
    Route::get('/package-view',[FrontendSinglePackageController::class,'packageView'])->name('Frontend.PackageView');
    Route::get('/single-package-view/{id}', [FrontendSinglePackageController::class, 'singlePackage'])->name('single.package.view');


    Route::group(['middleware'=>'auth'],function(){

        Route::get('/profile/view',[FrontendTouristController::class,'profile'])->name('profile.view');
        Route::get('/profile/edit/{id}',[FrontendTouristController::class,'profileEdit'])->name('profile.edit');
        Route::put('/profile/update/{id}',[FrontendTouristController::class,'profileUpdate'])->name('profile.update');

        Route::get('/give/review',[FrontendReviewController::class,'review'])->name('give.review');
        Route::post('/store/review',[FrontendReviewController::class,'store'])->name('store.review');

        Route::get('contact/list',[FrontendContactController::class,'list'])->name('contact.list');
        Route::post('contact/store',[FrontendContactController::class,'store'])->name('contact.store');

        Route::get('/logout',[FrontendTouristController::class,'logout'])->name('tourist.logout');

        //Route::get('/book-now',[FrontendBookingsController::class,'bookNow'])->name('book.now');
        Route::post('/booking-Form-store/{id}',[FrontendBookingsController::class,'bookstore'])->name('book.store');
        Route::get('/cancel-bookings/{package_id}',[FrontendBookingsController::class,'cancelBookings'])->name('cancel.bookings');
        Route::get('/make-payment/{id}',[FrontendTouristController::class,'makePayment'])->name('make.payment');
        Route::get('/print-reciept/{id}',[FrontendTouristController::class,'reciept'])->name('payment.reciept');


        
        
        // SSLCOMMERZ Start
        Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
        Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);
        
        Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
        Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);
        
        Route::post('/success', [SslCommerzPaymentController::class, 'success']);
        Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
        Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);
        
        Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
        //SSLCOMMERZ END
       
    });

    //admin panel routes

    Route::group(['prefix'=>'admin'],function(){

    Route::get('/login', [UserController::class, 'loginform'])->name('admin.login');
    Route::post('/login-form-post', [UserController::class, 'loginpost'])->name('admin.login.post');

    Route::group(['middleware' => 'admin'], function () {

       // Route::group(['middleware' => 'checkAdmin'], function () {

    Route::get('/logout',[UserController::class,'logout'])->name('admin.logout');

    Route::get('/', [HomeController::class, 'home'])->name('dashboard');

    Route::get('/users/list',[UserController::class,'list'])->name('users.list');
    Route::get('/users/form',[UserController::class,'form'])->name('users.form');
    Route::post('/users/store',[UserController::class,'store'])->name('users.store');
    Route::get('/users/delete/{id}',[UserController::class,'delete'])->name('users.delete');
    Route::get('/users/edit/{id}',[UserController::class,'edit'])->name('user.edit');
    Route::put('/users/update/{id}',[UserController::class,'update'])->name('user.update');
    

    Route::get('/tourist/list', [TouristController::class, 'list'])->name('tourist.list');
    //Route::get('/tourist/form', [TouristController::class, 'form'])->name('tourist.form');
    //Route::post('/tourist/store', [TouristController::class, 'store'])->name('tourist.store');


    Route::get('/packages/list', [PackageController::class, 'list'])->name('packages.list');
    Route::get('/package/form', [PackageController::class, 'form'])->name('packages.form');
    Route::post('/package/store', [PackageController::class, 'store'])->name('packages.store');
    Route::get('/package/delete/{id}',[PackageController::class,'delete'])->name('package.delete');
    Route::get('/package/edit/{id}',[PackageController::class,'edit'])->name('package.edit');
    Route::put('/package/update/{id}',[PackageController::class,'update'])->name('package.update');
    Route::get('/package/view/{id}',[PackageController::class,'view'])->name('package.view');
    Route::get('/package/print/',[PackageController::class,'print'])->name('packages.print');


    Route::get('/location/list', [LocationController::class, 'list'])->name('location.list');
    Route::get('/location/form', [LocationController::class, 'form'])->name('location.form');
    Route::post('/location/store', [LocationController::class, 'store'])->name('location.store');
    Route::get('/location/delete/{id}', [LocationController::class, 'delete'])->name('location.delete');
    Route::get('/location/edit/{id}',[LocationController::class,'edit'])->name('location.edit');
    Route::put('/location/update/{id}',[LocationController::class,'update'])->name('location.update');

    Route::get('/bookings/list', [BookingsController::class, 'list'])->name('bookings.list');
    //Route::get('/bookings/form', [BookingsController::class, 'form'])->name('bookings.form');
    Route::get('/bookings/print', [BookingsController::class, 'print'])->name('bookings.print');
    Route::get('/confirm-bookings/{id}',[BookingsController::class,'confirmBooking'])->name('confirm.booking');
    Route::get('/reject-bookings/{id}',[BookingsController::class,'rejectBooking'])->name('reject.booking');



    Route::get('/report/list', [ReportController::class, 'list'])->name('report.list');
    Route::get('/report/form', [ReportController::class, 'form'])->name('report.form');
    //Route::post('/report/store', [ReportController::class, 'store'])->name('report.store');

    Route::get('/review/list', [ReviewController::class, 'list'])->name('review.list');
    Route::get('/review/form', [ReviewController::class, 'form'])->name('review.form');
    Route::get('/review/delete/{id}',[ReviewController::class,'delete'])->name('review.delete');


    Route::get('/vlog/list', [VlogController::class, 'list'])->name('vlog.list');
    Route::get('/vlog/form', [VlogController::class, 'form'])->name('vlog.form');
    Route::post('/vlog/store', [VlogController::class, 'store'])->name('vlog.store');
    Route::get('/vlog/delete/{id}', [VlogController::class, 'delete'])->name('vlog.delete');
    Route::get('/vlog/edit/{id}',[VlogController::class,'edit'])->name('vlog.edit');
    Route::put('/vlog/update/{id}',[VlogController::class,'update'])->name('vlog.update');
    
    Route::get('/contact/list', [VlogController::class, 'contact'])->name('contact.list');
    Route::get('/contact/delete/{id}', [VlogController::class, 'contactDelete'])->name('contact.delete');
    
    });
   });
