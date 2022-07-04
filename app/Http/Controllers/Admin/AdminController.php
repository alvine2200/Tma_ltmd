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

}
