<?php

namespace App\Providers;

use App\Contract;
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
       $unseen_mail = Contract::where('is_seen', 0)->count();
       view()->share('unseen_mail', $unseen_mail);
    }
}
