<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stat extends Model
{
    use HasFactory;

    protected $table='stats';
    
    protected $fillable=[
        'followers',
        'likes',
        'posts',
        'comments',
        'audience',
        'age_range',
        'gender',
    ];

    
}
