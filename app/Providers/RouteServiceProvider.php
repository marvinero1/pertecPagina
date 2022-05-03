<?php

namespace App\Providers;

use App\Models\Auth\User\User;
use App\Models\Producto;
use App\Models\Tienda;
use App\Models\Vendedor;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //
        // Route::pattern('id', '[0-9]+');
        parent::boot();

        // Route::bind('user', function ($value, $route) {
        //     return $this->getModel(\app\Models\Auth\User\User::class, $value);
        // });
       
        // Route::bind('producto', function ($value, $route) {
        //     return $this->getModel(App\Models\Producto::class, $value);
        // });

        // Route::bind('tienda', function ($value, $route) {
        //     return $this->getModel(Tienda::class, $value);
        // });

        // Route::bind('vendedor', function ($value, $route) {
        //     return $this->getModel(Vendedor::class, $value);
        // });

        $this->binds();
    }

   

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        //
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/web.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->namespace)
            ->group(base_path('routes/api.php'));
    }

    /**
     * Bind route models
     */
    protected function binds()
    {
        Route::bind('user_by_code', function ($code) {
            return User::whereConfirmationCode($code)->firstOrFail();
        });

        Route::bind('user_by_email', function ($email) {
            return User::whereEmail($email)->firstOrFail();
        });
    }

    private function getModel($model, $routeKey){
        $id = \Hashids::connection($model)->decode($routeKey)[0] ?? null;
        $modelInstance = resolve($model);

        return  $modelInstance->findOrFail($id);
    }
}
