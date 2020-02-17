<?php

namespace App\Modules\Orders\Transformers;

use Illuminate\Http\Resources\Json\Resource;

class OrderTransformer extends Resource
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
            'product' => $this->getProduct(),
            'price' => $this->getPrice(),
            'category' => $this->getCategory(),
            'user' => $this->getUser(),
            'quantity' => $this->quantity,
        ];
    }

    private function getUser()
    {
        return optional($this->user)->email;
    }

    private function getCategory()
    {
        return optional($this->category)->name;
    }

    private function getPrice()
    {
        return optional($this->product)->price;
    }

    private function getProduct()
    {
        return optional($this->product)->name;
    }
}
