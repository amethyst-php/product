<?php

return [
    'enabled'    => true,
    'controller' => Railken\Amethyst\Http\Controllers\Admin\ProductablesController::class,
    'router'     => [
        'as'     => 'productable.',
        'prefix' => '/productables',
    ],
];
