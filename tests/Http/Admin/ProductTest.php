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
     * Base path config.
     *
     * @var string
     */
    protected $config = 'amethyst.product.http.admin.product';

    /**
     * Category tests.
     */
    public function testSuccessCategory()
    {
        $product = (new ProductManager())->createOrFail(ProductFaker::make()->parameters())->getResource();
        $url = $this->getResourceUrl().'/'.$product->id.'/categories';

        $this->callAndTest('GET', $url, [], 200);

        $category = (new CategoryManager())->createOrFail(CategoryFaker::make()->parameters())->getResource();

        $this->callAndTest('POST', $url.'/'.$category->id, [], 200);
        $this->callAndTest('DELETE', $url.'/'.$category->id, [], 200);
    }
}
