<?php

namespace App\Modules\Category\Actions;

use App\Modules\Category\Http\Requests\CategoryRequest;
use App\Modules\Category\Tasks\DeleteCategoryTask;
use App\Ship\Abstraction\AbstractAction;

class DeleteCategoryAction extends AbstractAction
{
    /**
     * @param CategoryRequest $request
     * @return mixed
     */
    public function run(CategoryRequest $request)
    {
        return $this->call(DeleteCategoryTask::class, [$request->id]);
    }
}
