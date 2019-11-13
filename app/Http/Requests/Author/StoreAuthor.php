<?php

namespace App\Http\Requests\Author;

use Illuminate\Foundation\Http\FormRequest;

class StoreAuthor extends FormRequest
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
            'first_name' => 'required|min:4',
            'last_name' => 'required|min:4',
            'email' => 'required|email',
            'phone' => 'required|min:7',
            'academic_title' => 'required'
        ];
    }
}
