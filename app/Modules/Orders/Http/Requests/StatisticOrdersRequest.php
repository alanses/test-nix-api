<?php

namespace App\Modules\Orders\Http\Requests;

use App\Ship\Abstraction\AbstractRequest;

class StatisticOrdersRequest extends AbstractRequest
{
    protected $urlParameters = [];

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'from' => 'nullable|string',
            'to' => 'nullable|string',
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
