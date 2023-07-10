<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // Gate設定　roleが1のユーザーは管理者
        Gate::define('admin', function($user){
            return $user->role === 1;
        });

        // Gate設定　roleが0から5のユーザーはマネージャー
        Gate::define('manager-higher', function($user){
            return $user->role > 0 && $user->role <= 5;
        });

        // Gate設定　roleが0から９のユーザーは一般
        Gate::define('user-higher', function($user){
            return $user->role >0 && $user->role <= 9;
        });
    }
}
