<?php

namespace App\Modules\Category\Actions;

use App\Modules\Category\Entities\Category;
use App\Modules\Category\Http\Requests\CreateCategoryRequest;
use App\Modules\Category\Tasks\CreateCategoryTask;
use App\Ship\Abstraction\AbstractAction;

class CreateCategoryAction extends AbstractAction
{
    /**
     * @param CreateCategoryRequest $request
     * @return Category
     */
    public function run(CreateCategoryRequest $request) :Category
    {
        return $this->call(CreateCategoryTask::class, [
            $this->getDataForCreateCategory($request)
        ]);
    }

    /**
     * @param CreateCategoryRequest $request
     * @return array
     */
    private function getDataForCreateCategory(CreateCategoryRequest $request) :array
    {
        return $request->only(['name']);
    }
}
