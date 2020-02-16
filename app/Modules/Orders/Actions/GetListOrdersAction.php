<?php

namespace App\Modules\Orders\Actions;

use App\Modules\Orders\Http\Requests\StatisticOrdersRequest;
use App\Modules\Orders\Tasks\GetListOrdersTask;
use App\Ship\Abstraction\AbstractAction;

class GetListOrdersAction extends AbstractAction
{
    public function run(StatisticOrdersRequest $request)
    {
        $products = $this->call(GetListOrdersTask::class, [], [
            ['whereDateBetween' => [$request->from, $request->to]],
            ['whereCategoryIS' => [$request->category_id]],
            ['groupBy' => []],
        ]);

        return $products;
    }
}
