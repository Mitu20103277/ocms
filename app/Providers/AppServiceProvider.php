<?php

namespace App\Providers;

use App\Models\Food;
use App\Models\Package;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (Schema::hasTable('foods')) {
            $foods = Food::all();
            view::share('foods', $foods);
        }
        if (Schema::hasTable('Packages')) {
            $packages = Package::all();
            view::share('packages', $packages);
        }
    }
}
