<?php

namespace Amethyst\Tests\Managers;

use Amethyst\Fakers\ProductableFaker;
use Amethyst\Managers\ProductableManager;
use Amethyst\Tests\BaseTest;
use Railken\Lem\Support\Testing\TestableBaseTrait;

class ProductableTest extends BaseTest
{
    use TestableBaseTrait;

    /**
     * Manager class.
     *
     * @var string
     */
    protected $manager = ProductableManager::class;

    /**
     * Faker class.
     *
     * @var string
     */
    protected $faker = ProductableFaker::class;
}
