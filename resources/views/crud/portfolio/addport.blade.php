@extends('dblayout.dbheader')
@section('content')
 <div class="app-wrapper">   
	<div class="app-content pt-3 p-md-3 p-lg-4">
		<div class="container">
	            <div class="row">
		            <div class="col-sm-12">
                 
			            <form method="post" action="{{route('portfolios.store')}}"  enctype="multipart/form-data">
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
                             <!-- <input type="text" class="form-control mb-4" id="name" placeholder="Enter description" name="name" > -->
                             <select class="form-select selectpicker" aria-label="Default select example" name="name" id="name" >
                                <option hidden value="">open menu</option>
                                <option value="App">App</option>
                                <option value="Widgets">Widgets</option>
                                <option value="Web">Web</option>
                              </select>
                             <small class="text-danger">@error('name') {{ $message }} @enderror</small>
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