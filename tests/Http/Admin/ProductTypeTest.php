<?php

namespace Railken\Amethyst\Tests\Http\Admin;

use Railken\Amethyst\Api\Support\Testing\TestableBaseTrait;
use Railken\Amethyst\Fakers\ProductTypeFaker;
use Railken\Amethyst\Tests\BaseTest;

class ProductTypeTest extends BaseTest
{
    use TestableBaseTrait;

    /**
     * Faker class.
     *
     * @var string
     */
    protected $faker = ProductTypeFaker::class;

    /**
     * Router group resource.
     *
     * @var string
     */
    protected $group = 'admin';

    /**
     * Base path config.
     *
     * @var string
     */
    protected $config = 'amethyst.product.http.admin.product-type';
}
