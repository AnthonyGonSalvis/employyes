<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employees;
use App\Models\About;
use App\Models\Slider;
use App\Models\Services;
use App\Models\Testinomial;
use App\Models\Portfolio;
use App\Models\Counter;
use App\Models\Values;
use App\Models\clients;
use App\Models\Contact;
use App\Models\Message;


class IndexController extends Controller
{
    //
    public function index()
     {
     	$employees = Employees::get();
     	$about = About::get();
     	$slider = Slider::get();
     	$service = Services::get();
     	$testi = Testinomial::get();
     	$portfo = Portfolio::get();
        $count = Counter::get();
        $val = Values::get();
        $clt = clients::get();
        $contact = Contact::get();
     	return view('tempindex.index',compact('employees','about','slider','service','testi','portfo','count','val','clt','contact'));
     }
     public function contact(Request $request) {
      $message = new Message();
        
            $message->name =  $request->name;
            $message->email = $request->email;
            $message->subject = $request->subject;
            $message->message = $request->message;
            // dd($contact);
                     
            $message->save();
            return redirect()->route('/indexhome');
}
}
