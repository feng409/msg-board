<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //注册一个provider后在config/auth.php providers['users']['driver']中绑定
        \Auth::provider('simple-eloquent', function ($app, $config){
           return new SimpleEloquentUserProvider($this->app['hash'], $config['model']);
        });
    }
}
