<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
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
        return [
            'name'      => 'required',
            'email'     => 'required|email',
            'url'       => 'nullable|url',
            'comment'   => 'required|min:10',
        ];
    }


    public function messages()
    {
        return [
            'name.required' =>'Name is Required',
            'email.required' =>'Email is Required' ,
            'url.required' =>'Url is Required',
            'comment.required' =>'Comment is Required',




        ];
    }
}
