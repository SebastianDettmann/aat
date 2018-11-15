<?php

namespace App\Http\Requests;

use App\Libs\Datamap;
use App\User;
use Illuminate\Foundation\Http\FormRequest;

class CreateUserFormRequest extends FormRequest
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
                'unique:users,email',
            ],
            'language' => [
                'optional',
                'in:' . Datamap::getAppLanguages()->pluck('locale')->implode(','),
            ],
            'admin' => [
                'optional'
            ]
        ];
    }
}
