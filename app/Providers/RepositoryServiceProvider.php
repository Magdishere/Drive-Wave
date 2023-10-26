<?php

namespace App\Providers;

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
