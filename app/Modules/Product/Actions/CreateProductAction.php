<?php

namespace App\Modules\Product\Actions;

use App\Modules\Category\Tasks\CreateCategoryTask;
use App\Modules\Product\Entities\Product;
use App\Modules\Product\Http\Requests\CreateProductRequest;
use App\Modules\Product\Tasks\CreateProductTask;
use App\Ship\Abstraction\AbstractAction;

class CreateProductAction extends AbstractAction
{
    /**
     * @param CreateProductRequest $request
     * @return Product
     */
    public function run(CreateProductRequest $request) :Product
    {
        return $this->call(CreateProductTask::class, [
            $this->getDataForCreateProduct($request)
        ]);
    }

    /**
     * @param CreateProductRequest $request
     * @return array
     */
    private function getDataForCreateProduct(CreateProductRequest $request) :array
    {
        return $request->only([
            'name',
            'price',
            'category_id'
        ]);
    }
}
