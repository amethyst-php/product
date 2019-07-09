<?php

namespace Amethyst\Fakers;

use Faker\Factory;
use Railken\Bag;
use Railken\Lem\Faker;

class ProductFaker extends Faker
{
    /**
     * @param bool $parent
     *
     * @return \Railken\Bag
     */
    public function parameters(bool $parent = true)
    {
        $faker = Factory::create();

        $bag = new Bag();
        $bag->set('name', $faker->name);
        $bag->set('code', $faker->name);
        $bag->set('description', $faker->text);
        $bag->set('type', ProductTypeFaker::make()->parameters()->toArray());
        $bag->set('supplier', SupplierFaker::make()->parameters()->toArray());

        if ($parent) {
            $bag->set('parent', ProductFaker::make()->parameters(false)->toArray());
        }

        return $bag;
    }
}
