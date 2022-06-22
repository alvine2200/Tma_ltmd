<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModelsController extends Controller
{
    public function models()
    {
        return view ('user.models');
    }

    public function individual()
    {
        return view ('user.individualmodel');
    }

    public function apply()
    {
        return view('user.apply');
    }

    public function contact()
    {
        return view('user.contact');
    }



}
