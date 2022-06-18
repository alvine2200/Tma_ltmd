<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Time_Measurement extends Model
{
    use HasFactory;

    protected $fillable=['name'];

    protected $table='time_measurements';
}
