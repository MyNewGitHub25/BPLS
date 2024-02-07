<?php

namespace App\Http\Controllers;

use App\Models\Login;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

class LoginController extends Controller
{   
    public function Login(Login $login)
    {
        return view('auth/Login');
    }
    public function LoginValidation(request $request)
    {
        $request->validate([
            'email'=>'required|string',
            'password'=>'required|min:5|max:12'
        ]);
        
        if(Auth::guard('users')->attempt(['username' => $request->email, 'password' => $request->password],$request->get('remember'))){
            $targ_url = redirect()->intended()->getTargetUrl();
            $url = (str_contains($targ_url, 'login')) ? $targ_url : $targ_url.'/login';
            dd($url);
            // return ['message' => 'Access granted! Please wait.','url' => $url];
        }
        else {
            return response()->json(['message' => "The given data was invalid.", 'errors' => ['username' => ['These credentials do not match our records']]]);
        }
    }
}
