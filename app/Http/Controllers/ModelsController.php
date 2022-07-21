<?php

namespace App\Http\Controllers;

use App\Models\Stat;
use App\Models\Photo;
use App\Models\Contact;
use App\Models\BookModel;
use App\Models\Application;
use Illuminate\Http\Request;
use App\Models\ApprovedModel;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\Storerequest;
use App\Http\Requests\Applicationrequest;
use Illuminate\Support\Facades\Validator;

class ModelsController extends Controller
{
    public function model_view()
    {
        $models=ApprovedModel::all();
        return view ('user.models',compact('models'));
    }

    public function model_index()
    {
        $model_index=ApprovedModel::paginate(9);
        return view ('user.index',compact('model_index'));
    }


    public function individual(Request $request,$id)
    {
        $models=ApprovedModel::find($id);
        $individuals=Photo::where('fullname',$models->fullname)->get();
        return view ('user.individualmodel',compact('models','individuals'));
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

        if ($request->hasfile('headshot')) {
            $file = $request->file('headshot');
            $extension =$file->getClientOriginalname(); // getting image extension
            $headshot = uniqid() .  $extension;
            $file->move('uploads/photos/', $headshot);
            $readyinput['headshot'] = $headshot;

        }


        if ($request->hasfile('fullbody')) {
            $file = $request->file('fullbody');
            $extension=$file->getClientOriginalname(); // getting image extension
            $fullbody = uniqid() . $extension;
            $file->move('uploads/photos/', $fullbody);
            $readyinput['fullbody'] = $fullbody;

        }

        if ($request->hasfile('sideway')) {
            $file = $request->file('sideway');
            $extension = $extension =$file->getClientOriginalname();// getting image extension
            $sideway = uniqid() . $extension;
            $file->move('uploads/photos/', $sideway);
            $readyinput['sideway'] = $sideway;

        }

        $application::firstOrCreate($readyinput);

        return back()->with('success','Form submitted successfully');

    }

    public function butterflies()
    {
         $models=ApprovedModel::where('status','butterfly')->get();
         $data=Stat::first();

         return view('user.butterflies',compact('models','data'));

    }

    public function book_model()
    {
        return view('user.book_model');
    }

    public function booking_store(Request $request,BookModel $bookModel)
    {
        $validator=Validator::make($request->all(),[
            'name'=>'required|string',
            'when'=>'required|date',
            'where'=>'required|string',
            'category'=>'required|string',
            'phone'=>'required|string|min:10',
            'purpose'=>'required|string',
            'budget'=>'required|string',
            'models_name'=>'required|string',
            
        ]);

        if($validator->fails())
        {
            return back()->with('errors',$validator->errors());
        }

        $validated=$request->only('name','models_name','when','where','phone','purpose','budget','project_type','category');
        $bookModel::firstOrCreate($validated);
        return back()->with('success','Booking is successfully sent, wait for response');


    }

}
