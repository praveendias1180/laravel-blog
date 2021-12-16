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
         * Adding the newsletter to the 'ToyChest'.
         *
         * @return void
         */
        app()->bind(Newsletter::class, function(){
            return new Newsletter((new ApiClient())->setConfig([
                'apiKey' => config('services.mailchimp.key'),
                'server' => 'us20'
            ]), 'foobar');
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
