<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $faqs = Faq::get();
        //dd($faqs);
        return view('crud.faq.question',compact('faqs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('crud.faq.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $faqs= new Faq();
           $validated = $request->validate([
               'question' =>'required|max:100',
               'answer' =>'required|max:200',
            ]);

         
         $faqs->question = $request->question;
         $faqs->answer =  $request->answer;
       
         // dd($faqs);
         $faqs->save();
         return redirect()->route('faq.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $addfaq = Faq::find($id);
        return view('crud.faq.edit',compact('addfaq'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $addfaq = Faq::find($id);
         $addfaq->question =  $request->question;
         $addfaq->answer =  $request->answer;
         $addfaq->save();
         return redirect()->route('faq.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
         $addfaq  = Faq::find($id)->delete();
        if($addfaq == true){
            $message = "Deleted successfully.";
            return redirect()->route('faq.index');
        }
    }
}
