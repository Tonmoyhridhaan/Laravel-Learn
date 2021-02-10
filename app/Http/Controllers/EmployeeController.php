<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
class EmployeeController extends Controller
{
    public function index(){
        $employees = Employee::all();
        return view('admin.pages.employees',compact('employees'));
    }

    public function insert(){
        return view('admin.pages.insert');
    }
    public function store(Request $request){
        $name = $request->name;
        $email = $request->email;
        $password = md5($request->password);
        $gender = $request->gender;
        $isactive = $request->isactive;
        if(is_null($isactive)){
            $isactive=0;
        }
        $dob = $request->dob;
        $role = $request->role;

        $obj = new Employee();
        $obj->name = $name;
        $obj->email = $email;
        $obj->password = $password; 
        $obj->gender = $gender;
        $obj->is_active = $isactive;
        $obj->dob = $dob;
        $obj->role = $role;
        $obj->save();
        $employees = Employee::all();
        return view('admin.pages.employees',compact('employees'));

        //echo $isactive;

    }

    public function edit($id){
        //$employee = Employee::where('id','=',$id)->get();  //returns an array
        $employee = Employee::find($id); //returns an object
        return view('admin.pages.edit', compact('employee'));

    }

    public function teacher_edit($id){
        //$employee = Employee::where('id','=',$id)->get();  //returns an array
        $employee = Employee::find($id); //returns an object
        return view('teacher.pages.edit', compact('employee'));

    }

    public function update(Request $request, $id){

        $obj = Employee::find($id);
        $obj->name =$request->name;
        $obj->email =$request->email;
        $obj->gender = $request->gender;
        $obj->is_active = $request->isactive;
        if(is_null($obj->is_active)){
            $obj->is_active=0;
        }
        $obj->dob = $request->dob;
        $obj->role = $request->role;
        
         if($obj->save()){
             return redirect()->to('employees');
         }

    }

    public function update_teacher(Request $request, $id){

        $obj = Employee::find($id);
        $obj->name =$request->name;
        $obj->email =$request->email;
        $obj->gender = $request->gender;
        $obj->is_active = $request->isactive;
        if(is_null($obj->is_active)){
            $obj->is_active=0;
        }
        $obj->dob = $request->dob;
        
         if($obj->save()){
             return redirect()->to('teacher-edit/'.$id);
         }

    }

    public function delete($id){
        $obj = Employee::find($id);
        if($obj->delete()){
            return redirect()->to('employees');
        }
    }

    public function update_password(){

        return view('website.pages.updatepassword');
    }
    public function store_update_password(Request $request, $id){
        $obj = Employee::find($id);
        $pass0 = $obj->password;
        $pass1 = md5($request->password1);
        $pass2 = $request->password2;
        $pass3 = $request->password3;
        if(is_null($pass2)==1){
            return redirect()->back()->with('err1_msg','New password should not be empty');
        }
        else if(is_null($pass3)==1){
            return redirect()->back()->with('err1_msg','Retype new password should not be empty');
        }
        else if($pass0 != $pass1){
            return redirect()->back()->with('err1_msg','Old password does not match');
        }
        else if($pass2 != $pass3){
            return redirect()->back()->with('err1_msg','New passwords does not match');
        }
        else{
            
            $obj->password = md5($pass2);
            $obj->save();
            return redirect()->back()->with('suc_msg','Password Updated Successfully');
        }


    }
}
