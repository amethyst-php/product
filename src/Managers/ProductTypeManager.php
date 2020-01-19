<?php

namespace Amethyst\Managers;

use Amethyst\Core\ConfigurableManager;
use Railken\Lem\Manager;

/**
 * @method \Amethyst\Models\ProductType                 newEntity()
 * @method \Amethyst\Schemas\ProductTypeSchema          getSchema()
 * @method \Amethyst\Repositories\ProductTypeRepository getRepository()
 * @method \Amethyst\Serializers\ProductTypeSerializer  getSerializer()
 * @method \Amethyst\Validators\ProductTypeValidator    getValidator()
 * @method \Amethyst\Authorizers\ProductTypeAuthorizer  getAuthorizer()
 */
class ProductTypeManager extends Manager
{
    use ConfigurableManager;

    /**
     * @var string
     */
    protected $config = 'amethyst.product.data.product-type';
}
