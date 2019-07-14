<?php

namespace Amethyst\Managers;

use Amethyst\Common\ConfigurableManager;
use Railken\Lem\Manager;

/**
 * @method \Amethyst\Models\Productable newEntity()
 * @method \Amethyst\Schemas\ProductableSchema getSchema()
 * @method \Amethyst\Repositories\ProductableRepository getRepository()
 * @method \Amethyst\Serializers\ProductableSerializer getSerializer()
 * @method \Amethyst\Validators\ProductableValidator getValidator()
 * @method \Amethyst\Authorizers\ProductableAuthorizer getAuthorizer()
 */
class ProductableManager extends Manager
{
    use ConfigurableManager;

    /**
     * @var string
     */
    protected $config = 'amethyst.product.data.productable';
}
