<?php

namespace App\Providers;

use App\Room;
use App\Student;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
		Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        \Blade::if('active', function( Student $student )
		{
			return $student->active;
		});
        \Blade::if('notkaucja', function( Student $student )
		{
			return optional($student->active)->kaucja === 0;
		});
        \Blade::if('roomhashistory', function( Room $room )
		{
			return $room->has_history()->count();
		});
        \Blade::if('roomalerts', function( Room $room )
		{
			return $room->alerts()->count();
		});
        \Blade::if('roomalertsold', function( Room $room )
		{
			return $room->alerts_old()->count();
		});
    }
}
