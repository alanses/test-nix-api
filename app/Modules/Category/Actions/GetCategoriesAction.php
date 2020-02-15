<?php

namespace App\Modules\Category\Actions;

use App\Modules\Category\Tasks\GetCategoriesTask;
use App\Ship\Abstraction\AbstractAction;

class GetCategoriesAction extends AbstractAction
{
    /**
     * @return mixed
     */
    public function run()
    {
        return $this->call(GetCategoriesTask::class, [], [
            ['withPagination' => []]
        ]);
    }
}
