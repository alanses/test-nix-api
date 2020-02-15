<?php

namespace App\Modules\Product\Http\Controllers;

use App\Modules\Product\Actions\SearchProductsAction;
use App\Modules\Product\Transformers\ProductTransformer;
use App\Ship\Parents\ApiController;
use Illuminate\Http\Request;

class SearchProductsController extends ApiController
{
    public function searchProductsByCategory(Request $request)
    {
        $products = $this->call(SearchProductsAction::class, [$request]);

        return ProductTransformer::collection($products);
    }
}
