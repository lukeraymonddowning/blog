<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use Statamic\Facades\Markdown;
use Statamic\Facades\User;
use Statamic\Statamic;
use Torchlight\Commonmark\V1\TorchlightExtension;

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
        Markdown::addExtension(function () {
            return new TorchlightExtension();
        });
    }
}
