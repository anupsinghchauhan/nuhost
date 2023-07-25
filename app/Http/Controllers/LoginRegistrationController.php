<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Hash;
use Session;

class LoginRegistrationController extends Controller
{
    public function index()
    {
        return view('login');
    }  
      
    public function validateLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')->withSuccess('Signed in');
        }
  
        return redirect("login")->withError('Login details are not valid');
    }

    public function registration()
    {
        return view('registration');
    }
      
    public function validateRegistration(Request $request)
    {  
        $request->validate([
            'firstname' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
        
        try {
            
            User::create([
                'firstname' => $request->input('firstname'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password'))
            ]);

            return redirect("login")->withSuccess('Congratulations, your account has been successfully created.Please Login.');

        } catch (\Exception $e) {

            toastr()->error($e->getMessage());
            return redirect("login");
        }
        
        
    }
  
    
    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard');
        }
  
        return redirect("login")->withError('Please login and try again.');
    }
    
    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }
}
