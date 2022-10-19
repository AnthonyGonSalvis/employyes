<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $employees = Employees::get();
        return view('crud.employees.employees',compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('crud.employees.addemployees');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $employees = new Employees();
           $validated = $request->validate([
               'first_name' =>'required|max:40',
               'last_name' =>'required|max:20',
               'dob' =>'required|max:20',
               'mobile' =>'required|max:10|min:10',
               'email' =>'required|max:20',
               'password' =>'required|max:30',
               'address' =>'required|max:50',
               'education' =>'required|max:40',
               'designation' =>'required|max:50',
            ]);

         $employees->first_name =  $request->first_name;
         $employees->last_name =  $request->last_name;
         $employees->dob =  $request->dob;
         $employees->mobile =  $request->mobile;
         $employees->email =  $request->email;
         $employees->password =  $request->password;
         $employees->address =  $request->address;
         $employees->education =  $request->education;
         $employees->designation =  $request->designation;
         $employees->save();
         return redirect()->route('employees.index');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function show(Employees $employees)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function edit(Employees $employees,$id)
    {
        $addemp = Employees::find($id);
        return view('crud.employees.editemployees',compact('addemp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employees $employees, $id)
    {
        //
         $addemp = Employees::find($id);
         $addemp->first_name =  $request->first_name;
         $addemp->last_name =  $request->last_name;
         $addemp->dob =  $request->dob;
         $addemp->mobile =  $request->mobile;
         $addemp->email =  $request->email;
         $addemp->password =  $request->password;
         $addemp->address =  $request->address;
         $addemp->education =  $request->education;
         $addemp->designation =  $request->designation;
         $addemp->save();
         return redirect()->route('employees.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employees $employees,$id)
    {
         $addemp  = Employees::find($id)->delete();
        if($addemp == true){
            $message = "Deleted successfully.";
            return redirect()->route('employees.index');
        }
    }
}
