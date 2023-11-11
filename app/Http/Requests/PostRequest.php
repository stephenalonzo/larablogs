<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        $rules = [
            'title' => 'required|max:255',
            'description' => 'required',
            'category'  => 'required',
            'image' => ['mimes:png,jpg', 'max:5048']
        ];

        if (in_array($this->method(), ['POST']))
        {

            $rules['image'] = ['required', 'mimes:png,jpg', 'max:5048'];

        }

        return $rules;        

    }
}
