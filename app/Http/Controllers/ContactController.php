<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Contact;
use \App\Jointeam;

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
      // dd($request);
      Jointeam::create($request->all());
      return redirect()->back()->with('success','Thank You ! We will get back to you soon');
    }

    public function reachus(Request $request){
      // dd($request);
      Contact::create($request->all());
      return redirect()->back()->with('success','Thank You ! We will get back to you soon');

    }
}
