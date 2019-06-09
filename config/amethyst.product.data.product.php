<?php

return [
    'table'      => 'amethyst_products',
    'comment'    => 'Product',
    'model'      => Railken\Amethyst\Models\Product::class,
    'schema'     => Railken\Amethyst\Schemas\ProductSchema::class,
    'repository' => Railken\Amethyst\Repositories\ProductRepository::class,
    'serializer' => Railken\Amethyst\Serializers\ProductSerializer::class,
    'validator'  => Railken\Amethyst\Validators\ProductValidator::class,
    'authorizer' => Railken\Amethyst\Authorizers\ProductAuthorizer::class,
    'faker'      => Railken\Amethyst\Fakers\ProductFaker::class,
    'manager'    => Railken\Amethyst\Managers\ProductManager::class,
];
