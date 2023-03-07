<?php

namespace App\Http\Controllers;

use App\Models\Testinomial;
use Illuminate\Http\Request;

class TestinomialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $testi = Testinomial::get();
        return view('crud.testinomial.test',compact('testi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('crud.testinomial.add');
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
        $testi = new Testinomial();
           $validated = $request->validate([
               // 'image' =>'required',
               'text' =>'required|max:300',
               'name' =>'required|max:50',
               'designation' =>'required|max:40',
            ]);

         
         if($request->hasfile('image'))
            {
                $file=$request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename= time().'.'.$extension;
                $file->move('testimages/',$filename);
                $testi->image = $filename;
            }
         $testi->text =  $request->text;
         $testi->name =  $request->name;
         $testi->designation =  $request->designation;
         // dd($testi);
         $testi->save();
         return redirect()->route('testinomial.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testinomial  $testinomial
     * @return \Illuminate\Http\Response
     */
    public function show(Testinomial $testinomial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testinomial  $testinomial
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $addtest = Testinomial::find($id);
        return view('crud.testinomial.edit',compact('addtest'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testinomial  $testinomial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
         $addtest = Testinomial::find($id);
        if($request->hasfile('image'))
            {
                $destination='testimages/'.$addtest->image;
                if(File::exists($destination))
                {
                    File::delete($destination);
                }
                $file=$request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename= time().'.'.$extension;
                $file->move('testimages/',$filename);
                $addtest->image = $filename;
            }
         $addtest->text =  $request->text;
         $addtest->name =  $request->name;
         $addtest->designation =  $request->designation;
         $addtest->save();
         return redirect()->route('testinomial.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testinomial  $testinomial
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $addtest  = Testinomial::find($id)->delete();
        if($addtest == true){
            $message = "Deleted successfully.";
            return redirect()->route('testinomial.index');
        }
    }
}
