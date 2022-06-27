<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Storerequest extends FormRequest
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
            'name' => 'required|string',
            'phone'=>'required|string|min:10|max:20',
            'address'=> 'required|string',
            'subject'=> 'required|string',
            'comments'=> 'required|string',
            'message'=> 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'name field is required',
            'phone.min'=>'minimum characters is 10',
            'phone.required'=>'phone field is required',
            'subject.required'=>'subject field is required',
            'added.required'=>'added field is required',
            'comments.required'=>'comments field is required',
            'message.required'=>'message field is required',
        ];

    }
}
