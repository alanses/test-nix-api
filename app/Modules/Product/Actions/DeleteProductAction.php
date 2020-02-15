<?php

namespace App\Modules\Product\Actions;

use App\Modules\Product\Http\Requests\ProductRequest;
use App\Modules\Product\Tasks\DeleteProductTask;
use App\Ship\Abstraction\AbstractAction;

class DeleteProductAction extends AbstractAction
{
    /**
     * @param ProductRequest $request
     */
    public function run(ProductRequest $request)
    {
        $this->call(DeleteProductTask::class, [$request->id]);
    }
}
