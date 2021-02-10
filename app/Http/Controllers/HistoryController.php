<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function home($c){
        $email = 'tonmoy@gmail.com';
        $e = array('peter','ben','joe');
        return view('history',['email' => $email, 'category' => $c, 'emps' => $e]);
    }
}
