<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class FundingServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        require_once app_path() . "/Helpers/Funding.php";
    }
}
