<?php

namespace App\Providers;

use App\Models\User;
use App\Services\MailchimpNewsletter;
use App\Services\Newsletter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Gate;
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
            return new MailchimpNewsletter((new ApiClient())->setConfig([
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
        Model::unguard();

        Gate::define('admin', function (User $user){
            return $user->username === 'Praveendias';
        });

        Blade::if('admin', function(){
            return request()->user()->can('admin');
        });
    }
}
