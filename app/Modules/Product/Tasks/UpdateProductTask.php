<?php

namespace App\Modules\Product\Tasks;

use App\Modules\Product\Entities\Product;
use App\Modules\Product\Repositories\ProductRepository;
use App\Ship\Abstraction\AbstractTask;

class UpdateProductTask extends AbstractTask
{
    /**
     * @var ProductRepository
     */
    private $repository;

    /**
     * UpdateProductTask constructor.
     * @param ProductRepository $repository
     */
    public function __construct(ProductRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param array $attributes
     * @param $id
     * @return Product
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function run(array $attributes, $id) :Product
    {
        return $this->repository->update($attributes, $id);
    }
}
