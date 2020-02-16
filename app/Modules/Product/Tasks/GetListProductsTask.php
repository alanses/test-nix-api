<?php

namespace App\Modules\Product\Tasks;

use App\Modules\Product\Repositories\ProductRepository;
use App\Ship\Abstraction\AbstractTask;
use App\Ship\Criterias\Eloquent\ThisEqualThatCriteria;

class GetListProductsTask extends AbstractTask
{
    /**
     * @var ProductRepository
     */
    private $repository;
    private $withPaginate;

    /**
     * GetListProductsTask constructor.
     * @param ProductRepository $repository
     */
    public function __construct(ProductRepository $repository)
    {
        $this->repository = $repository;
        $this->withPaginate = false;
    }

    /**
     * @return mixed
     */
    public function run()
    {
        return $this->withPaginate ? $this->repository->paginate() : $this->repository->get();
    }

    /**
     * @return $this
     */
    public function withPaginate()
    {
        $this->withPaginate = true;

        return $this;
    }

    /**
     * @param int $categoryId
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */
    public function whereCategoryIs(?int $categoryId)
    {
        if($categoryId) {
            $this->repository->pushCriteria(new ThisEqualThatCriteria('category_id', $categoryId));
        }
    }
}
