<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Team;


class TeamsWithnewsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $teams = Team::with('news')->get();
        $value = $teams;

        view()->share('teamsWithNews', $value);
    }
}
