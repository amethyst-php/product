<?php

namespace Railken\Amethyst\Tests\Managers;

use Railken\Amethyst\Fakers\ProductFaker;
use Railken\Amethyst\Managers\ProductManager;
use Railken\Amethyst\Tests\BaseTest;
use Railken\Lem\Support\Testing\TestableBaseTrait;

class ProductTest extends BaseTest
{
    use TestableBaseTrait;

    /**
     * Manager class.
     *
     * @var string
     */
    protected $manager = ProductManager::class;

    /**
     * Faker class.
     *
     * @var string
     */
    protected $faker = ProductFaker::class;
}
