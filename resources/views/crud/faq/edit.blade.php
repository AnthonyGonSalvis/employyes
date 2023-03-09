@extends('dblayout.dbheader')
@section('content')
 <div class="app-wrapper">   
	<div class="app-content pt-3 p-md-3 p-lg-4">
		<div class="container">
	            <div class="row">
                <div class="col-sm-10">
                </div>
                <div class="col-sm-2">
               
                 <a href="{{route('faq.index')}}" class="btn btn-success text-white" style="background-color: #E43B3B;">Back</a>
                </div>
		            <div class="col-sm-12">
			            <form method="post" action="{{route('faq.update',$addfaq->id)}}"  enctype="multipart/form-data">
			              @csrf
                    @method('PUT')
                        <div class="row g-3">
                          <div class="col">
                            <label for="name" class="form-label"><h5>{{__('Question')}}</h5></label>
                            <input type="text" class="form-control mb-4" id="question" placeholder="Enter question here" name="question" value="{{$addfaq->question}}">
                           </div>
                          <div class="col">
                            <label for="name" class="form-label"><h5>{{__('Answer')}}</h5></label>
                            <input type="text" class="form-control mb-4" id="answer" placeholder="Enter answer here" name="answer" value="{{$addfaq->answer}}">
                          </div>
                        </div>
                        
                          <!-- Button to Open the Modal -->
                          <button type="button" class="btn text-white" style="background-color: #E43B3B;" data-bs-toggle="modal" data-bs-target="#myModal">
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
                                    <button type="submit" class="btn" style="background-color: #E43B3B;" data-bs-dismiss="modal">Ok</button>
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