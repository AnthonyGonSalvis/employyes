@extends('dblayout.dbheader')
@section('content')
 <div class="app-wrapper">   
	<div class="app-content pt-3 p-md-3 p-lg-4">
		<div class="container">
	            <div class="row">
		            <div class="col-sm-12">
                 
			            <form method="post" action="{{route('slider.update',$addslide->id)}}"  enctype="multipart/form-data">
			              @csrf
                    @method('PUT')
                          <div class="row g-3">
                            
                            <div class="col">
                            <label for="exampleFormControlFile1"><h5>{{__('Choose Image')}}</h5></label>
                            <input type="file" class="form-control-file mb-4" id="images" name="images" accept="image/jpeg,image/png,image/jpg" >
                            <img src="{{asset('sliderimages/'.$addslide->images)}}" style="height: 70px; width: 100px; margin-top: 3px;">
                          </div>
                           
                          </div>
                          <button type="submit" class="btn text-white" style="background-color: #E43B3B;">Submit</button>
                        </form>

                    </div>
		        </div>
	    </div>
	</div>
 </div>		
@endsection