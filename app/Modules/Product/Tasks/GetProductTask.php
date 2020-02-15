<?php

namespace App\Modules\Product\Tasks;

use App\Modules\Product\Entities\Product;
use App\Modules\Product\Repositories\ProductRepository;
use App\Ship\Abstraction\AbstractTask;
use App\Ship\Criterias\Eloquent\ThisEqualThatCriteria;

class GetProductTask extends AbstractTask
{
    /**
     * @var ProductRepository
     */
    private $repository;

    public function __construct(ProductRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @return Product
     */

    public function run() :Product
    {
        return $this->repository->first();
    }

    /**
     * @param string $field
     * @param string $value
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */
    public function findByField(string $field, string $value)
    {
        $this->repository->pushCriteria(new ThisEqualThatCriteria($field, $value));
    }
}
