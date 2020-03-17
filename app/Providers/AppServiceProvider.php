<?php

namespace App\Providers;

use App\Basket;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        view()->composer('layout-default.header',function($view){
            $auth = auth()->user();
            if($auth != null){
                $baskets = Basket::where('user_id',auth()->user()->id)->where('status','0')->get();
                $sum = 0;
                if(count($baskets) > 0){
                    foreach($baskets as $key => $basket){
                        $a=100-$basket->product->discount;
                        $newPrice=($basket->price/100)*$a;
                        $cost = $newPrice*$basket->count;
                        $sum+=$cost;
                    }
                }
                $baskets = Basket::where('user_id',auth()->user()->id)->where('status','0')->get();
                $view->with([
                    'baskets'=>$baskets,
                    'sum'=>$sum,
                ]);
            }
            else{
                $view->with([
                    'baskets'=>null,
                ]);
            }
        });
    }
}
