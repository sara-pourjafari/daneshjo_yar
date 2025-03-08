<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index (){
return view('layouts.index');
    }
    public function FormRegister(){
        return view('students.register');
    }

    public function Register(request $request){
      
    
  dd('ok');

       
    }

}
 