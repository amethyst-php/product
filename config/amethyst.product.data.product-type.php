<?php

return [
    'table'      => 'amethyst_product_types',
    'comment'    => 'Product Type',
    'model'      => Railken\Amethyst\Models\ProductType::class,
    'schema'     => Railken\Amethyst\Schemas\ProductTypeSchema::class,
    'repository' => Railken\Amethyst\Repositories\ProductTypeRepository::class,
    'serializer' => Railken\Amethyst\Serializers\ProductTypeSerializer::class,
    'validator'  => Railken\Amethyst\Validators\ProductTypeValidator::class,
    'authorizer' => Railken\Amethyst\Authorizers\ProductTypeAuthorizer::class,
    'faker'      => Railken\Amethyst\Fakers\ProductTypeFaker::class,
    'manager'    => Railken\Amethyst\Managers\ProductTypeManager::class,
];
