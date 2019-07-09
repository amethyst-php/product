<?php

return [
    'enabled'    => true,
    'controller' => Amethyst\Http\Controllers\Admin\ProductsController::class,
    'router'     => [
        'as'     => 'product.',
        'prefix' => '/products',
    ],
];
