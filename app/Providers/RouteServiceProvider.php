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
     * @var string $namespace='App\\Http\\Controllers';
     */
    // $namespace='App/Http/Controllers';

    public const HOME = '/home';

    protected $namespace='App\\Http\\Controllers';

    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     *
     * @return void
     */
/**
 * Define your route model bindings, pattern filters, etc.
 *
 * @return void
 */
public function boot()
{
    $this->configureRateLimiting();

    $this->routes(function () {
        Route::middleware('web')
            ->namespace($this->namespace) // this line
            ->group(base_path('routes/web.php'));

        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->namespace) // this line
            ->group(base_path('routes/api.php'));
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
}
