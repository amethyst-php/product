<?php

return [
    'enabled'    => true,
    'controller' => Railken\Amethyst\Http\Controllers\Admin\ProductsController::class,
    'router'     => [
        'as'     => 'product.',
        'prefix' => '/products',
    ],
];
