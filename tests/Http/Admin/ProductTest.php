<?php

namespace Railken\Amethyst\Tests\Http\Admin;

use Railken\Amethyst\Api\Support\Testing\TestableBaseTrait;
use Railken\Amethyst\Fakers\CategoryFaker;
use Railken\Amethyst\Fakers\ProductFaker;
use Railken\Amethyst\Managers\CategoryManager;
use Railken\Amethyst\Managers\ProductManager;
use Railken\Amethyst\Tests\BaseTest;

class ProductTest extends BaseTest
{
    use TestableBaseTrait;

    /**
     * Faker class.
     *
     * @var string
     */
    protected $faker = ProductFaker::class;

    /**
     * Router group resource.
     *
     * @var string
     */
    protected $group = 'admin';

    /**
     * Route name.
     *
     * @var string
     */
    protected $route = 'admin.product';

    /**
     * Category tests.
     */
    public function testSuccessCategory()
    {
        $product = (new ProductManager())->createOrFail(ProductFaker::make()->parameters())->getResource();

        $this->callAndTest('GET', route('admin.product-category.index', ['container_id' => $product->id]), [], 200);

        $category = (new CategoryManager())->createOrFail(CategoryFaker::make()->parameters())->getResource();

        $this->callAndTest('POST', route('admin.product-category.attach', ['container_id' => $product->id, 'id' => $category->id]), [], 200);
        $this->callAndTest('DELETE', route('admin.product-category.detach', ['container_id' => $product->id, 'id' => $category->id]), [], 200);
    }
}
