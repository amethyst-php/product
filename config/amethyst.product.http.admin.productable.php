<?php

return [
    'enabled'    => true,
    'controller' => Amethyst\Http\Controllers\Admin\ProductablesController::class,
    'router'     => [
        'as'     => 'productable.',
        'prefix' => '/productables',
    ],
];
