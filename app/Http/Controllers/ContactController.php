<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $contact = Contact::get();
        return view('crud.contact.contactus',compact('contact'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('crud.contact.addcontact');
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
        $contact= new Contact();
           $validated = $request->validate([
               'icon' =>'required',
               'heading' =>'required|max:100',
               'text' =>'required|max:200',
            ]);

         
         $contact->icon = $request->icon;
         $contact->heading =  $request->heading;
         $contact->text =  $request->text;
         // dd($contact);
         $contact->save();
         return redirect()->route('contacts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
         $addcontact = Contact::find($id);
        return view('crud.contact.editcontact',compact('addcontact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
         $addcontact = Contact::find($id);
         $addcontact->icon =  $request->icon;
         $addcontact->heading =  $request->heading;
         $addcontact->text =  $request->text;
         $addcontact->save();
         return redirect()->route('contacts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
