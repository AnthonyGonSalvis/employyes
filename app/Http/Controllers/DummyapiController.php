<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DummyapiController extends Controller
{
    //
    public function getdata(){
    	return ["name"=>"Priyam","email"=>"priyam@gmail.com","password"=>"12345678"];
    }
}
