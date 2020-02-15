<?php

namespace App\Modules\Category\Actions;

use App\Modules\Category\Tasks\GetCategoriesTask;
use App\Ship\Abstraction\AbstractAction;

class GetCategoriesForSelectAction extends AbstractAction
{
    /**
     * @return mixed
     */
    public function run()
    {
        return $this->call(GetCategoriesTask::class);
    }
}
