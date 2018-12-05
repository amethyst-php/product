<?php

namespace Railken\Amethyst\Schemas;

use Railken\Amethyst\Managers\ProductManager;
use Railken\Amethyst\Managers\ProductTypeManager;
use Railken\Amethyst\Managers\SupplierManager;
use Railken\Lem\Attributes;
use Railken\Lem\Schema;

class ProductSchema extends Schema
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
            Attributes\TextAttribute::make('name')
                ->setRequired(true)
                ->setUnique(true),
            Attributes\TextAttribute::make('code')
                ->setUnique(true),
            Attributes\LongTextAttribute::make('description'),
            Attributes\BelongsToAttribute::make('type_id')
                ->setRelationName('type')
                ->setRelationManager(ProductTypeManager::class),
            Attributes\BelongsToAttribute::make('parent_id')
                ->setRelationName('parent')
                ->setRelationManager(ProductManager::class),
            Attributes\BelongsToAttribute::make('supplier_id')
                ->setRelationName('supplier')
                ->setRelationManager(SupplierManager::class),
            Attributes\CreatedAtAttribute::make(),
            Attributes\UpdatedAtAttribute::make(),
            Attributes\DeletedAtAttribute::make(),
        ];
    }
}
