<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\View;

use App\Http\View\Composers\LkpCategoriesComposer;

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
        // View::composer( ['membership.create','membership.edit'] , function($view) {
        //     $view->with( 'categories', LkpCategory::all() );
        // });
        
        View::composer( ['_partials.lkp.lkpcategories.*'] , LkpCategoriesComposer::class );
    }
}
