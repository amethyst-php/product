<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Managers
    |--------------------------------------------------------------------------
    |
    | Here you can change the table name and the class components
    | used by each manager.
    |
    | table: The table name used while interacting with the database
    | model: Eloquent model
    | schema: Define the structure of the model
    | repository: The class used to perform all queries.
    | serializer: Serialize the model
    | authorizer: Authorize the user
    |
    */
    'managers' => [
        'product' => [
            'table'      => 'amethyst_products',
            'model'      => Railken\Amethyst\Models\Product::class,
            'schema'     => Railken\Amethyst\Schemas\ProductSchema::class,
            'repository' => Railken\Amethyst\Repositories\ProductRepository::class,
            'serializer' => Railken\Amethyst\Serializers\ProductSerializer::class,
            'validator'  => Railken\Amethyst\Validators\ProductValidator::class,
            'authorizer' => Railken\Amethyst\Authorizers\ProductAuthorizer::class,
        ],
        'product-type' => [
            'table'      => 'amethyst_product_types',
            'model'      => Railken\Amethyst\Models\ProductType::class,
            'schema'     => Railken\Amethyst\Schemas\ProductTypeSchema::class,
            'repository' => Railken\Amethyst\Repositories\ProductTypeRepository::class,
            'serializer' => Railken\Amethyst\Serializers\ProductTypeSerializer::class,
            'validator'  => Railken\Amethyst\Validators\ProductTypeValidator::class,
            'authorizer' => Railken\Amethyst\Authorizers\ProductTypeAuthorizer::class,
        ],
        'product-category' => [
            'table' => 'amethyst_product_categories',
        ],
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
                'enabled'     => true,
                'controller'  => Railken\Amethyst\Http\Controllers\Admin\ProductsController::class,
                'router'      => [
                    'as'        => 'product.',
                    'prefix'    => '/products',
                ],
            ],
            'product-type' => [
                'enabled'     => true,
                'controller'  => Railken\Amethyst\Http\Controllers\Admin\ProductTypesController::class,
                'router'      => [
                    'as'        => 'product-type.',
                    'prefix'    => '/product-types',
                ],
            ],
            'product-category' => [
                'enabled'     => true,
                'controller'  => Railken\Amethyst\Http\Controllers\Admin\ProductsCategoriesController::class,
                'router'      => [
                    'as'        => 'product-category.',
                    'prefix'    => '/products/{container_id}/categories',
                ],
            ],
        ],
    ],
];
