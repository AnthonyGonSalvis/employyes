<?php

namespace App\Http\Controllers;

use App\Models\Counter;
use Illuminate\Http\Request;

class CounterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $count = Counter::get();
        return view('crud.counter.counter',compact('count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('crud.counter.addcounter');
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
        $count = new Counter();
           $validated = $request->validate([
               'icon' =>'required|max:100',
               'number' =>'required|max:200',
               'text' =>'required|max:20',
            ]);
         $count->icon =  $request->icon;
         $count->number =  $request->number;
         $count->text =  $request->text;
         //dd($about);
         $count->save();
         return redirect()->route('counter.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Counter  $counter
     * @return \Illuminate\Http\Response
     */
    public function show(Counter $counter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Counter  $counter
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $addcount = Counter::find($id);
        return view('crud.counter.edit',compact('addcount'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Counter  $counter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $addcount = Counter::find($id);
         $addcount->icon =  $request->icon;
         $addcount->number =  $request->number;
         $addcount->text =  $request->text;
         $addcount->save();
         return redirect()->route('counter.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Counter  $counter
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $addcount  = Counter::find($id)->delete();
        if($addcount == true){
            $message = "Deleted successfully.";
            return redirect()->route('counter.index');
        }
    }
}
