<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ContactUss;
use App\Http\Controllers\Admin\TourRequestData;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\ConsultationRequestController;
use App\Http\Controllers\Admin\HotelController;
use App\Http\Controllers\Admin\HotelCategoryController;
use App\Http\Controllers\Admin\VehicleController;
use App\Http\Controllers\Admin\VehicleBookingController;
use App\Http\Controllers\Admin\HotelBookingController;
use App\Http\Controllers\Admin\MembershipController;

Route::group(['middleware' => ['auth','role:Admin']],function(){
    Route::get('/','DashboardController@index')->name('home');
    Route::resource('admins','AdminController')->middleware('has_permission:super_admin');
    Route::group(['middleware' => 'has_permission:'.config('constants.permissions.tour_manager.value')],function(){
        Route::resource('categories','CategoryController');
        Route::resource('tours','TourController');
        Route::resource('tours.departures','TourDepartureController');
        Route::resource('tours.itineraries','TourItinearyController');
        Route::resource('bookings','BookingController');
    });
    Route::group(['middleware' => 'has_permission:'.config('constants.permissions.destination_manager.value')],function(){
        Route::resource('destinations','DestinationController');
    });
    Route::resource('users','UserController');
    Route::resource('payments','PaymentController');
    Route::resource('video-reviews','VideoReviewController');
    Route::group(['middleware' => 'has_permission:'.config('constants.permissions.blog_manager.value')],function(){
        Route::resource('blogs','BlogController');
    });
    Route::resource('consultation_requests', ConsultationRequestController::class);
    Route::resource('TravelRequest', TourRequestData::class);
    Route::resource('Form', ContactUss::class);
    Route::resource('testimonials', TestimonialController::class);
    Route::group(['middleware' => 'has_permission:'.config('constants.permissions.hotel_manager.value')],function(){
        Route::resource('hotels', HotelController::class);
        Route::resource('hotel-categories', HotelCategoryController::class);
        Route::resource('hotel_bookings', HotelBookingController::class);
    });
    Route::resource('vehicles', VehicleController::class);
    Route::resource('vehicle_bookings', VehicleBookingController::class);
    Route::resource('memberships', MembershipController::class);
});
