<?php

namespace Railken\Amethyst\Providers;

use Illuminate\Support\Facades\Config;
use Railken\Amethyst\Common\CommonServiceProvider;
use Railken\Amethyst\Managers\ProductManager;
use Railken\Amethyst\Models\Product;

class ProductServiceProvider extends CommonServiceProvider
{
    /**
     * Register the service provider.
     */
    public function register()
    {
        parent::register();

        $this->app->register(\Railken\Amethyst\Providers\TaxonomyServiceProvider::class);
        $this->app->register(\Railken\Amethyst\Providers\SupplierServiceProvider::class);

        Config::push('amethyst.taxonomy.data.taxonomy.seeds', Config::get('amethyst.product.data.taxonomies'));
        Config::set('amethyst.taxonomy.data.attributes.taxonomable.options.'.Product::class, ProductManager::class);
    }
}
