<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Photo;
use App\Models\Application;
use Illuminate\Http\Request;
use App\Models\ApprovedModel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function admin_dashboard()
    {
        return view('admin.dashboard');
    }

    public function login_admin()
    {
        return view('admin.login');
    }

    public function login_logic(Request $request)
    {
       $credentials = $request->only('email','password');

       if(Auth::attempt($credentials))
       {
        $user=auth()->user();
        Auth::login($user);

        return redirect('admin_dashboard')->with('success','Welcome to Admin Dashboard',''.$user->name);
       }
       else
       {
        return redirect('/login')->with('fail','403! Not Authorized to access admin dashboard');
       }

    }

    public function logout_admin()
    {
        $user=Auth::user();
        Auth::logout($user);

        return redirect('/login');
    }

    public function signup()
    {
        return view('admin.signup');
    }

    public function check_applications(Application $application)
    {
        auth()->user();
        $user=$application::paginate(15);
        return view('admin.applications',compact('user'));
    }

    public function delete_application(Application $application,$id)
    {
        $application::find($id)->delete();
        return back()->with('deleted','Application Deleted successfully');
    }

    public function approve_application(Application $application,$id)
    {
        $update=Application::find($id);
        $update->status='Approved';
        $update->update();

        return back()->with('success','Approved successfully');
    }

    public function approve($id)
    {
        $update=Application::find($id);
        $update->status='Approved';
        $update->update();

        return back()->with('success','Approved successfully');

    }
    public function disapprove($id)
    {
        $update=Application::find($id);
        $update->status='pending';
        $update->update();

        return back()->with('success','Disaproved successfully');

    }

    public function view_application($id)
    {
        $application=Application::find($id);

        return view('admin.viewapplication',compact('application'));
    }


    public function view_photo()
    {
        return view('admin.view_photos');
    }

    public function add_photo(Request $request)
    {
       $validator=Validator::make($request->all(),[
            'photo' =>'required|mimes:jpg,png,jpeg,gif,svg|max:10240',
            'fullname' =>'string',
        ]);

        if($validator->fails())
        {
            return back()->with('fail',$validator->errors());
        }

        $application=Application::where('fullname', $request->fullname)->first();

        if(!$application)
        {
            return back()->with('fail','Fullname not found! kindly check and try again');
        }

        if ($request->hasfile('photo')) {
            $file = $request->file('photo');
            $extension = $file->getClientOriginalname(); // getting image extension
            $photo = uniqid() . $extension;
            $file->move('imagemodels/photos/', $photo);

        }

        Photo::firstOrCreate([
            'fullname' => $application->fullname,
            'photo' => $photo
        ]);

        return back()->with('success','Photo Added successfully');


    }

    public function view_photo_table()
    {
        $photos=Photo::paginate(15);

        return view('admin.view_photos_table')->with('photos',$photos);
    }

    public function destroy_photo($id)
    {
        $photo=Photo::find($id);

        $photo->delete();

        return back()->with('success','Photo successfully deleted');
    }

    public function models_photo($id)
    {
        $photos=Photo::find($id);

        return view('admin.model',compact('photos'));

    }

    //start of crud models

    public function add_model()
    {
        return view('admin.addmodel');
    }

    public function store_model(Request $request)
    {
        $input = $request->all();
        $readyinput=collect($input)->except('photo','_token')->all();

        if ($request->hasfile('photo')) {
            $file = $request->file('photo');
            $extension =$file->getClientOriginalname(); // getting image extension
            $photo = uniqid() .  $extension;
            $file->move('imagemodels/photos/', $photo);
            $readyinput['photo'] = $photo;

        }

        ApprovedModel::firstOrCreate($readyinput);

        return back()->with('success','New model added successfully');
    }

    public function view_model()
    {
        $models=ApprovedModel::paginate(15);
        return view('admin.view_models')->with('models', $models)
                                        ->with('success','All approved models fetched');
    }

    public function edit($id)
    {
        $models=ApprovedModel::find($id);
        return view('admin.editmodel')->with('models', $models);
    }

    public function update_model(Request $request, $id)
    {
        $models=ApprovedModel::find($id);
        $input = $request->all();
        $readyinput=collect($input)->except('photo','_token','_method')->all();

        if ($request->hasfile('photo')) {
            $file = $request->file('photo');
            $extension =$file->getClientOriginalname(); // getting image extension
            $photo = uniqid() .  $extension;
            $file->move('imagemodels/photos/', $photo);
            $readyinput['photo'] = $photo;

        }
        elseif($request->hasfile('photo') == '' )
        {
            $readyinput['photo'] =$models->photo;
        }

        $models->update($readyinput);

        return redirect('view_models')->with('success', 'Model details updated successfully');
    }

    public function delete_model($id)
    {
        $models=ApprovedModel::find($id);
        $models->delete();
        return back()->with('success', 'Model deleted successfully');
    }


}
