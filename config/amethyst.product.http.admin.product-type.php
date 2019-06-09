<?php

return [
    'enabled'    => true,
    'controller' => Railken\Amethyst\Http\Controllers\Admin\ProductTypesController::class,
    'router'     => [
        'as'     => 'product-type.',
        'prefix' => '/product-types',
    ],
];
