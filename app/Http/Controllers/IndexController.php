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
use App\Models\Faq;
use App\Models\footer;
use App\Models\subscribe;


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
        $faqs = Faq::get();
        $mess = Message::get();
        $foot = footer::get();
        $subscribe = subscribe::get();
     	return view('tempindex.index',compact('employees','about','slider','service','testi','portfo','count','val','clt','contact','faqs','mess','foot','subscribe'));
     }

     public function blog()
     {  
        return view('tempindex.blogsvalue.blog');
     }

     public function contact(Request $request)
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
             $faqs = Faq::get();
             $foot = footer::get();
             $subscribe = subscribe::get();
           
            $message = new Message();
            $message->name =  $request->name;
            $message->email = $request->email;
            $message->subject = $request->subject;
            $message->message = $request->message;
            // dd($contact);   
            $message->save();
            
            // return "Your message has been sent";
            // return redirect()->back()->with("message","Your message has been sent");
            return view('tempindex.index',compact('employees','about','slider','service','testi','portfo','count','val','clt','contact','faqs','message','foot','subscribe'));
     }

    public function service(){
        $services = Services::get();
        $foot = footer::get();
        return view('crud.services.readmore',compact('services','foot'));
    }

    public function about(){
        $aboutus = About::get();
        $foot = footer::get();
        return view('crud.about.readmore',compact('aboutus','foot'));
    }
    public function link(){
        $portfoli = Portfolio::get();
        return view('crud.portfolio.link',compact('portfoli'));
    }
}
