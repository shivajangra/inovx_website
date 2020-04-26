<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function your_dream()
    {
          $services = array('Software Development',
                      'Digital Marketing',
                      'Data Analytics',
                      'AI Development',
                      'Network Security',
                      'BlockChain');
        return view('your_dream',compact('services'));
        // return view('your_dream',$services);
    }

    public function jointeam(Request $request){
      dd($request);
    }
    
    public function reachus(Request $request){
      dd($request);
    }
}
