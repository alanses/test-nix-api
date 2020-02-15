<?php

namespace App\Modules\Product\Transformers;

use Illuminate\Http\Resources\Json\Resource;

class ProductTransformer extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'price' => $this->price,
            'category_name' => $this->getCategoryName(),
            'category_id' => $this->category_id,
            'created_at' => $this->created_at,
        ];
    }

    private function getCategoryName()
    {
        return optional($this->category)->name;
    }
}
