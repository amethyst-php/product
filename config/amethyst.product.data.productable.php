<?php

return [
    'table'      => 'amethyst_productables',
    'comment'    => 'Productable',
    'model'      => Amethyst\Models\Productable::class,
    'schema'     => Amethyst\Schemas\ProductableSchema::class,
    'repository' => Amethyst\Repositories\ProductableRepository::class,
    'serializer' => Amethyst\Serializers\ProductableSerializer::class,
    'validator'  => Amethyst\Validators\ProductableValidator::class,
    'authorizer' => Amethyst\Authorizers\ProductableAuthorizer::class,
    'faker'      => Amethyst\Fakers\ProductableFaker::class,
    'manager'    => Amethyst\Managers\ProductableManager::class,
    'attributes' => [
        'key' => [
            'options' => [
                'foo',
            ],
        ],
    ],
];
