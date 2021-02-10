<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
class LayoutController extends Controller
{
    
    public function charts(){
        return view('website.pages.charts');
    }
    public function tables(){
        return view('website.pages.tables');
    }
    public function login(){
        if(Session::has('username')){
            return redirect() -> to('dashboard');
        }
        return view('website.pages.login');
    }
    public function register(){
        if(Session::has('username')){
            return redirect() -> to('dashboard');
        }
        return view('website.pages.register');
    }
}
