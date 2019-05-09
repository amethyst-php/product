<?php

namespace Railken\Amethyst\Authorizers;

use Railken\Lem\Authorizer;
use Railken\Lem\Tokens;

class ProductTypeAuthorizer extends Authorizer
{
    /**
     * List of all permissions.
     *
     * @var array
     */
    protected $permissions = [
        Tokens::PERMISSION_CREATE => 'product-type.create',
        Tokens::PERMISSION_UPDATE => 'product-type.update',
        Tokens::PERMISSION_SHOW   => 'product-type.show',
        Tokens::PERMISSION_REMOVE => 'product-type.remove',
    ];
}
