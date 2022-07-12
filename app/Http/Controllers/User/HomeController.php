<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Models\ApprovedModel;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $model_index=ApprovedModel::paginate(6);
        return view ('user.index',compact('model_index'));
        
    }



}
