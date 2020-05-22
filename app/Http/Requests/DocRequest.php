<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DocRequest extends FormRequest
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
            'subject' => 'required|unique:documents|max:255',
            'number' => 'required|unique:documents|max:255',
            'date' => 'required',
            'exporterReference' => 'required',
            'pageCount' => 'required',
        ];
    }
}
