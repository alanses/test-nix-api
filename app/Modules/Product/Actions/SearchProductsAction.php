<?php

namespace App\Modules\Product\Actions;

use App\Modules\Product\Tasks\GetListProductsTask;
use App\Ship\Abstraction\AbstractAction;
use Illuminate\Http\Request;

class SearchProductsAction extends AbstractAction
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function run(Request $request)
    {
        $products = $this->call(GetListProductsTask::class, [], [
            ['whereCategoryIs' => [$request->category_id]]
        ]);

        return $products->load(['category']);
    }
}
