<?php

namespace App\Modules\Category\Entities;

use App\Ship\Abstraction\AbstractEntity;

class Category extends AbstractEntity
{
    protected $table = 'categories';

    protected $fillable = [
        'name'
    ];
}
