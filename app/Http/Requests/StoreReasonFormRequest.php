<?php

namespace App\Http\Requests;

use App\Libs\Datamap;
use App\Reason;
use Illuminate\Foundation\Http\FormRequest;

class StoreReasonFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => [
                'required',
                'string',
                'unique:reasons,title'
            ],
            'description' => [
                'nullable',
                'string'
            ],
            'color' => [
                'nullable',
                'string'
            ],
            'hex_color' => [
                'nullable',
                'string'
            ],
            'has_to_confirm' => [
                'nullable'
            ]
        ];
    }
}
