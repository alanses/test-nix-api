<?php

namespace App\Modules\Product\Tasks;

use App\Modules\Product\Entities\Product;
use App\Modules\Product\Repositories\ProductRepository;
use App\Ship\Abstraction\AbstractTask;

class CreateProductTask extends AbstractTask
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
     * @param array $attributes
     * @return Product
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */

    public function run(array $attributes) :Product
    {
        return $this->repository->create($attributes);
    }
}
