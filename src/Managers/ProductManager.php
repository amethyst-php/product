<?php

namespace Amethyst\Managers;

use Amethyst\Common\ConfigurableManager;
use Railken\Lem\Manager;

/**
 * @method \Amethyst\Models\Product newEntity()
 * @method \Amethyst\Schemas\ProductSchema getSchema()
 * @method \Amethyst\Repositories\ProductRepository getRepository()
 * @method \Amethyst\Serializers\ProductSerializer getSerializer()
 * @method \Amethyst\Validators\ProductValidator getValidator()
 * @method \Amethyst\Authorizers\ProductAuthorizer getAuthorizer()
 */
class ProductManager extends Manager
{
    use ConfigurableManager;

    /**
     * @var string
     */
    protected $config = 'amethyst.product.data.product';

    /**
     * Describe extra actions.
     *
     * @return array
     */
    public function getDescriptor()
    {
        return [
            'tree' => [
                'parent' => 'parent_id',
            ],
        ];
    }
}
