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
        Tokens::PERMISSION_CREATE => 'product_type.create',
        Tokens::PERMISSION_UPDATE => 'product_type.update',
        Tokens::PERMISSION_SHOW   => 'product_type.show',
        Tokens::PERMISSION_REMOVE => 'product_type.remove',
    ];
}
