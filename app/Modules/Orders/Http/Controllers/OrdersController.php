<?php

namespace App\Modules\Orders\Http\Controllers;

use App\Modules\Orders\Actions\CreateOrderAction;
use App\Modules\Orders\Http\Requests\CreateOrderRequest;
use App\Modules\Orders\Transformers\OrderTransformer;
use App\Ship\Parents\ApiController;

class OrdersController extends ApiController
{
    /**
     * @param CreateOrderRequest $orderRequest
     * @return OrderTransformer
     */
    public function makeOrder(CreateOrderRequest $orderRequest)
    {
        $order = $this->call(CreateOrderAction::class, [$orderRequest]);

        return new OrderTransformer($order);
    }
}
