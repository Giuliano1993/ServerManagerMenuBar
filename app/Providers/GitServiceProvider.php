<?php

namespace App\Providers;

use App\Services\GitService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\ServiceProvider;

class GitServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(GitService::class, function(Application $app){
            return new GitService();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
