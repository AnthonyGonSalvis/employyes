<?php

namespace App\Http\Controllers;

use App\Models\footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $foot = footer::get();
        return view('crud.footer_section.footers',compact('foot'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('crud.footer_section.add');
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
        $foot = new footer();
           $validated = $request->validate([
               // 'image' =>'required',
               'paragraph' =>'required|max:100',
               // 'description' =>'required|max:200',
               // 'button_text' =>'required|max:20',
               // 'button_link' =>'required|max:30',
            ]);
 
         
         $foot->paragraph =  $request->paragraph;
         $foot->save();
         return redirect()->route('foots.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function show(footer $footer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $addfoot = footer::find($id);
        return view('crud.footer_section.edit',compact('addfoot'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $addfoot = footer::find($id);
        
         $addfoot->paragraph =  $request->paragraph;
         
         $addfoot->save();
         return redirect()->route('foots.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $addfoot  = footer::find($id)->delete();
        if($addfoot == true){
            $message = "Deleted successfully.";
            return redirect()->route('about.index');
        }
    }
}
