<?php

namespace App\Http\Controllers;

use App\Models\Values;
use Illuminate\Http\Request;

class ValuesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $val = Values::get();
        return view('crud.values.value',compact('val'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('crud.values.addvalues');
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
        $val = new Values();
           $validated = $request->validate([
               'image' =>'required|dimensions:min_width=500,min_height=500,max_width=1680,max_height=800',
               'heading' =>'required|max:300',
               'content' =>'required|max:50',
            ]);

         
         if($request->hasfile('image'))
            {
                $file=$request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename= time().'.'.$extension;
                $file->move('valuesimages/',$filename);
                $val->image = $filename;
            }
         $val->heading =  $request->heading;
         $val->content =  $request->content;
         // dd($testi);
         $val->save();
         return redirect()->route('values.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Values  $values
     * @return \Illuminate\Http\Response
     */
    public function show(Values $values)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Values  $values
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $addval = Values::find($id);
        return view('crud.values.editvalue',compact('addval'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Values  $values
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $addval = Values::find($id);
        if($request->hasfile('image'))
            {
                $destination='valuesimages/'.$addval->image;
                if(File::exists($destination))
                {
                    File::delete($destination);
                }
                $file=$request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename= time().'.'.$extension;
                $file->move('valuesimages/',$filename);
                $addval->image = $filename;
            }
         $addval->heading =  $request->heading;
         $addval->content =  $request->content;
         $addval->save();
         return redirect()->route('values.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Values  $values
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $addval  = Values::find($id)->delete();
        if($addval == true){
            $message = "Deleted successfully.";
            return redirect()->route('values.index');
        }
    }
}
