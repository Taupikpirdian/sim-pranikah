<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use View;
use App\Berita;
use App\User;
use App\Kalender;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if(Schema::hasTable('beritas') && Schema::hasTable('kalenders')){
            Schema::defaultStringLength(191);

            $news = Berita::leftjoin('users', 'users.id', '=', 'beritas.user_id')
            ->orderBy('beritas.created_at', 'desc')
            ->select(
                    'users.name',
                    'beritas.*'
                    )
            ->limit(3)
            ->get();
            View::share ( 'news', $news );

            $kalenders = Kalender::get();
            View::share ( 'kalenders', $kalenders );

            $kalender = Kalender::first();
            View::share ( 'kalender', $kalender );

            // echo "<pre>";
            // print_r($kalenders);
            // echo "</pre>";
            // exit();
        }
    }
}
