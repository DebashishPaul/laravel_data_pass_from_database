<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class studentControllers extends Controller
{
    public function students(){
    	$users=DB::select('select * from student');
    	return view('student',['users'=>$users]);
    }
}
