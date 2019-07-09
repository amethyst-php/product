<?php

return [
    'enabled'    => true,
    'controller' => Amethyst\Http\Controllers\Admin\ProductTypesController::class,
    'router'     => [
        'as'     => 'product-type.',
        'prefix' => '/product-types',
    ],
];
