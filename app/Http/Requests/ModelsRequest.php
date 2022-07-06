<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ModelsRequest extends FormRequest
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
            'photo'=>'required|mimes:jpeg,jpg,png,gif|required|max:10240',
            'fullname'=>'required|string',
            'weight'=>'required|string',
            'height'=>'required|string',
            'burst_chest'=>'required|string',
            'shoe_size'=>'required|string',
            'hair_color'=>'required|string',
            'complexions'=>'required|string',
            'category'=>'required|string',
            'instagram'=>'required|string',
            'tiktok'=>'required|string',
            'experience'=>'required|string',
            'hips'=>'required|string',
        ];
    }
}
