<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Applicationrequest extends FormRequest
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
            'fullname'=>'required|string',
            'nickname'=>'required|string',
            'email'=>'required|email',
            'phone'=>'required|string|min:10',
            'dob'=>'required|string',
            'location'=>'required|string',
            'instagram'=>'required|string',
            'gender'=>'required|string',


            'eye'=>'required|string',
            'hair'=>'required|string',
            'complexion'=>'required|string',
            'shoe'=>'required|string',
            'hairlength'=>'required|string',
            'hips'=>'required|string',
            'waist'=>'required|string',
            'burst'=>'required|string',
            'height'=>'required|string',
            'measurement_time'=>'required|string',


            'headshot'=>'mimes:jpeg,png,jpg,gif,svg|max:10240', //file
            'fullbody'=>'mimes:jpeg,png,jpg,gif,svg|max:10240', //file
            'sideway'=>'mimes:jpeg,png,jpg,gif,svg|max:10240',  //file

            'experience'=>'required|string',
            'hobbies'=>'required|string',
            'venture'=>'required|string',
            'goal'=>'required|string',
            'passion'=>'required|string',
            'longest'=>'required|string',
            'professional'=>'required|string',
            'casual'=>'required|string',
            'workout'=>'required|string',
            'fitness'=>'required|string',
            'nude'=>'required|string',
            'swimsuit'=>'required|string',
            'fiveyears'=>'required|string',
            'favourite'=>'required|string',
            'physique'=>'required|string',
            'response'=>'required|string',
            'activities'=>'required|string',
            'prepare'=>'required|string',
            'director'=>'required|string',
            'hardest_shoot'=>'required|string',
            'give_up'=>'required|string',
            'describe_shoot'=>'required|string',
            'about_yourself'=>'required|string',
            'weakness'=>'required|string',
            'overcome'=>'required|string',
            'skin_show'=>'required|string',
            'personalities'=>'required|string',
            'communication'=>'required|string',
            'arrogancy'=>'required|string',
            'critism'=>'required|string',
            'comments'=>'required|string',
            'why'=>'required|string',
            'unique'=>'required|string',
            'speciality'=>'required|string',
            'name_of_agency'=>'required|string',
            'piercing'=>'required',
            'tatoos'=>'required|string',
            'scars'=>'required|string',
            'enhancement'=>'required|string',
            'manager'=>'required|string',
            'work'=>'required|string',
            'studying'=>'required|string',
            'schedule'=>'required|string',
            'availability'=>'required|string',
            'travelling'=>'required|string',
            'acting'=>'required|string',
            'training'=>'required|string',
            'relationship'=>'required|string',
            'active'=>'required|string',
            'whatsapp'=>'required|string',
            'confidence'=>'required|string',
            'registered'=>'required|string',
            'category'=>'required|string',

            'review'=>'required|string',
            'fee'=>'required|string',
            'contract'=>'required|string',
            'terms'=>'required|string',

        ];
    }
}
