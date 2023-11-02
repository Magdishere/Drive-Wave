<?php

namespace App\Providers;

use App\Interfaces\CarsBrands\CarsBrandsRepositoryInterface;
use App\Interfaces\CarsModels\CarsModelsRepositoryInterface;
use App\Repository\CarsBrands\CarsBrandsRepository;
use App\Interfaces\CarsSections\CarsSectionRepositoryInterface;
use App\Repository\CarsSections\CarsSectionRepository;
use App\Repository\CarsModels\CarsModelsRepository;
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
