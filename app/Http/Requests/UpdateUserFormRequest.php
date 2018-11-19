<?php

namespace App\Http\Requests;

use App\Libs\Datamap;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateUserFormRequest extends FormRequest
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
            'firstname' => [
                'required',
                'string'
            ],
            'lastname' => [
                'required',
                'string'
            ],
            'email' => [
                'email',
                'required',
                Rule::unique('users')->ignore($this->user->id),
            ],
            'language' => [
                'nullable',
                'in:' . Datamap::getAppLanguages()->pluck('locale')->implode(',')
            ],
            'admin' => [
                'nullable'
            ]
        ];
    }
}
