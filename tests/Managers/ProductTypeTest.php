<?php

namespace Amethyst\Tests\Managers;

use Amethyst\Fakers\ProductTypeFaker;
use Amethyst\Managers\ProductTypeManager;
use Amethyst\Tests\BaseTest;
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
