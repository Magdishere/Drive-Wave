<?php

namespace App\Providers;

use App\Interfaces\About\AboutRepositoryInterface;
use App\Repository\About\AboutRepository;
use App\Interfaces\Bookings\BookingsRepositoryInterface;
use App\Interfaces\Cars\CarsRepositoryInterface;
use App\Interfaces\CarsBrands\CarsBrandsRepositoryInterface;
use App\Interfaces\CarsModels\CarsModelsRepositoryInterface;
use App\Repository\CarsBrands\CarsBrandsRepository;
use App\Interfaces\CarsSections\CarsSectionRepositoryInterface;
use App\Interfaces\Locations\LocationsRepositoryInterface;
use App\Interfaces\Slides\SlidesRepositoryInterface;
use App\Repository\CarsSections\CarsSectionRepository;
use App\Repository\CarsModels\CarsModelsRepository;
use App\Repository\Cars\CarsRepository;
use App\Repository\Slides\SlidesRepository;
use App\Repository\Bookings\BookingsRepository;
use App\Repository\Locations\LocationsRepository;


use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(CarsSectionRepositoryInterface::class, CarsSectionRepository::class);
        $this->app->bind(CarsBrandsRepositoryInterface::class, CarsBrandsRepository::class);
        $this->app->bind(CarsModelsRepositoryInterface::class, CarsModelsRepository::class);
        $this->app->bind(CarsRepositoryInterface::class, CarsRepository::class);
        $this->app->bind(SlidesRepositoryInterface::class, SlidesRepository::class);
        $this->app->bind(BookingsRepositoryInterface::class, BookingsRepository::class);
        $this->app->bind(LocationsRepositoryInterface::class, LocationsRepository::class);
        $this->app->bind(AboutRepositoryInterface::class, AboutRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
