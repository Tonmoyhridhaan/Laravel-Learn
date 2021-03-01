<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;

class StudentController extends Controller
{
    public function create(){
        return view('studentCreate');
    }
    
    public function store(Request $req){
        $validated = $req->validate([
            'name' => 'required|alpha',
            'email' => 'required|email|unique:students,email',
            'salary' => 'required|integer',
            'age' => 'required|integer',
            'dob' => 'required|date'
        ]);

        $obj = new Students();

        $obj->name = $req->name;
        $obj->email = $req->email;
        $obj->salary = $req->salary;
        $obj->age = $req->age;
        $obj->dob = $req->dob;

        if($obj->save()){
            echo 'Successfully inserted';
        }

    }
}
