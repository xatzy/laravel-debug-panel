<?php

namespace App\Providers;

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
        /*
        | If we are not in production, use the custom debugger
        */
        if (env('APP_DEBUG') == true)
        {


            \DB::listen(function ($query) {
            // $query->sql
            // $query->bindings
            // $query->time
                if (!is_array(session()->get('sql')))
                    session()->put('sql', []);

                session()->push('sql', $query->sql);
                \View::share('sql', session()->get('sql'));

            });
        }
    }
}
