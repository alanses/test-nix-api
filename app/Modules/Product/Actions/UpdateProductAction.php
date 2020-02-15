<?php

namespace App\Modules\Product\Actions;

use App\Modules\Product\Http\Requests\UpdateProductRequest;
use App\Modules\Product\Tasks\UpdateProductTask;
use App\Ship\Abstraction\AbstractAction;

class UpdateProductAction extends AbstractAction
{
    public function run(UpdateProductRequest $request)
    {
        return $this->call(UpdateProductTask::class, [
            $this->getDataForUpdateProduct($request),
            $request->id
        ]);
    }

    private function getDataForUpdateProduct(UpdateProductRequest $request)
    {
        return $request->only(['name', 'price', 'category_id']);
    }
}
