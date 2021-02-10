<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Session;
class AuthController extends Controller
{
    public function storeLogin(Request $req){
        $email = $req->email;
        $password = $req->password;
        $user = Employee::where('email','=',$email)
                  ->where('password','=',md5($password))
                  ->first();
        if($user){
            Session::put('username',$user->name);
            Session::put('userrole',$user->role);
            Session::put('userid',$user->id);
            return redirect()->to('dashboard');
        }
        else{
            return redirect()->back()->with('err_msg','Invalid email or password.');
        }

       
    }
    public function dashboard(){
        return view('website.pages.dashboard');
    }

    public function logout(){
        Session::forget('username','userrole');
        return redirect()->to('login');
    }

    public function admin1(){
        return view('admin.pages.admin');
    }

    public function teacher(){
        return view('teacher.pages.teacher');
    }

    public function teachers(){
        $teachers = Employee::where('role','=','teacher')
        ->get();

        return view('teacher.pages.teachers', compact('teachers'));
    }



    
}
