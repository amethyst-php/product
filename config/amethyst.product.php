<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Data
    |--------------------------------------------------------------------------
    |
    | Here you can change the table name and the class components.
    |
    */
    'data' => [
        'product' => [
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
        ],
        'product-type' => [
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
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Taxonomies
    |--------------------------------------------------------------------------
    |
    | Here you may configure taxonomies
    |
    */
    'taxonomies' => [
        ['name' => 'PRODUCT_CATEGORY'],
    ],

    /*
    |--------------------------------------------------------------------------
    | Http configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure the routes
    |
    */
    'http' => [
        'admin' => [
            'product' => [
                'enabled'    => true,
                'controller' => Railken\Amethyst\Http\Controllers\Admin\ProductsController::class,
                'router'     => [
                    'as'     => 'product.',
                    'prefix' => '/products',
                ],
            ],
            'product-type' => [
                'enabled'    => true,
                'controller' => Railken\Amethyst\Http\Controllers\Admin\ProductTypesController::class,
                'router'     => [
                    'as'     => 'product-type.',
                    'prefix' => '/product-types',
                ],
            ],
        ],
    ],
];
