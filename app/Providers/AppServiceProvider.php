<?php

namespace App\Providers;


use App\Repository\Interfaces\ContactInterface as IContact;
use App\Repository\Services\ContactService as ContactService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(IContact::class, ContactService::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
