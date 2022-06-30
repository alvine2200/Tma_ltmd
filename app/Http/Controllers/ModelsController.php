<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Application;
use Illuminate\Http\Request;
use App\Http\Requests\Storerequest;
use App\Http\Requests\Applicationrequest;

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

    public function application_form(Applicationrequest $request, Application $application)
    {

        $input = $request->all();
        $readyinput=collect($input)->except('headshot', 'fullbody', 'sideway','_token')->all();

        $readyinput['sideway'] = $request->file('sideway')->store('sideway');
        $readyinput['fullbody'] = $request->file('fullbody')->store('fullbody');
        $readyinput['headshot'] = $request->file('headshot')->store('headshot');

        $application::firstOrCreate($readyinput);

        return back()->with('success','Form submitted successfully');

    }





}
