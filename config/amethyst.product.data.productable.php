<?php

return [
    'table'      => 'amethyst_productables',
    'comment'    => 'Productable',
    'model'      => Railken\Amethyst\Models\Productable::class,
    'schema'     => Railken\Amethyst\Schemas\ProductableSchema::class,
    'repository' => Railken\Amethyst\Repositories\ProductableRepository::class,
    'serializer' => Railken\Amethyst\Serializers\ProductableSerializer::class,
    'validator'  => Railken\Amethyst\Validators\ProductableValidator::class,
    'authorizer' => Railken\Amethyst\Authorizers\ProductableAuthorizer::class,
    'faker'      => Railken\Amethyst\Fakers\ProductableFaker::class,
    'manager'    => Railken\Amethyst\Managers\ProductableManager::class,
];
