<?php

namespace App\Modules\Orders\Entities;

use App\Modules\Category\Entities\Category;
use App\Modules\Product\Entities\Product;
use App\Modules\User\Entities\User;
use App\Ship\Abstraction\AbstractEntity;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends AbstractEntity
{
    protected $fillable = [
        'product_id',
        'user_id',
        'quantity',
        'category_id'
    ];

    /**
     * @return BelongsTo
     */
    public function product() :BelongsTo
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    /**
     * @return BelongsTo
     */
    public function category() :BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    /**
     * @return BelongsTo
     */
    public function user() :BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
