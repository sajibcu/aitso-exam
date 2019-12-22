<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Usrs;

class Page_controller extends Controller
{
    //
     public function index()
    {
    	return view('welcome');
    } 

    public function add_user()
    {
    	return view('user');
    }

     public function login(Request $request)
    {
    	$users = Usrs::orderBy('id','desc')->where('email', $request->email)
    										->where('password', $request->password)->first();
    	if(isset($users)) {
    		$request->session()->put('user_type', $users->role);
    		$request->session()->put('email', $users->email);
    	}

    	/*if($request->email=='admin@gmail.com') {
    		$request->session()->put('user_type', 'admin');
    		$request->session()->put('email', $request->email);
    	}else {
    		$request->session()->put('user_type', 'user');
    		$request->session()->put('email', $request->email);
    	}*/

    	return view('welcome');
    }

    function logout(Request $request)
    {
    	$request->session()->forget('user_type');
    	$request->session()->forget('email');

    	return view('welcome');
    }

    public function user_store(Request $request){

        $persons = new Usrs();
        $persons->email = $request->email;
        $persons->password = $request->password;
        $persons->role = $request->role;
        

        $persons->save();

        return view('welcome');
    }
}
