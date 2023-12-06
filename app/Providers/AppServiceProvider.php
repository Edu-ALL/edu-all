<?php

namespace App\Providers;

use App\Models\WebsiteSettings;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $website_setting = WebsiteSettings::first();
        View::share("website_settings", $website_setting);
        // Paginator::defaultView('view-name');
        // Paginator::defaultSimpleView('view-name');
    }
}
