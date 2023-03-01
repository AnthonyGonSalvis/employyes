@extends('dblayout.dbheader')
@section('content')
 <div class="app-wrapper">   
	<div class="app-content pt-3 p-md-3 p-lg-4">
		<div class="container">
	            <div class="row">
                <div class="col-sm-10">
                </div>
                <div class="col-sm-2">
                <!-- <button type="button" class="btn btn-success" style="color:white;"><a href="{{route('employees.index')}}">Back</a></button> -->
                 <a href="{{route('employees.index')}}" class="btn btn-success text-white">Back</a>
                </div>
		            <div class="col-sm-12">
			            <form method="post" action="{{route('employees.update',$addemp->id)}}"  enctype="multipart/form-data">
			              @csrf
                    @method('PUT')
                        <div class="row g-3">
                          <div class="col">
                            <label for="name" class="form-label"><h5>{{__('First Name')}}</h5></label>
                            <input type="text" class="form-control mb-4" id="first_name" placeholder="Enter location" name="first_name" value="{{$addemp->first_name}}">
                           </div>
                          <div class="col">
                            <label for="name" class="form-label"><h5>{{__('Last Name')}}</h5></label>
                            <input type="text" class="form-control mb-4" id="last_name" placeholder="Enter location" name="last_name" value="{{$addemp->last_name}}">
                          </div>
                        </div>
                          <div class="row g-3">
                            <div class="col">
                            <label for="dob" class="form-label"><h5>{{__('DOB')}}</h5></label>
                            <input type="date" class="form-control mb-4" id="dob" placeholder="Enter location" name="dob" value="{{$addemp->dob}}" >
                          </div>
                          <div class="col">
                            <label for="mobile" class="form-label"><h5>{{__('Mobile')}}</h5></label>
                            <input type="number" class="form-control mb-4" id="mobile" placeholder="Enter location" name="mobile" value="{{$addemp->mobile}}">
                          </div>
                        </div>
                          <div class="row g-3">
                            <div class="col">
                            <label for="email" class="form-label"><h5>{{__('Email')}}</h5></label>
                            <input type="email" class="form-control mb-4" id="email" placeholder="Enter location" name="email" value="{{$addemp->email}}">
                          </div>
                          <div class="col">
                            <label for="password" class="form-label"><h5>{{__('Password')}}</h5></label>
                            <input type="text" class="form-control mb-4" id="password" placeholder="Enter location" name="password" value="{{$addemp->password}}">
                          </div>
                        </div>
                          <div class="row g-3">
                            <div class="col">
                            <label for="address" class="form-label"><h5>{{__('Address')}}</h5></label>
                            <input type="text" class="form-control mb-4" id="address" placeholder="Enter location" name="address" value="{{$addemp->address}}">
                          </div>
                          <div class="col">
                            <label for="education" class="form-label"><h5>{{__('Education')}}</h5></label>
                            <!-- <input type="text" class="form-control" id="education" placeholder="Enter location" name="education" value="{{$addemp->education}}"> -->
                            <div>
                              <select id="education" name="education" class="form-select mb-4" value="{{$addemp->education}}">
                                <option>Select Class</option>
                                <option value="12th">12th</option>
                                <option value="Batchler Degree">Batchler Degree</option>
                                <option value="Master Degree">Master Degree</option>
                                <option value="Others">Others</option>
                              </select>
                            </div>
                          </div>
                          </div>

                          <div class="row g-3">
                            <div class="col">
                            <label for="designation" class="form-label"><h5>{{__('Designation')}}</h5></label>
                            <!-- <input type="text" class="form-control" id="designation" placeholder="Enter designation" name="designation" > -->
                            <div>
                              <select id="designation"name="designation" class="form-select mb-4" value="{{$addemp->designation}}">
                                <option>Select Designation</option>
                                <option value="designation-1">designation-one</option>
                                <option value="designation-2">designation-two</option>
                                <option value="designation-3">designation-three</option>
                              </select>
                            </div>
                          </div>
                          <div class="col">
                            <label for="exampleFormControlFile1"><h5>{{__('Choose Image')}}</h5></label>
                            <input type="file" class="form-control-file mb-4" id="image" name="image" accept="image/jpeg,image/png,image/jpg" >
                            <img src="{{asset('uploads/'.$addemp->image)}}" style="height: 70px; width: 100px; margin-top: 3px;">
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