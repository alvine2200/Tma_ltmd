<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\Storerequest;

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

    public function contact_form(Storerequest $request, Contact $contact){
       
        $validated=$request->validated();
        $contact::firstOrCreate($validated);

        return back()->with('success','Form is successfully sent, Thank you');

    }



}
