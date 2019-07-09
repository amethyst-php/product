<?php

namespace Amethyst\Providers;

use Illuminate\Support\Facades\Config;
use Amethyst\Common\CommonServiceProvider;
use Amethyst\Managers\ProductManager;
use Amethyst\Models\Product;

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
