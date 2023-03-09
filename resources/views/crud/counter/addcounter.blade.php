@extends('dblayout.dbheader')
@section('content')
 <div class="app-wrapper">   
	<div class="app-content pt-3 p-md-3 p-lg-4">
		<div class="container">
	            <div class="row">
		            <div class="col-sm-12">
                 
			            <form method="post" action="{{route('counter.store')}}"  enctype="multipart/form-data">
			              @csrf
                          <div class="row g-3">
                            <div class="col">
                             <label for="icon" class="form-label"><h5>{{__('Icon')}}</h5></label>
                             <input type="text" class="form-control mb-4" id="icon" placeholder="Enter icon" name="icon" >
                             <small class="text-danger">@error('icon') {{ $message }} @enderror</small>
                            </div>
                            <div class="col">
                             <label for="name" class="form-label"><h5>{{__('Number')}}</h5></label>
                             <input type="number" class="form-control mb-4" id="number" placeholder="Enter number" name="number" >
                             <small class="text-danger">@error('number') {{ $message }} @enderror</small>
                            </div>
                          </div>

                          <div class="row g-3">
                            <div class="col">
                             <label for="description" class="form-label"><h5>{{__('Text')}}</h5></label>
                             <input type="text" class="form-control mb-4" id="text" placeholder="Enter text" name="text" >
                             <small class="text-danger">@error('text') {{ $message }} @enderror</small>
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