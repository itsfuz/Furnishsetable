<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    //

    public function goToRegisterPage(){

        return view('register');
    }

    public function RegisterAccount(Request $request){

        $rules = [

            'username' => 'required|unique:users',
            'email' => 'required|unique:users|email:dns',
            'password' => 'required|min:5|max:25',
            'confPassword' => 'same:password|required_with:password'
        ];

        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){

            return back()->withErrors($validator);
        }

        $user = new User();

        $user->username = $request->username;

        $user->email = $request->email;

        $user->password = bcrypt($request->password);

        $user->role = 'member';

        $user->save();

        return view('login')->with('notification', 'Account has been successfully created!');
    }

    public function UserLogin(Request $request){

        $data = [

            'username' => $request->input('username'),
            'password' => $request->input('password')

        ];

        $ValidationCheck = auth()->attempt($data);

        if($ValidationCheck){

            return redirect('home');
        }
        else{
            return back()->with('notification', 'Account Credentials Doesnt Match!');
        }

    }

    public function Logout(){

        auth()->logout();

        return view('login');
    }
}
