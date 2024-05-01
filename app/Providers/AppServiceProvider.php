<?php

namespace App\Providers;

use App\Http\Controllers\CalendarController;
use App\Models\Calendar;
use App\Models\Menu;
use App\Models\Tablle;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\ServiceProvider;
use Psy\Readline\Hoa\Console;

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
        $menus = Menu::all();
        $tablles= Tablle::all();

        view()->share([
            'menus'=> $menus,
            'tablles'=> $tablles,
        ]);

        $reservations=Calendar::all();
        view()->share('reservations' ,$reservations);

        


    }
}