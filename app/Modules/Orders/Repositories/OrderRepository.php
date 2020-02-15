<?php

namespace App\Modules\Orders\Repositories;

use App\Modules\Orders\Entities\Order;
use App\Ship\Abstraction\AbstractRepository;

class OrderRepository extends AbstractRepository
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
        return Order::class;
    }
}
