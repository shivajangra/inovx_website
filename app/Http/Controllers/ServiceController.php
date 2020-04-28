<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{

    public function index($id)
    {
        return view('service_detail',compact('id'));
    }

}
