<?php

namespace App\Http\Requests;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class StorePeriodFormRequest extends FormRequest
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
            'start' => [
                'required',
                'after:' . Carbon::yesterday()->toDateString(),
               # 'date_format:' . trans('helpers.dateformat.php'),
            ],
            'end' => [
                'required',
                'gte:start',
               # 'date_format:' . trans('helpers.dateformat.php')

            ],
            'comment' => [
                'nullable',
                'string'
            ],
            'reason_id' => [
                'required',
                'integer',
                'exists:reasons,id'
            ],
        ];
    }
}