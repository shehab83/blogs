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

    public function rules()
    {
        return [
            'title' => 'required',
            'description' => 'required',
            'image_path' => 'required|mimes:png,jpg,jpe|max:5000',
        ];
    }

    public function messages()
    {
        return [
            'title.required' =>'Address is Required',
            'description.required' =>'description Required' ,
            'image_path.required' =>'The photo is Required',





        ];
    }
}
