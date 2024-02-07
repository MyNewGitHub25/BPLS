<?php

namespace App\Http\Controllers;

use App\Models\Login;
use App\Models\User;
use App\Models\Staff\Accounts;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

class LoginController extends Controller
{   
    public function Login(Login $login)
    {
        //Redirect login
        return view('staff/login');
    }
    public function Dashboard(request $request)
    {
        //Redirect welcome
        return view('/dashboard');
    }
    public function LoginValidation(request $request)
    {
        $request->validate([
            //fields required login
            'email'=>'required|string',
            'password'=>'required|min:5|max:12'
        ]);
        
        //Authentication from config guard with selection of username and password in database(staff_accounts)
        if(Auth::guard('staff')->attempt(['username' => $request->email, 'password' => $request->password],$request->get('remember'))){

            //Get target URL
            $targ_url = redirect()->intended()->getTargetUrl();
            $url = (str_contains($targ_url, 'dashboard')) ? $targ_url : $targ_url.'/dashboard';

            //Return controller response in javascrip login.js
            return ['message' => 'Your credentail is sucessfully validated!', 'url' => $url];

            // Clear specific session data
            session()->forget('key');

            // Or clear all session data
            session()->flush();
        }
        else {

            //Return controller response in javascrip login.js
            return response()->json(['message' => "The given data was invalid.", 'errors' => ['username' => ['These credentials do not match our records']]], 422);
        }
    }
}
