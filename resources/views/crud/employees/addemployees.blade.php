@extends('dblayout.main')
@section('content')
 <div class="app-wrapper">   
	<div class="app-content pt-3 p-md-3 p-lg-4">
		<div class="container">
	            <div class="row">
		            <div class="col-sm-12">
                 
			            <form method="post" action="{{route('employees.store')}}"  enctype="multipart/form-data">
			              @csrf
                          <div class="row g-3">
                            <div class="col">
                             <label for="name" class="form-label"><h5>{{__('First Name')}}</h5></label>
                             <input type="text" class="form-control mb-4" id="first_name" placeholder="Enter first-name" name="first_name" >
                             <small class="text-danger">@error('first_name') {{ $message }} @enderror</small>
                            </div>
                            <div class="col">
                             <label for="name" class="form-label"><h5>{{__('Last Name')}}</h5></label>
                             <input type="text" class="form-control mb-4" id="last_name" placeholder="Enter last-name" name="last_name" >
                             <small class="text-danger">@error('last_name') {{ $message }} @enderror</small>
                            </div>
                          </div>

                          <div class="row g-3">
                            <div class="col">
                             <label for="dob" class="form-label"><h5>{{__('DOB')}}</h5></label>
                             <input type="date" class="form-control mb-4" id="dob" placeholder="Enter date of birth" name="dob" >
                             <small class="text-danger">@error('dob') {{ $message }} @enderror</small>
                            </div>
                            <div class="col">
                             <label for="mobile" class="form-label"><h5>{{__('Mobile')}}</h5></label>
                             <input type="number" class="form-control mb-4" id="mobile" placeholder="Enter mobile number" name="mobile" >
                             <small class="text-danger">@error('mobile') {{ $message }} @enderror</small>
                            </div>
                          </div>

                          <div class="row g-3">
                            <div class="col">
                             <label for="email" class="form-label"><h5>{{__('Email')}}</h5></label>
                             <input type="email" class="form-control mb-4" id="email" placeholder="Enter your email" name="email" >
                             <small class="text-danger">@error('email') {{ $message }} @enderror</small>
                            </div>
                            <div class="col">
                             <label for="password" class="form-label"><h5>{{__('Password')}}</h5></label>
                             <input type="text" class="form-control mb-4" id="password" placeholder="Enter your password" name="password" >
                             <small class="text-danger">@error('password') {{ $message }} @enderror</small>
                            </div>
                          </div>

                          <div class="row g-3">
                            <div class="col">
                              <label for="address" class="form-label"><h5>{{__('Address')}}</h5></label>
                              <input type="text" class="form-control mb-4" id="address" placeholder="Enter your address" name="address" >
                              <small class="text-danger">@error('address') {{ $message }} @enderror</small>
                            </div>
                            <div class="col">
                              <label for="education" class="form-label"><h5>{{__('Education')}}</h5></label>
                              <!-- <input type="text" class="form-control" id="education" placeholder="Enter your degree" name="education" > -->
                              <div>
                              <select class="form-select selectpicker" aria-label="Default select example" name="education" id="education" >
                                <option hidden value="">open menu</option>
                                <option value="1">12th</option>
                                <option value="2">Bachler Degree</option>
                                <option value="3">Master Degree</option>
                              </select>
                              </div>
                              <small class="text-danger">@error('education') {{ $message }} @enderror</small>
                            </div>
                          </div>

                          <div class="row g-3">
                          	<div class="col dropdown">
                          	  <label for="designation" class="form-label"><h5>{{__('Designation')}}</h5></label>
                              <!-- <input type="text" class="form-control" placeholder="Enter designation" name="designation"> -->
                              <select class="form-select" aria-label="Default select example" name="designation" id="designation">
                                <option hidden>Open this select menu</option>
                                <option value="Designation-1">Designation-One</option>
                                <option value="Designation-2">Designation-Two</option>
                                <option value="Designation-3">Designation-Three</option>
                              </select>	
                              
                              <small class="text-danger">@error('designation') {{ $message }} @enderror</small>
                          	</div>
                          	<div class="col">
                          	  <label for="exampleFormControlFile1"><h5>{{__('Choose Image')}}</h5></label><br>
                              <input type="file" class="form-control-file mb-4" name="image" accept="image/jpeg,image/png,image/jpg">
                              <small class="text-danger">@error('images') {{ $message }} @enderror</small>
                          	</div>
                          </div>
                          <!-- <div class="dropdown">
                           <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown"></a>
                            <div class="dropdown-menu">
                             <a href="#" class="dropdown-item">Action</a>
                             <a href="#" class="dropdown-item">Another action</a>
                          </div>
                         </div> -->

                          <button type="submit" class="btn btn-primary text-white">Submit</button>
                        </form>

                    </div>
		        </div>
	    </div>
	</div>
 </div>		
@endsection