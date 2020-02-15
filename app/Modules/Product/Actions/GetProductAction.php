<?php

namespace App\Modules\Product\Actions;

use App\Modules\Product\Http\Requests\ProductRequest;
use App\Modules\Product\Tasks\GetProductTask;
use App\Ship\Abstraction\AbstractAction;

class GetProductAction extends AbstractAction
{
    public function run(ProductRequest $request)
    {
        return $this->call(GetProductTask::class, [], [
            ['findByField' => ['id', $request->id]]
        ]);
    }
}
