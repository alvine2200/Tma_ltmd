<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Application;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

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

        return redirect('admin_dashboard')->with('success','Welcome to Admin Dashboard'.$user->name);
       }       
       else
       {
        return redirect('/login')->withErrors('fail','403!, Not Authorized to access admin dashboard');
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

    public function delete_applications(Application $application,$id)
    {
        $application->delete($id);
        return back()->with('deleted','Application Deleted successfully');
    }

    public function approve_application(Application $application,$id)
    {
        $application=Application::find($id);
        $application->update([
            'status'=>'approved',
        ]);

        return back()->with('success','Approved successfully');
    }

}
