<?php

namespace App\Modules\Category\Repositories;

use App\Modules\Category\Entities\Category;
use App\Ship\Abstraction\AbstractRepository;

class CategoryRepository extends AbstractRepository
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
        return Category::class;
    }
}
