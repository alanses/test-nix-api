<?php

namespace App\Modules\Product\Repositories;

use App\Modules\Product\Entities\Product;
use App\Ship\Abstraction\AbstractRepository;

class ProductRepository extends AbstractRepository
{
    protected $fieldSearchable = [];

    /**
    * @throws \Prettus\Repository\Exceptions\RepositoryException
    */
    public function boot()
    {

    }

    /**
    * @return string
    */
    function model()
    {
        return Product::class;
    }
}
