<?php

namespace Amethyst\Fakers;

use Faker\Factory;
use Railken\Bag;
use Railken\Lem\Faker;

class ProductableFaker extends Faker
{
    /**
     * @return \Railken\Bag
     */
    public function parameters()
    {
        $faker = Factory::create();

        $bag = new Bag();
        $bag->set('origin', ProductFaker::make()->parameters()->toArray());
        $bag->set('product', ProductFaker::make()->parameters()->toArray());
        $bag->set('key', 'foo');
        $bag->set('quantity', 10);

        return $bag;
    }
}
