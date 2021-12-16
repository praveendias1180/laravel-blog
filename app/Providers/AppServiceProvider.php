<?php

namespace App\Providers;

use App\Services\Newsletter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;
use MailchimpMarketing\ApiClient;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // app()->get('foo')
        // resolve('foo')
        app()->bind('foo', function(){
            return 'bar';
        });

        /**
         * Adding to ToyChest
         *
         * @return void
         */
        app()->bind(Newsletter::class, function(){
            return new Newsletter(
                new ApiClient(),
                'foobar'
            );
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Paginator::useBootstrap();
        // Model::unguard();
    }
}
