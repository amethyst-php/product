<?php

return [
    'table'      => 'amethyst_products',
    'comment'    => 'Product',
    'model'      => Amethyst\Models\Product::class,
    'schema'     => Amethyst\Schemas\ProductSchema::class,
    'repository' => Amethyst\Repositories\ProductRepository::class,
    'serializer' => Amethyst\Serializers\ProductSerializer::class,
    'validator'  => Amethyst\Validators\ProductValidator::class,
    'authorizer' => Amethyst\Authorizers\ProductAuthorizer::class,
    'faker'      => Amethyst\Fakers\ProductFaker::class,
    'manager'    => Amethyst\Managers\ProductManager::class,
];
