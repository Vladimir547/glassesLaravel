<?php

namespace App\Providers;

use App\User;
use App;
use Illuminate\Support\ServiceProvider;

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
        if($_COOKIE['lang']){
            $lang=$_COOKIE['lang'];
        }
        else{
            $lang='ru';
        }

        
        //
        user::creating(function($data){
            $email=$data->emai;
            $thema='Статус регистрации';
            $body='спасибо за регистрацию, ваш логин и пороль на сайте '.$data->name;
            $headers="Content-Type: text/plain; charset=utf-8 \r \n";
            mail($email,$thema, $body, $headers);

            //dd($data);
        });
    }
}
