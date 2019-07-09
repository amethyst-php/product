<?php

namespace Amethyst\Tests\Managers;

use Amethyst\Fakers\ProductFaker;
use Amethyst\Managers\ProductManager;
use Amethyst\Tests\BaseTest;
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
