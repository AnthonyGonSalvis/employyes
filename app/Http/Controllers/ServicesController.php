<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;
use File;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $service = Services::get();
        return view('crud.services.ser',compact('service'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('crud.services.addservices');
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
         $service = new Services();
           $validated = $request->validate([
               'icon' =>'required',
               'heading' =>'required|max:100',
               'description' =>'required|max:200',
               'button_text' =>'required|max:20',
               'button_link' =>'required|max:30',
            ]);

         
         $service->icon = $request->icon;
         $service->heading =  $request->heading;
         $service->description =  $request->description;
         $service->button_text =  $request->button_text;
         $service->button_link =  $request->button_link;
         //dd($about);
         $service->save();
         return redirect()->route('servicesemp.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function show(Services $services)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $addservice = Services::find($id);
        return view('crud.services.edit',compact('addservice'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $addservice = Services::find($id);
         $addservice->icon =  $request->icon;
         $addservice->heading =  $request->heading;
         $addservice->description =  $request->description;
         $addservice->button_text =  $request->button_text;
         $addservice->button_link =  $request->button_link;
         $addservice->save();
         return redirect()->route('servicesemp.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $addservice  = Services::find($id)->delete();
        if($addservice == true){
            $message = "Deleted successfully.";
            return redirect()->route('servicesemp.index');
        }
    }
}
