<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    public const HOME = '/dashboard';

    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            foreach ($this->centralDomains() as $domain) {
                $this->mapWebRoutes($domain);
                $this->mapApiRoutes($domain);
            }
        });
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });
    }

    protected function centralDomains(): array
    {
        return config('tenancy.central_domains');
    }

    protected function mapWebRoutes($domain)
    {
        Route::middleware('web')
            ->domain($domain)
            ->namespace($this->namespace)
            ->name('central::')
            ->group(base_path('routes/central/web.php'));
    }

    protected function mapApiRoutes($domain)
    {
        Route::middleware('api')
            ->domain($domain)
            ->prefix('api')
            ->namespace($this->namespace)
            ->group(base_path('routes/api.php'));
    }
}
