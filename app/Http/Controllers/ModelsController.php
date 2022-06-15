<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModelsController extends Controller
{
    public function models()
    {
        return view ('User.models');
    }
}
