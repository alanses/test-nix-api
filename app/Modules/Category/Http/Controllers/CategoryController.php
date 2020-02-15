<?php

namespace App\Modules\Category\Http\Controllers;

use App\Modules\Category\Actions\CreateCategoryAction;
use App\Modules\Category\Actions\DeleteCategoryAction;
use App\Modules\Category\Actions\GetCategoriesAction;
use App\Modules\Category\Actions\GetCategoriesForSelectAction;
use App\Modules\Category\Actions\GetCategoryAction;
use App\Modules\Category\Actions\UpdateCategoryAction;
use App\Modules\Category\Http\Requests\CategoryRequest;
use App\Modules\Category\Http\Requests\CreateCategoryRequest;
use App\Modules\Category\Http\Requests\UpdateCategoryRequest;
use App\Modules\Category\Transformers\CategoryTransformer;
use App\Ship\Parents\ApiController;

class CategoryController extends ApiController
{
    /**
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function listCategories()
    {
        $categories = $this->call(GetCategoriesAction::class);

        return CategoryTransformer::collection($categories);
    }

    /**
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function listCategoriesForSelect()
    {
        $categories = $this->call(GetCategoriesForSelectAction::class);

        return CategoryTransformer::collection($categories);
    }

    /**
     * @param CreateCategoryRequest $request
     * @return CategoryTransformer
     */
    public function store(CreateCategoryRequest $request)
    {
        $category = $this->call(CreateCategoryAction::class, [$request]);

        return new CategoryTransformer($category);
    }

    /**
     * @param CategoryRequest $request
     * @return CategoryTransformer
     */
    public function show(CategoryRequest $request)
    {
        $category = $this->call(GetCategoryAction::class, [$request]);

        return new CategoryTransformer($category);
    }

    /**
     * @param UpdateCategoryRequest $request
     * @return CategoryTransformer
     */
    public function update(UpdateCategoryRequest $request)
    {
        $category = $this->call(UpdateCategoryAction::class, [$request]);

        return new CategoryTransformer($category);
    }

    /**
     * @param CategoryRequest $request
     * @return \Illuminate\Http\Response
     */
    public function delete(CategoryRequest $request)
    {
        $this->call(DeleteCategoryAction::class, [$request]);

        return $this->noContent();
    }
}
