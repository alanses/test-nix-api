<?php

namespace App\Modules\Product\Tasks;

use App\Modules\Product\Repositories\ProductRepository;
use App\Ship\Abstraction\AbstractTask;

class DeleteProductTask extends AbstractTask
{
    /**
     * @var ProductRepository
     */
    private $repository;

    /**
     * DeleteProductTask constructor.
     * @param ProductRepository $repository
     */
    public function __construct(ProductRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param int $id
     * @return int
     */
    public function run(int $id)
    {
        return $this->repository->delete($id);
    }
}
