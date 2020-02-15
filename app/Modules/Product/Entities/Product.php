<?php

namespace App\Modules\Product\Entities;

use App\Modules\Category\Entities\Category;
use App\Ship\Abstraction\AbstractEntity;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends AbstractEntity
{
    protected $table = 'products';

    protected $fillable = [
        'name',
        'price',
        'category_id'
    ];

    /**
     * @return BelongsTo
     */
    public function category() :BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
