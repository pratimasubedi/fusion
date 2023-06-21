<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;
use Hash;
use App\Admin;


class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('admin.dashboard');
    }
    public function showChangePassword()
    {
        return view('admin.changepassword.changepassword');
    }
    
    public function ChangePassword(Request $request)
    {

        $admin = Admin::find(1);
        // dd($admin);

        if(Hash::check(Input::get('oldPassword'), $admin['password']) && Input::get('newPassword') == Input::get('password_confirmation')){
            $admin->password = bcrypt(Input::get('newPassword'));
            $admin->save();

            $request->session()->flash('success', 'Password changed');
            return redirect()->route('admin.changepassword');
        }else
        {
            $request->session()->flash('success', 'Password not changed');
            return redirect()->route('admin.changepassword');
        }


    }
}
