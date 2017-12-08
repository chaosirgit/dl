<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DefaultController extends Controller
{
    //
    public function login(){
        return view('admin/login');
    }

    public function loginPost(Request $request){
        return $request->all();
    }

    public function index(){
        return view('admin/index');
    }

    public function main(){
        return view('admin/main');
    }

    public function form(){
        return view('admin/form');
    }
}
