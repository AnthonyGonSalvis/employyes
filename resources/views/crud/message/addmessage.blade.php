@extends('dblayout.main')
@section('content')
 <div class="app-wrapper">   
	<div class="app-content pt-3 p-md-3 p-lg-4">
		<div class="container">
	            <div class="row">
		            <div class="col-sm-12">
                 
			            <form method="post" action="{{route('contacts.store')}}"  enctype="multipart/form-data">
			              @csrf
                          <div class="row g-3">
                            <div class="col">
                              <label for="icon" class="form-label"><h5>{{__('Choose Icon')}}</h5></label>
                             <input type="text" class="form-control mb-4" id="icon" placeholder="Enter icon" name="icon" >
                               <small class="text-danger">@error('icon') {{ $message }} @enderror</small>
                            </div>
                            <div class="col">
                             <label for="name" class="form-label"><h5>{{__('Heading')}}</h5></label>
                             <input type="text" class="form-control mb-4" id="heading" placeholder="Enter heading" name="heading" >
                             <small class="text-danger">@error('heading') {{ $message }} @enderror</small>
                            </div>
                          </div>

                          <div class="row g-3">
                            <div class="col">
                             <label for="text" class="form-label"><h5>{{__('Text')}}</h5></label>
                             <input type="text" class="form-control mb-4" id="text" placeholder="Enter description" name="text">
                             <small class="text-danger">@error('text') {{ $message }} @enderror</small>
                            </div>
                          </div>
                          <button type="submit" class="btn btn-primary text-white">Submit</button>
                        </form>

                    </div>
		        </div>
	    </div>
	</div>
 </div>		
@endsection