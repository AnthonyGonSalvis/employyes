<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use File;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $portfo = Portfolio::get();
        //dd($portfo);
        return view('crud.portfolio.port',compact('portfo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('crud.portfolio.addport');
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
        $portfo = new Portfolio();
           $validated = $request->validate([
               'image' =>'required',
               'text' =>'required|max:100',
               'name' =>'required|max:50',
            ]);

         
         if($request->hasfile('image'))
            {
                $file=$request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename= time().'.'.$extension;
                $file->move('testimages/',$filename);
                $portfo->image = $filename;
            }
         $portfo->text =  $request->text;
         $portfo->name =  $request->name;
        
         // dd($testi);
         $portfo->save();
         return redirect()->route('portfolios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio $portfolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $addport = Portfolio::find($id);
        return view('crud.portfolio.edit',compact('addport'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
         $addport = Portfolio::find($id);
        if($request->hasfile('image'))
            {
                $destination='portimages/'.$addport->image;
                if(File::exists($destination))
                {
                    File::delete($destination);
                }
                $file=$request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename= time().'.'.$extension;
                $file->move('portimages/',$filename);
                $addport->image = $filename;
            }
         $addport->text =  $request->text;
         $addport->name =  $request->name;
         $addport->save();
         return redirect()->route('portfolios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $addport  = Portfolio::find($id)->delete();
        if($addport == true){
            $message = "Deleted successfully.";
            return redirect()->route('portfolios.index');
        }
    }
    
}
