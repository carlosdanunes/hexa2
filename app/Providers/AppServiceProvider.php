<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // try {
        //     DB::connection()->getPDO();
        //     dump('Database is connected. Database Name is : ' . DB::connection()->getDatabaseName());
        //  } catch (Exception $e) {
        //     dump('Database connection failed');
        //  }
    }
}
