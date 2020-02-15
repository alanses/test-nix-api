<?php

namespace App\Modules\Category\Tasks;

use App\Modules\Category\Entities\Category;
use App\Modules\Category\Repositories\CategoryRepository;
use App\Ship\Abstraction\AbstractTask;
use App\Ship\Criterias\Eloquent\ThisEqualThatCriteria;

class GetCategoryTask extends AbstractTask
{
    /**
     * @var CategoryRepository
     */
    private $categoryRepository;

    /**
     * GetCategoryTask constructor.
     * @param CategoryRepository $categoryRepository
     */
    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * @return Category
     */
    public function run() :Category
    {
        return $this->categoryRepository->first();
    }

    /**
     * @param string $field
     * @param string $value
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */
    public function findByField(string $field, string $value)
    {
        $this->categoryRepository->pushCriteria(new ThisEqualThatCriteria($field, $value));
    }
}
