<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Advertiserrmodel;
use Auth;
class AuthController extends Controller
{
    public function login()
    {
        return view('frontend.auth.login');
    }

    public function register()
    {
        return view('frontend.auth.register');
    }

    public function loginCheck(Request $request)
    {
        $request->validate([
            'email'    => 'required|email|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',
            'password' => 'required|min:8'
        ]);
        // $remember_me = $request->has('remember_me') ? true : false;

        if (Auth::guard('advertiser')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('advertiser.index');
        } else {
            return redirect()->back()->with('error', 'Email id & password was invalid!');
        }
    }

    public function registerStore(Request $request)
    {
        $request->validate([
            'firstname' =>'required',
            'lastname' => 'required',
            'mobile' => 'required|numeric',
            'email' => 'required|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix|unique:advertiser',
            'password'=>'required|min:8',
            'confirm_password' => 'required|min:8|same:password',
            'company_name' => 'required',
            'company_address' => 'required',
            'billing_address' => 'required'
        ]);

        Advertiserrmodel::create($request->all());
        return redirect()->route('home')->with('message', 'Your account was created sucessfully.');
    }

    public function logout()
    {
        Auth::guard('advertiser')->logout();
        return redirect()->route('home');
    }
}
