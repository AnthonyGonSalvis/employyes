<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use File;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $about = About::get();
        return view('crud.about.about',compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('crud.about.addabout');
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
        $about = new About();
           $validated = $request->validate([
               'image' =>'required',
               'heading' =>'required|max:100',
               'description' =>'required|max:200',
               'button_text' =>'required|max:20',
               'button_link' =>'required|max:30',
            ]);

         
         if($request->hasfile('image'))
            {
                $file=$request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename= time().'.'.$extension;
                $file->move('abimages/',$filename);
                $about->image = $filename;
            }
         $about->heading =  $request->heading;
         $about->description =  $request->description;
         $about->button_text =  $request->button_text;
         $about->button_link =  $request->button_link;
         //dd($about);
         $about->save();
         return redirect()->route('about.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about,$id)
    {
        //
         $addabout = About::find($id);
        return view('crud.about.edit',compact('addabout'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about,$id)
    {
        //
        $addabout = About::find($id);
        if($request->hasfile('image'))
            {
                $destination='addimages/'.$addemp->image;
                if(File::exists($destination))
                {
                    File::delete($destination);
                }
                $file=$request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename= time().'.'.$extension;
                $file->move('addimages/',$filename);
                $addabout->image = $filename;
            }
         $addabout->heading =  $request->heading;
         $addabout->description =  $request->description;
         $addabout->button_text =  $request->button_text;
         $addabout->button_link =  $request->button_link;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about,$id)
    {
        //
        $addabout  = About::find($id)->delete();
        if($addemp == true){
            $message = "Deleted successfully.";
            return redirect()->route('about.index');
        }
    }
}
