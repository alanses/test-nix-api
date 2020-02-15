<?php

namespace App\Modules\Category\Actions;

use App\Modules\Category\Entities\Category;
use App\Modules\Category\Http\Requests\CategoryRequest;
use App\Modules\Category\Tasks\GetCategoryTask;
use App\Ship\Abstraction\AbstractAction;

class GetCategoryAction extends AbstractAction
{
    /**
     * @param CategoryRequest $request
     * @return Category
     */

    public function run(CategoryRequest $request) :Category
    {
        return $this->call(GetCategoryTask::class, [], [
            ['findByField' => ['id', $request->id]]
        ]);
    }
}
