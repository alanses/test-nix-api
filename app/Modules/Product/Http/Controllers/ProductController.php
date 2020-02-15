<?php

namespace App\Modules\Product\Http\Controllers;

use App\Modules\Product\Actions\CreateProductAction;
use App\Modules\Product\Actions\DeleteProductAction;
use App\Modules\Product\Actions\GetListProductsAction;
use App\Modules\Product\Actions\GetProductAction;
use App\Modules\Product\Actions\UpdateProductAction;
use App\Modules\Product\Http\Requests\CreateProductRequest;
use App\Modules\Product\Http\Requests\ProductRequest;
use App\Modules\Product\Http\Requests\UpdateProductRequest;
use App\Modules\Product\Transformers\ProductTransformer;
use App\Ship\Parents\ApiController;

class ProductController extends ApiController
{
    /**
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function getListProducts()
    {
        $products = $this->call(GetListProductsAction::class);

        return ProductTransformer::collection($products);
    }

    /**
     * @param CreateProductRequest $request
     * @return ProductTransformer
     */
    public function store(CreateProductRequest $request)
    {
        $product = $this->call(CreateProductAction::class, [$request]);

        return new ProductTransformer($product);
    }

    /**
     * @param UpdateProductRequest $request
     * @return ProductTransformer
     */
    public function update(UpdateProductRequest $request)
    {
        $product = $this->call(UpdateProductAction::class, [$request]);

        return new ProductTransformer($product);
    }

    /**
     * @param ProductRequest $request
     * @return ProductTransformer
     */
    public function show(ProductRequest $request)
    {
        $product = $this->call(GetProductAction::class, [$request]);

        return new ProductTransformer($product);
    }

    /**
     * @param ProductRequest $request
     * @return \Illuminate\Http\Response
     */
    public function delete(ProductRequest $request)
    {
        $this->call(DeleteProductAction::class, [$request]);

        return $this->noContent();
    }
}
