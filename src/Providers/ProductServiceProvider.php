<?php

namespace Railken\Amethyst\Providers;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Config;
use Railken\Amethyst\Api\Support\Router;
use Railken\Amethyst\Common\CommonServiceProvider;

class ProductServiceProvider extends CommonServiceProvider
{
    /**
     * Register the service provider.
     */
    public function register()
    {
        parent::register();

        $this->loadExtraRoutes();
        $this->app->register(\Railken\Amethyst\Providers\CategoryServiceProvider::class);
        $this->app->register(\Railken\Amethyst\Providers\SupplierServiceProvider::class);
    }

    /**
     * Load Extra routes.
     */
    public function loadExtraRoutes()
    {
        $config = Config::get('amethyst.product.http.admin.product-category');

        if (Arr::get($config, 'enabled')) {
            Router::group('admin', Arr::get($config, 'router'), function ($router) use ($config) {
                $controller = Arr::get($config, 'controller');

                $router->get('/', ['uses' => $controller.'@index']);
                $router->post('/{id}', ['uses' => $controller.'@attach']);
                $router->delete('/{id}', ['uses' => $controller.'@detach']);
            });
        }
    }
}
