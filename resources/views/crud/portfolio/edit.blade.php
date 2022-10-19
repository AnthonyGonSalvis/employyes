@extends('dblayout.main')
@section('content')
 <div class="app-wrapper">   
	<div class="app-content pt-3 p-md-3 p-lg-4">
		<div class="container">
	            <div class="row">
                <div class="col-sm-10">
                </div>
                <div class="col-sm-2">
                <!-- <button type="button" class="btn btn-success" style="color:white;"><a href="{{route('employees.index')}}">Back</a></button> -->
                 <a href="{{route('portfolios.index')}}" class="btn btn-success text-white" data-bs-toggle="modal" data-bs-target="#myModal">Back</a>
                </div>
		            <div class="col-sm-12">
			            <form method="post" action="{{route('portfolios.update',$addport->id)}}"  enctype="multipart/form-data">
			              @csrf
                    @method('PUT')
                          <div class="row g-3">
                            <div class="col">
                            <label for="exampleFormControlFile1"><h5>{{__('Choose Image')}}</h5></label>
                            <input type="file" class="form-control-file mb-4" id="image" name="image" accept="image/jpeg,image/png,image/jpg" >
                            <img src="{{asset('testimages/'.$addport->image)}}" style="height: 70px; width: 100px; margin-top: 3px;">
                          </div>
                          <div class="col">
                            <label for="text" class="form-label"><h5>{{__('Text')}}</h5></label>
                            <input type="text" class="form-control mb-4" id="text" placeholder="Enter location" name="text" value="{{$addport->text}}">
                          </div>
                        </div>
                          <div class="row g-3">
                            <div class="col">
                            <label for="name" class="form-label"><h5>{{__('Name')}}</h5></label>
                            <input type="text" class="form-control mb-4" id="name" placeholder="Enter location" name="name" value="{{$addport->name}}">
                          </div>
                         
                        </div>
                          
                          
                          <!-- Button to Open the Modal -->
                          <button type="button" class="btn btn-primary text-white" data-bs-toggle="modal" data-bs-target="#myModal">
                            Submit
                          </button>

                            <!-- The Modal -->
                            <div class="modal" id="myModal">
                              <div class="modal-dialog">
                                <div class="modal-content">

                                  <!-- Modal Header -->
                                  <div class="modal-header">
                                   <h4>Updating Data</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                  </div>

                                  <!-- Modal body -->
                                  <div class="modal-body">
                                    Your Data is updated.
                                  </div>

                                  <!-- Modal footer -->
                                  <div class="modal-footer">
                                    <button type="submit" class="btn btn-success" data-bs-dismiss="modal">Ok</button>
                                  </div>

                                </div>
                              </div>
                            </div>
                        </form>

                    </div>
		        </div>
	    </div>
	</div>
 </div>		
@endsection