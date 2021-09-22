<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class bookRequest extends FormRequest
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
            'name' => 'required|min:3|max:100',
            'writer' => 'required|min:3|max:100',
            'prix' => 'required',
            'stock' => 'required',
            //'image' => 'required',
            'category' => 'required',
            'date' => 'required',
            'summary' => 'required|min:5|max:200'

        ];
    }
}
