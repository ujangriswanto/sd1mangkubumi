<?php

namespace App\Providers;

use App\Models\Contact;
use App\Models\ProfilSekolah;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        View::composer('*', function ($view) {
            $view->with('contact', Contact::first());
            $view->with('data', ProfilSekolah::first());
        });
    }
}