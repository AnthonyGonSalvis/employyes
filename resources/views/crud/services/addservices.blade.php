@extends('dblayout.dbheader')
@section('content')
 <div class="app-wrapper">   
	<div class="app-content pt-3 p-md-3 p-lg-4">
		<div class="container">
	            <div class="row">
		            <div class="col-sm-12">
                 
			            <form method="post" action="{{route('servicesemp.store')}}"  enctype="multipart/form-data">
			              @csrf
                          <div class="row g-3">
                            <div class="col">
                              <label for="description" class="form-label"><h5>{{__('Choose Icon')}}</h5></label>
                             <input type="text" class="form-control mb-4" id="icon" placeholder="Enter description" name="icon" >
                             

                              <!-- <select class="form-select selectpicker" aria-label="Default select example" name="icon" id="icon" >
                                <option hidden value="">open menu</option>
                                <option value="1">12th</option>
                                <option value="2">Bachler Degree</option>
                                <option value="3">Master Degree</option>
                              </select> -->
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
                             <label for="description" class="form-label"><h5>{{__('Description')}}</h5></label>
                             <input type="text" class="form-control mb-4" id="description" placeholder="Enter description" name="description">
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