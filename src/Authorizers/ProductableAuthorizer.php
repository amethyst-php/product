<?php

namespace Amethyst\Authorizers;

use Railken\Lem\Authorizer;
use Railken\Lem\Tokens;

class ProductableAuthorizer extends Authorizer
{
    /**
     * List of all permissions.
     *
     * @var array
     */
    protected $permissions = [
        Tokens::PERMISSION_CREATE => 'productable.create',
        Tokens::PERMISSION_UPDATE => 'productable.update',
        Tokens::PERMISSION_SHOW   => 'productable.show',
        Tokens::PERMISSION_REMOVE => 'productable.remove',
    ];
}
