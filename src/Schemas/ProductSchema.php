<?php

namespace Amethyst\Schemas;

use Amethyst\Managers\ProductManager;
use Amethyst\Managers\ProductTypeManager;
use Amethyst\Managers\SupplierManager;
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
            Attributes\UuidAttribute::make(),
            Attributes\TextAttribute::make('name')
                ->setRequired(true),
            Attributes\TextAttribute::make('code'),
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
