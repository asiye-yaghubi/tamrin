<?php

namespace App\Providers;

use App\Permition;
use App\Product;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
        Product::class=>'App\Policies\ProductPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // Gate::define('edite_product',function($user,$product){
        //     return $user->id==$product->user_id;
        // });
        
        foreach($this->getPermitions() as $permition)
        {
            Gate::define($permition->name,function($user) use ($permition){
                return $user->hasRole($permition->roles);
            });
        }

    
    }
    public function getPermitions()
    {
        return Permition::with('roles')->get();
    }
}
