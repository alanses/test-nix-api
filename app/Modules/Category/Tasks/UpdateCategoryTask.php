<?php

namespace App\Modules\Category\Tasks;

use App\Modules\Category\Repositories\CategoryRepository;
use App\Ship\Abstraction\AbstractTask;

class UpdateCategoryTask extends AbstractTask
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
     * @param $id
     * @return mixed
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function run(array $attributes, $id)
    {
        return $this->categoryRepository->update($attributes, $id);
    }
}
