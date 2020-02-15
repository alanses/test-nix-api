<?php

namespace App\Modules\Product\Http\Requests;

use App\Ship\Abstraction\AbstractRequest;

class UpdateProductRequest extends AbstractRequest
{
    protected $urlParameters = [
        'id'
    ];

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id' => 'required|exists:products,id',
            'name' => 'required|string|max:255',
            'price' => 'nullable',
            'category_id' => 'nullable|exists:categories,id'
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
