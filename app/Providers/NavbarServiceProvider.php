<?php

namespace App\Providers;


use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class NavbarServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {

    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('layouts.includes.admin.navbar', function ($view) {
            $today = Carbon::now(new \DateTimeZone('Asia/Manila'))->startOfDay();
            $tomorrow = $today->copy()->endOfDay();
    
            $query = DB::table('students')
                ->select('created_at')
                ->whereBetween('created_at', [$today, $tomorrow]);
    
            $dailyCount = $query->count();
    
            $view->with('dailyCount', $dailyCount);
        });
    }

}
