@extends('dblayout.main')
@section('content')
 <div class="app-wrapper">   
	<div class="app-content pt-3 p-md-3 p-lg-4">
		<div class="container">
	            <div class="row">
		            <div class="col-sm-12">
                 
			            <form method="post" action="{{route('testinomial.store')}}"  enctype="multipart/form-data">
			              @csrf
                          <div class="row g-3">
                            <div class="col">
                              <label for="exampleFormControlFile1"><h5>{{__('Choose Image')}}</h5></label><br>
                              <input type="file" class="form-control-file mb-4" name="image" accept="image/jpeg,image/png,image/jpg">
                              <small class="text-danger">@error('image') {{ $message }} @enderror</small>
                            </div>
                            <div class="col">
                             <label for="name" class="form-label"><h5>{{__('Text')}}</h5></label>
                             <input type="text" class="form-control mb-4" id="text" placeholder="Enter heading" name="text" >
                             <small class="text-danger">@error('text') {{ $message }} @enderror</small>
                            </div>
                          </div>

                          <div class="row g-3">
                            <div class="col">
                             <label for="description" class="form-label"><h5>{{__('Name')}}</h5></label>
                             <input type="text" class="form-control mb-4" id="name" placeholder="Enter description" name="name" >
                             <small class="text-danger">@error('name') {{ $message }} @enderror</small>
                            </div>
                            <div class="col">
                             <label for="mobile" class="form-label"><h5>{{__('Designation')}}</h5></label>
                             <select class="form-select" aria-label="Default select example" name="designation" id="designation">
                                <option hidden>Open this select menu</option>
                                <option value="Developer">Developer</option>
                                <option value="Designer">Designer</option>
                                <option value="Search Engine Optimization">Search Engine Optimization</option>
                                <option value="IOS">IOS</option>
                              </select> 
                             <small class="text-danger">@error('designation') {{ $message }} @enderror</small>
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