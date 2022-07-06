<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApprovedModel extends Model
{
    use HasFactory;

    protected $table='approved_models';

    protected $fillable=[
        'photo',
        'fullname',
        'weight',
        'height',
        'burst_chest',
        'shoe_size',
        'hair_color',
        'complexions',
        'category',
        'instagram',
        'tiktok',
        'experience',
        'hips',
    ];
}
