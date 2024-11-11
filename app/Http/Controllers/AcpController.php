<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcpController extends Controller
{   

    public function index(Request $request)
    {
        return view('home');
    }

    public function acp(Request $request){
        return view('dashboardacp');
    }
}
 