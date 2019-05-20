<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class studentControllers extends Controller
{
    public function students(){
    	$students=Student::all();
    	return view('student')->with('students',$student);
    }
}
