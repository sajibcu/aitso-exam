<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class page_controller extends Controller
{
    //
    public function index()
    {
    	return view('welcome');
    }
}
