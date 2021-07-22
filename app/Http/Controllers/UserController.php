<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\HASH;
use App\Models\User;
use Auth;
use Session;
class UserController extends Controller
{
    
    public function login()
    {
        return view('inc.login');
    }

    public function loginUsers(Request $request)
    {
        $request->validate([
            'email'         =>   'required|email',
            'password'       =>  'required|min:5|max:14',
        ]);
        
         $user = User::where(['email'=>$request->email])->first();

         if(!$user)
         {
             return back()->with('fail', 'We do not recognize you email address');
         }
         else
         {
            if(HASH::check($request->password,$user->password))
             {
                 $request->session()->put('userInfo' , $user->id);
                 return redirect('dashboard');
             }
             else
             {
                 return back()->with('fail', 'Incorrect password');
                 
             }
         }
        
    }
    public function Logout(Request $request)
    {
        // Auth::logout();
        // Session::flush();
        // return redirect('/');
        if(session()->has('userInfo'))
        {
            session()->pull('userInfo');
            return redirect('/');
        }
    }
}
