<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable=[
        'fullname',
        'nickname',
        'email',
        'phone',
        'dob',
        'location',
        'instagram',
        'gender',

        'eye',
        'hair',
        'complexion',
        'shoe',
        'hairlength',
        'hips',
        'waist',
        'burst',
        'height',
        'measurement_time',

        'headshot',
        'fullbody',
        'sideway',

        'experience',
        'hobbies',
        'venture',
        'goal',
        'passion',
        'longest',
        'professional',
        'casual',
        'workout',
        'fitness',
        'nude',
        'swimsuit',
        'fiveyears',
        'favourite',
        'physique',
        'response',
        'activities',
        'prepare',
        'director',
        'hardest_shoot',
        'give_up',
        'describe_shoot',
        'about_yourself',
        'weakness',
        'overcome',
        'skin_show',
        'personalities',
        'communication',
        'arrogancy',
        'critism',
        'comments',
        'why',
        'unique',
        'speciality',
        'name_of_agency',
        'piercing',
        'tatoos',
        'scars',
        'enhancement',
        'manager',
        'work',
        'studying',
        'schedule',
        'availability',
        'travelling',
        'acting',
        'training',
        'relationship',
        'active',
        'whatsapp',
        'confidence',
        'registered',
        'category',

        'review',
        'fee',
        'contract',
        'terms',
        'projects',

    ];

    protected $table='applications';
}
