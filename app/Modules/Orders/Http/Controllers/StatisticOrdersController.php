<?php

namespace App\Modules\Orders\Http\Controllers;

use App\Modules\Orders\Actions\GetListOrdersAction;
use App\Modules\Orders\Http\Requests\StatisticOrdersRequest;
use App\Modules\Orders\Transformers\OrderTransformer;
use App\Ship\Parents\ApiController;

class StatisticOrdersController extends ApiController
{
    public function getListOrders(StatisticOrdersRequest $request)
    {
        $orders = $this->call(GetListOrdersAction::class, [$request]);

        return OrderTransformer::collection($orders);
    }
}
