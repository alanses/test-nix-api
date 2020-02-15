<?php

namespace App\Modules\Category\Actions;

use App\Modules\Category\Http\Requests\UpdateCategoryRequest;
use App\Modules\Category\Tasks\UpdateCategoryTask;
use App\Ship\Abstraction\AbstractAction;

class UpdateCategoryAction extends AbstractAction
{
    /**
     * @param UpdateCategoryRequest $request
     * @return mixed
     */
    public function run(UpdateCategoryRequest $request)
    {
        return $this->call(UpdateCategoryTask::class, [
            $this->getDataForUpdateCategory($request),
            $request->id
        ]);
    }

    private function getDataForUpdateCategory(UpdateCategoryRequest $request)
    {
        return $request->only(['name']);
    }
}
