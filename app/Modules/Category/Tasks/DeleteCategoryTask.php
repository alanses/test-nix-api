<?php

namespace App\Modules\Category\Tasks;

use App\Modules\Category\Repositories\CategoryRepository;
use App\Ship\Abstraction\AbstractTask;

class DeleteCategoryTask extends AbstractTask
{
    /**
     * @var CategoryRepository
     */
    private $categoryRepository;

    /**
     * CreateCategoryTask constructor.
     * @param CategoryRepository $categoryRepository
     */
    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * @param int $id
     * @return int
     */
    public function run(int $id)
    {
        return $this->categoryRepository->delete($id);
    }
}
