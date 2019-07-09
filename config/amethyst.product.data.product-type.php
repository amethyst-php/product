<?php

return [
    'table'      => 'amethyst_product_types',
    'comment'    => 'Product Type',
    'model'      => Amethyst\Models\ProductType::class,
    'schema'     => Amethyst\Schemas\ProductTypeSchema::class,
    'repository' => Amethyst\Repositories\ProductTypeRepository::class,
    'serializer' => Amethyst\Serializers\ProductTypeSerializer::class,
    'validator'  => Amethyst\Validators\ProductTypeValidator::class,
    'authorizer' => Amethyst\Authorizers\ProductTypeAuthorizer::class,
    'faker'      => Amethyst\Fakers\ProductTypeFaker::class,
    'manager'    => Amethyst\Managers\ProductTypeManager::class,
];
