<?php

namespace App\Modules\Product\Tasks;

use App\Modules\Product\Repositories\ProductRepository;
use App\Ship\Abstraction\AbstractTask;

class GetListProductsTask extends AbstractTask
{
    /**
     * @var ProductRepository
     */
    private $repository;

    public function __construct(ProductRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
