<?php

namespace App\Providers;

use App\Mail\Transports\TemplatedMailgunTransport;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\ServiceProvider;
use Mailgun\Mailgun;

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
        Mail::extend('templated-mailgun', function () {
            $config = config('services.mailgun', []);
            return new TemplatedMailgunTransport(
                Mailgun::create(
                    $config['secret'],
                )
            );
        });
    }
}
