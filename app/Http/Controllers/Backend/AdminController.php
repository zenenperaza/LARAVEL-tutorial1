<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home(){
        return view('admin.index');
    } 

    public function login(){
        return view('admin.login');        
    }
}
