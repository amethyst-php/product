<?php

namespace Amethyst\Providers;

use Amethyst\Core\Providers\CommonServiceProvider;
use Amethyst\Managers\ProductManager;
use Amethyst\Models\Product;
use Illuminate\Support\Facades\Config;

class ProductServiceProvider extends CommonServiceProvider
{
    /**
     * Register the service provider.
     */
    public function register()
    {
        parent::register();

        $this->app->register(\Amethyst\Providers\TaxonomyServiceProvider::class);
        $this->app->register(\Amethyst\Providers\SupplierServiceProvider::class);

        /*
        Config::set('amethyst.taxonomy.data.taxonomy.seeds', array_merge(
            Config::get('amethyst.taxonomy.data.taxonomy.seeds'),
            Config::get('amethyst.product.taxonomies')
        ));

        Config::set('amethyst.taxonomy.data.taxonomable.attributes.taxonomable.options.'.Product::class, ProductManager::class);
        */
    }
}
