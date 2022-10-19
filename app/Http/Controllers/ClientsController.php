<?php

namespace App\Http\Controllers;

use App\Models\clients;
use Illuminate\Http\Request;
use File;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $clt = clients::get();
        return view('crud.clients.client',compact('clt'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('crud.clients.addclients');
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
        $clt = new clients();
           $validated = $request->validate([
               'image' =>'required',
            ]);

         
         if($request->hasfile('image'))
            {
                $file=$request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename= time().'.'.$extension;
                $file->move('clientsimages/',$filename);
                $clt->image = $filename;
            }
         // dd($testi);
         $clt->save();
         return redirect()->route('clients.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\clients  $clients
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\clients  $clients
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $addclt = clients::find($id);
        return view('crud.clients.editclients',compact('addclt'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\clients  $clients
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $addclt = clients::find($id);
        if($request->hasfile('image'))
            {
                $destination='clientsimages/'.$addclt->image;
                if(File::exists($destination))
                {
                    File::delete($destination);
                }
                $file=$request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename= time().'.'.$extension;
                $file->move('clientsimages/',$filename);
                $addclt->image = $filename;
            }
         $addclt->save();
         return redirect()->route('clients.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\clients  $clients
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $addclt  = clients::find($id)->delete();
        if($addclt == true){
            $message = "Deleted successfully.";
            return redirect()->route('clients.index');
        }
    }
}
