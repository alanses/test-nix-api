<?php

namespace App\Modules\Category\Tasks;

use App\Modules\Category\Repositories\CategoryRepository;
use App\Ship\Abstraction\AbstractTask;

class GetCategoriesTask extends AbstractTask
{
    /**
     * @var CategoryRepository
     */
    private $categoryRepository;

    private $withPagination;

    /**
     * CreateCategoryTask constructor.
     * @param CategoryRepository $categoryRepository
     */
    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
        $this->withPagination = false;
    }

    /**
     * @return mixed
     */
    public function run()
    {
        return $this->withPagination ? $this->categoryRepository->paginate() : $this->categoryRepository->get();
    }

    public function withPagination()
    {
        $this->withPagination = true;

        return $this;
    }
}
