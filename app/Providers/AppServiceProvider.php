<?php

namespace App\Providers;

use Illuminate\Support\Facades\Artisan;

use Illuminate\Support\ServiceProvider;
use App\Pdcategory;
use App\Pjcategory;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    Artisan::call('migrate');


    $pdc=Pdcategory::all();if(is_null($pdc)||count($pdc)<=0){$i=0;for($i=0; $i<=3; $i++){Pdcategory::create(['category'=>$i+1]);}}

    $pjc=Pjcategory::all();if(is_null($pjc)||count($pjc)<=0){$i=0;for($i=0; $i<=5; $i++){Pjcategory::create(['category'=>$i+1]);}}

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
