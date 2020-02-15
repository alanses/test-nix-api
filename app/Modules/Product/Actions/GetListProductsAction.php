<?php

namespace App\Modules\Product\Actions;

use App\Modules\Product\Tasks\GetListProductsTask;
use App\Ship\Abstraction\AbstractAction;

class GetListProductsAction extends AbstractAction
{
    public function run()
    {
        $products = $this->call(GetListProductsTask::class);

        return $products->load(['category']);
    }
}
