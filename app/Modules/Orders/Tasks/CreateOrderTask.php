<?php

namespace App\Modules\Orders\Tasks;

use App\Modules\Orders\Entities\Order;
use App\Modules\Orders\Repositories\OrderRepository;
use App\Ship\Abstraction\AbstractTask;

class CreateOrderTask extends AbstractTask
{
    /**
     * @var OrderRepository
     */
    private $repository;

    public function __construct(OrderRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param array $attributes
     * @return Order
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function run(array $attributes) :Order
    {
        return $this->repository->create($attributes);
    }
}
