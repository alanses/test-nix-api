<?php

namespace App\Modules\Orders\Actions;

use App\Modules\Orders\Http\Requests\CreateOrderRequest;
use App\Modules\Orders\Tasks\CreateOrderTask;
use App\Ship\Abstraction\AbstractAction;

class CreateOrderAction extends AbstractAction
{
    public function run(CreateOrderRequest $request)
    {
        return $this->call(CreateOrderTask::class, [$this->getDataForCreateOrder($request)]);
    }

    private function getDataForCreateOrder(CreateOrderRequest $request) :array
    {
        return [
            'product_id' => $request->product_id,
            'quantity' => $request->quantity,
            'category_id' => $request->category_id
        ];
    }
}
