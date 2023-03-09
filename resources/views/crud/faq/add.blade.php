@extends('dblayout.dbheader')
@section('content')
 <div class="app-wrapper">   
	<div class="app-content pt-3 p-md-3 p-lg-4">
		<div class="container">
	            <div class="row">
		            <div class="col-sm-12">
                 
			            <form method="post" action="{{route('faq.store')}}"  enctype="multipart/form-data">
			              @csrf
                          <div class="row g-3">
                            <div class="col">
                              <label for="question" class="form-label"><h5>{{__('Question ')}}</h5></label>
                             <input type="text" class="form-control mb-4" id="question" placeholder="Enter your question" name="question" >
                               <small class="text-danger">@error('question') {{ $message }} @enderror</small>
                            </div>
                            <div class="col">
                             <label for="answer" class="form-label"><h5>{{__('Answer')}}</h5></label>
                             <input type="text" class="form-control mb-4" id="answer" placeholder="Enter your answer" name="answer" >
                             <small class="text-danger">@error('answer') {{ $message }} @enderror</small>
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