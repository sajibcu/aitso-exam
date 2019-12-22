<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;
use App\Usrs;

class PersonController extends Controller
{
    //
     public function index(Request $request)
    {
       

        if(isset($request->id_no) && $request->id_no != ''){
            $persons = Person::orderBy('id','desc')->where('id_no', $request->id_no)->get();
        } else if(isset($request->name) && $request->name != ''){
            $persons = Person::orderBy('id','desc')->where('name', $request->name)->get();
        }else if(isset($request->rank) && $request->rank != ''){
            $persons = Person::orderBy('id','desc')->where('rank', $request->rank)->get();
        }else {
            $persons = Person::orderBy('id','desc')->get();
        }

        
    	return view('persons')->with('persons',$persons);
    }

    public function add_employee()
    {
    	return view('employee');
    }
    public function store_employee(Request $request){

    	/*$request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
        ]);*/
        $file = $request->file('photo');
        $persons = new Person();
        $persons->id_no = $request->id_no;
        $persons->name = $request->name;
        $persons->rank = $request->rank;
        $persons->appointment = $request->appointment;
        $persons->blood_grop = $request->blood_grop;
        $persons->height = $request->height;
        $persons->weight = $request->weight;
        $persons->identification_marks = $request->identification_marks;
        $persons->present_address = $request->present_address;
        $persons->permanent_address = $request->permanent_address;
        $persons->photo ='NA';

        if(!is_null($file)) {
	        $file_name = rand(10,1000).$file->getClientOriginalName();
	        $persons->photo =$file_name;
	        $destinationPath = 'uploads';
	        $file->move($destinationPath,$file_name);
    	}

        $persons->save();



    	$persons = Person::orderBy('id','desc')->get();
    	return view('persons')->with('persons',$persons);
    }

    
}
