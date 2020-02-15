<?php

namespace App\Modules\Category\Transformers;

use Illuminate\Http\Resources\Json\Resource;

class CategoryTransformer extends Resource
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
            'updated_at' => $this->updated_at
        ];
    }
}
