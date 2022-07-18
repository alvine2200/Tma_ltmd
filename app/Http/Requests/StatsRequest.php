<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StatsRequest extends FormRequest
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
            'followers' =>'required|string',
            'likes'=>'required|string',
            'posts'=>'required|string',
            'comments'=>'required|string',
            'gender'=>'required|string',
            'audience'=>'required|string',
            'age_range'=>'required|string',
        ];
    }
}
