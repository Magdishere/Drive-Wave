
<?php

use App\Http\Controllers\Dashboard\BookingsController;
use App\Http\Controllers\Dashboard\CarsBrandsController;
use App\Http\Controllers\Dashboard\CarsController;
use App\Http\Controllers\Dashboard\CarsModelsController;
use App\Http\Controllers\Dashboard\CarsSectionsController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\LocationsController;
use App\Http\Controllers\Dashboard\SlidesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Backend Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/Dashboard_Admin', [DashboardController::class, 'index']);



Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){


        //User Dashboard------------------------------------
        Route::get('/dashboard/user', function () {
            return view('Dashboard.User.dashboard');
        })->middleware(['auth'])->name('dashboard.user');
        //---------------------------------------------------
        //Admin Dashboard------------------------------------
        Route::get('/dashboard/admin', function () {
            return view('Dashboard.Admin.dashboard');
        })->middleware(['auth:admin'])->name('dashboard.admin');
        //---------------------------------------------------

        Route::middleware(['auth:admin'])->group(function(){

            //Cars Sections------------------------------------
            Route::resource('CarsSections', CarsSectionsController::class);
            //Cars Brands--------------------------------------
            Route::resource('CarsBrands', CarsBrandsController::class);
            //Cars Models--------------------------------------
            Route::resource('CarsModels', CarsModelsController::class);
            //Slides-------------------------------------------
            Route::resource('Slides', SlidesController::class);
            //Cars --------------------------------------------
            Route::resource('Cars', CarsController::class);

            Route::get('available','App\Http\Controllers\Dashboard\CarsController@AvailableCars')->name('Cars.available');
            Route::get('reserved','App\Http\Controllers\Dashboard\CarsController@ReservedCars')->name('Cars.reserved');
            Route::get('rented','App\Http\Controllers\Dashboard\CarsController@RentedCars')->name('Cars.rented');

            Route::get('/car_images/{id}',[CarsController::class,'images'])->name('Cars.images');

            //Bookings
            Route::resource('Bookings', BookingsController::class);
            //Locations
            Route::resource('Locations', LocationsController::class);
        });




        require __DIR__.'/auth.php';


    });


