<?php

namespace Railken\Amethyst\Tests\Managers;

use Railken\Amethyst\Fakers\ProductTypeFaker;
use Railken\Amethyst\Managers\ProductTypeManager;
use Railken\Amethyst\Tests\BaseTest;
use Railken\Lem\Support\Testing\TestableBaseTrait;

class ProductTypeTest extends BaseTest
{
    use TestableBaseTrait;

    /**
     * Manager class.
     *
     * @var string
     */
    protected $manager = ProductTypeManager::class;

    /**
     * Faker class.
     *
     * @var string
     */
    protected $faker = ProductTypeFaker::class;
}
