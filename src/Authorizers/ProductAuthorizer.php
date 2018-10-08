<?php

namespace Railken\Amethyst\Authorizers;

use Railken\Lem\Authorizer;
use Railken\Lem\Tokens;

class ProductAuthorizer extends Authorizer
{
    /**
     * List of all permissions.
     *
     * @var array
     */
    protected $permissions = [
        Tokens::PERMISSION_CREATE => 'product.create',
        Tokens::PERMISSION_UPDATE => 'product.update',
        Tokens::PERMISSION_SHOW   => 'product.show',
        Tokens::PERMISSION_REMOVE => 'product.remove',
    ];
}
