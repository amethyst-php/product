<?php

namespace Railken\Amethyst\Tests\Managers;

use Railken\Amethyst\Fakers\ProductableFaker;
use Railken\Amethyst\Managers\ProductableManager;
use Railken\Amethyst\Tests\BaseTest;
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
