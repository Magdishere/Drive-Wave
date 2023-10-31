<?php

namespace App\Providers;

use App\Interfaces\CarsBrands\CarsBrandsRepositoryInterface;
use App\Repository\CarsBrands\CarsBrandsRepository;
use App\Interfaces\CarsSections\CarsSectionRepositoryInterface;
use App\Repository\CarsSections\CarsSectionRepository;
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
