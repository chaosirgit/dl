<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use App\Http\Controllers\Controller;

class DefaultController extends Controller
{
    function login()
    {
        return view('index');
    }
}
