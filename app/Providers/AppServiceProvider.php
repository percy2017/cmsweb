<?php

namespace App\Providers;

use TCG\Voyager\Facades\Voyager;
use App\FormFields\TrackingUsers;
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
       
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Voyager::addAction(\App\Actions\Blocks::class);

        Voyager::addAction(\App\Actions\ExcelImport::class);
        Voyager::addAction(\App\Actions\ExcelExport::class);

        Voyager::addAction(\App\Actions\Roles::class);

        Voyager::addAction(\App\Actions\Messages::class);
        Voyager::addAction(\App\Actions\Chats::class);
    }
}
