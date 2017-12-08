<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DefaultController extends Controller
{
    //
    public function login(){
        return view('index');
    }

    public function loginPost(Request $request){
        return $request->all();
    }
}
