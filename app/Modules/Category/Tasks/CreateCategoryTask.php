<?php

namespace App\Modules\Category\Tasks;

use App\Modules\Category\Entities\Category;
use App\Modules\Category\Repositories\CategoryRepository;
use App\Ship\Abstraction\AbstractTask;

class CreateCategoryTask extends AbstractTask
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
     * @param array $attributes
     * @return mixed
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function run(array $attributes) :Category
    {
        return $this->categoryRepository->create($attributes);
    }
}
