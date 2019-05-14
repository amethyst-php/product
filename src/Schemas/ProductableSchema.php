<?php

namespace Railken\Amethyst\Schemas;

use Railken\Lem\Attributes;
use Railken\Lem\Schema;
use Railken\Amethyst\Managers\ProductManager;

class ProductableSchema extends Schema
{
    /**
     * Get all the attributes.
     *
     * @var array
     */
    public function getAttributes()
    {
        return [
            Attributes\IdAttribute::make(),
            Attributes\BelongsToAttribute::make('origin_id')
                ->setRelationName('origin')
                ->setRelationManager(ProductManager::class)
                ->setRequired(true),
            Attributes\BelongsToAttribute::make('product_id')
                ->setRelationName('product')
                ->setRelationManager(ProductManager::class)
                ->setRequired(true),
            Attributes\TextAttribute::make('key'),
            Attributes\NumberAttribute::make('quantity'),
            Attributes\CreatedAtAttribute::make(),
            Attributes\UpdatedAtAttribute::make()
        ];
    }
}
