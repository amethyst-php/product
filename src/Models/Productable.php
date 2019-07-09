<?php

namespace Amethyst\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Amethyst\Common\ConfigurableModel;
use Railken\Lem\Contracts\EntityContract;

class Productable extends Pivot implements EntityContract
{
    use ConfigurableModel;

    /**
     * Create a new Eloquent model instance.
     *
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        $this->ini('amethyst.product.data.productable');
        parent::__construct($attributes);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function origin(): BelongsTo
    {
        return $this->belongsTo(config('amethyst.product.data.product.model'));
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(config('amethyst.product.data.product.model'));
    }
}
