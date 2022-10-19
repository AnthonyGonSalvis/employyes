@extends('dblayout.main')
@section('content')
 <div class="app-wrapper">   
	<div class="app-content pt-3 p-md-3 p-lg-4">
		<div class="container">
	            <div class="row">
		            <div class="col-sm-12">
                 
			            <form method="post" action="{{route('about.store')}}"  enctype="multipart/form-data">
			              @csrf
                          <div class="row g-3">
                            <div class="col">
                              <label for="exampleFormControlFile1"><h5>{{__('Choose Image')}}</h5></label><br>
                              <input type="file" class="form-control-file mb-4" name="image" accept="image/jpeg,image/png,image/jpg">
                              <small class="text-danger">@error('image') {{ $message }} @enderror</small>
                            </div>
                            <div class="col">
                             <label for="name" class="form-label"><h5>{{__('Heading')}}</h5></label>
                             <input type="text" class="form-control mb-4" id="heading" placeholder="Enter heading" name="heading" >
                             <small class="text-danger">@error('heading') {{ $message }} @enderror</small>
                            </div>
                          </div>

                          <div class="row g-3">
                            <div class="col">
                             <label for="description" class="form-label"><h5>{{__('Description')}}</h5></label>
                             <input type="text" class="form-control mb-4" id="description" placeholder="Enter description" name="description" >
                             <small class="text-danger">@error('description') {{ $message }} @enderror</small>
                            </div>
                            <div class="col">
                             <label for="mobile" class="form-label"><h5>{{__('Butten Text')}}</h5></label>
                             <input type="text" class="form-control mb-4" id="button_text" placeholder="Enter text" name="button_text" >
                             <small class="text-danger">@error('buttonn_text') {{ $message }} @enderror</small>
                            </div>
                          </div>

                          <div class="row g-3">
                            <div class="col">
                             <label for="email" class="form-label"><h5>{{__('Button Link')}}</h5></label>
                             <input type="text" class="form-control mb-4" id="button_link" placeholder="Enter url" name="button_link" >
                             <small class="text-danger">@error('button_link') {{ $message }} @enderror</small>
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