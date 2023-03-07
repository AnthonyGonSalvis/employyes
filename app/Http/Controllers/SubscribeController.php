<?php

namespace App\Http\Controllers;

use App\Models\subscribe;
use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $subscribe = subscribe::get();
        return view('crud.subscribeus.subscribes',compact('subscribe'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('crud.subscribeus.addsub');
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
        $subscribe = new subscribe();
           $validated = $request->validate([
     
               'heading' =>'required|max:100',
               'description' =>'required|max:200',
               
            ]);
 
       
         $subscribe->heading =  $request->heading;
         $subscribe->description =  $request->description;
         

         $subscribe->save();
         return redirect()->route('subs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\subscribe  $subscribe
     * @return \Illuminate\Http\Response
     */
    public function show(subscribe $subscribe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\subscribe  $subscribe
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $addsubscribe = subscribe::find($id);
        return view('crud.subscribeus.editsub',compact('addsubscribe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\subscribe  $subscribe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $addsubscribe = subscribe::find($id);
        
         $addsubscribe->heading =  $request->heading;
         $addsubscribe->description =  $request->description;
         
         $addsubscribe->save();
         return redirect()->route('subs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\subscribe  $subscribe
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $addsubscribe  = subscribe::find($id)->delete();
        if($addsubscribe == true){
            $message = "Deleted successfully.";
            return redirect()->route('subs.index');
        }
    }
}
