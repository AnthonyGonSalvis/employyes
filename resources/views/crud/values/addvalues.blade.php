@extends('dblayout.main')
@section('content')
 <div class="app-wrapper">   
	<div class="app-content pt-3 p-md-3 p-lg-4">
		<div class="container">
	            <div class="row">
		            <div class="col-sm-12">
                 
			            <form method="post" action="{{route('values.store')}}"  enctype="multipart/form-data">
			              @csrf
                          <div class="row g-3">
                            <div class="col">
                              <label for="Image"><h5>{{__('Choose Image')}}</h5></label><br>
                              <input type="file" class="form-control-file mb-4" name="image" accept="image/jpeg,image/png,image/jpg">
                              <small class="text-danger">@error('image') {{ $message }} @enderror</small>
                            </div>
                            <div class="col">
                             <label for="heading" class="form-label"><h5>{{__('Heading')}}</h5></label>
                             <input type="text" class="form-control mb-4" id="heading" placeholder="Enter heading" name="heading" >
                             <small class="text-danger">@error('heading') {{ $message }} @enderror</small>
                            </div>
                          </div>

                          <div class="row g-3">
                            <div class="col">
                             <label for="content" class="form-label"><h5>{{__('Content')}}</h5></label>
                             <input type="text" class="form-control mb-4" id="content" placeholder="Enter description" name="content" >
                             <small class="text-danger">@error('content') {{ $message }} @enderror</small>
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