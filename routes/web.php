<?php

use App\Http\Controllers\Admin\HotelBookingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\TravelRequestController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\TourCommentController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\HotelCommentController;
use App\Http\Controllers\LoyaltyProgramController ;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();



Route::group(['middleware' => "auth"],function(){
    Route::get('/email/verify', function () {
        return 'kindly verify your email';
    })->name('verification.notice');
    Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
        $request->fulfill();
        return redirect('/');
    })->middleware(['signed'])->name('verification.verify');
    Route::post('/email/verification-notification', function (Request $request) {
        $request->user()->sendEmailVerificationNotification();
        return back()->with('message', 'Verification link sent!');
    })->middleware(['throttle:6,1'])->name('verification.send');
    Route::resource("review","ReviewController");

    Route::group(['as' => "dashboard.",'prefix' => 'dashboard'],function(){
        Route::get("/","User\DashboardController@dashboard")->name("dashboard");
        Route::get("/orders","User\DashboardController@orders")->name("orders");
        Route::get("/favorites","FavoriteController@index")->name("favorites.index");
        Route::get("/accounts-details", "User\DashboardController@accountDetails")->name('accounts-details');
        Route::post('/accounts-details',"User\DashboardController@updateAccountDetails");
    });
});

// for changing purpose

Route::get('TourDetails', function () {
    return view('TourDetails');
});
Route::get('transportation', function () {
    return view('transportation');
});
Route::get('transport-details', function () {
    return view('transport-details');
});

Route::get('loyalty-program', 'LoyaltyProgramController@index')->name('loyalty-program');
Route::post('/membership/purchase', [LoyaltyProgramController::class, 'purchaseMembership'])->middleware('auth')->name('membership.purchase');


Route::get('checkoutPage', function () {
    return view('checkoutPage');
});

Route::get('forgetpassword', function () {
    return view('forgetpassword');
});
// Route::get('/blogs-page', [BlogController::class, 'index'])->name('blogs-page.index');
Route::resource('blogs-page', BlogController::class);

Route::post('/contact-us', [FormController::class, 'store']);
Route::post('/submit-travel-request', [TravelRequestController::class, 'store']);
Route::post('/store-consultation', [ConsultationController::class, 'store'])->name('store.consultation');

Route::post('/tour-comments', [TourCommentController::class, 'store'])->name('tour-comments.store');
Route::get('/tours/{id}', [TourController::class, 'show'])->name('tours.show');
Route::post('/hotel-comments', [HotelCommentController::class, 'store'])->name('hotel-comments.store');
Route::post('vehicle_bookings/book', [VehicleBookingController::class, 'store'])->name('vehicle_bookings.store');


// Route::post('/store.consultation',[ConsultationController::class, 'store']);

// Route::get('blogs-page', function () {
//     return view('blogs-page');
// });
Route::get('custom-tour', function () {
    return view('custom-tour');
});

Route::resource('destinations','DestinationController');

Route::get('/hotels', [HotelController::class, 'index'])->name('hotels.index');
Route::get('/hotels/list',[HotelController::class,'list'])->name('hotels.list');
Route::get('/hotels/{id}', [HotelController::class, 'show'])->name('hotels.show');
Route::post('/hotels/{id}/book', [HotelBookingController::class, 'store'])->name('hotel_booking.store');
// In routes/web.php
Route::get('front/hotels/{id}', [HotelController::class, 'show'])->name('front.hotels.show');

// Route::get('/hotels',[])

// end of changes purpose

Route::get("check_auth",function(){
   return Auth::check();
})->name("auth.check");

Route::get('logout',function(){
    Auth::logout();
    return  redirect()->route("login");
});



Route::group(['as' => 'front.'],function(){
    Route::get('/', 'FrontController@home')->name('home');
    Route::get('/about-us', 'FrontController@about')->name('about');
    Route::get('/contact-us', 'FrontController@contact')->name('contact');
//    Route::get('/privacy-policy', 'FrontController@contact')->name('privacy-policy');
//    Route::get('/Refund-policy', 'FrontController@contact')->name('Refund-policy');
    // Route::post('/contact-us','FrontController@doContact')->name('contact.store');
    Route::post('/newsletter','NewsletterController@store')->name('newsletter.store');
    Route::resource('tours','TourController')->only(['index','show']);
    Route::view('privacy-policy','privacy')->name('privacy-policy');
    Route::view('Refund-policy','refund-policy')->name('Refund-policy');
    Route::view('terms-conditions','terms')->name('terms');
    Route::view('emi-policy','emi-policy')->name('emi-policy');
    Route::view('talent','Talent')->name('talent');

    Route::resource('blogs', BlogController::class);

    // Route::view("join-our-team",'front/join-our-team');
    Route::resource("join-our-team",'JoinOurTeamController');
    Route::group(['middleware' => 'auth'],function(){

        Route::resource('bookings','BookingController')->only(['store']);
        Route::resource('favorites','FavoriteController')->only(['store']);
    });
});



Auth::routes();



Route::group(['middleware' => "auth"],function(){
    Route::get('/email/verify', function () {
        return 'kindly verify your email bsdk!';
    })->name('verification.notice');
    Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
        $request->fulfill();
        return redirect('/');
    })->middleware(['signed'])->name('verification.verify');
    Route::post('/email/verification-notification', function (Request $request) {
        $request->user()->sendEmailVerificationNotification();
        return back()->with('message', 'Verification link sent!');
    })->middleware(['throttle:6,1'])->name('verification.send');
    Route::resource("review","ReviewController");

    Route::group(['as' => "dashboard.",'prefix' => 'dashboard'],function(){
//        Route::resource("/profile","")
        Route::get("/","User\DashboardController@dashboard")->name("dashboard");
        Route::get("/orders","User\DashboardController@orders")->name("orders");
        Route::get('/orders/{id}','User\DashboardController@singleOrder')->name('orders.show');
        Route::get("/favorites","FavoriteController@index")->name("favorites.index");

    });
});

Route::get("check_auth",function(){
    return Auth::check();
})->name("auth.check");


