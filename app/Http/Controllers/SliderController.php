<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use File;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $slider = Slider::get();
        return view('crud.slider.slider',compact('slider'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('crud.slider.addslider');
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
        $slider = new Slider();
           $validated = $request->validate([
               'images' =>'required',
            ]);

         
         if($request->hasfile('images'))
            {
                $file=$request->file('images');
                $extension = $file->getClientOriginalExtension();
                $filename= time().'.'.$extension;
                $file->move('sliderimages/',$filename);
                $slider->images = $filename;
            }
            $slider->save();
         return redirect()->route('slider.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $addslide = Slider::find($id);
        return view('crud.slider.editslide',compact('addslide'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
         $addslide = Slider::find($id);
        if($request->hasfile('images'))
            {
                $destination='sliderimages/'.$addslide->images;
                if(File::exists($destination))
                {
                    File::delete($destination);
                }
                $file=$request->file('images');
                $extension = $file->getClientOriginalExtension();
                $filename= time().'.'.$extension;
                $file->move('sliderimages/',$filename);
                $addslide->images = $filename;
            }
         $addslide->save();
         return redirect()->route('slider.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $addslide  = Slider::find($id)->delete();
        if($addslide == true){
            $message = "Deleted successfully.";
            return redirect()->route('about.index');
        }
    }
}
