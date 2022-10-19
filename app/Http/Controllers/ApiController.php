<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Api;

class ApiController extends Controller
{
    //
    function show($id=null)

    {
       return $id?Api::find($id):Api::all();
    }
    function add(Request $req)
    {
    	$data = new Api;
    	$data->name=$req->name;
    	$data->email=$req->email;
    	$data->password=$req->password;
    	$data->address=$req->address;
    	$result=$data->save();
    	if($result){
    	    return ["result"=>"done"];
        }
        else{
        	return ["result"=>"not saved"];
        }
    }

    function update(Request $req)
    {
    	$device= Api::find($req->id);
    	$device->name=$req->name;
    	$device->email=$req->email;
    	$device->password=$req->password;
    	$device->address=$req->address;
    	//dd("hello");
    	$result=$device->save();
    	if($result){
    	    return ["result"=>"updated"];
        }
        else{
        	return ["result"=>"not updated"];
        }
    }

    function delete($id)
    { 
    	$device= Api::find($id);
    	$result=$device->delete();
    	if($result)
    	{
    	return["result"=>"record deleted"];
        }
        else
        {
        return ["result"=>"not deleted"];
        }
    }
}
