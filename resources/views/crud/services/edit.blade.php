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
                 <a href="{{route('servicesemp.index')}}" class="btn btn-success text-white" style="background-color: #E43B3B;">Back</a>
                </div>
		            <div class="col-sm-12">
			            <form method="post" action="{{route('servicesemp.update',$addservice->id)}}"  enctype="multipart/form-data">
			              @csrf
                    @method('PUT')
                          <div class="row g-3">
                            <div class="col">
                            <label for="heading" class="form-label"><h5>{{__('Icon')}}</h5></label>
                            <input type="text" class="form-control mb-4" id="icon" placeholder="Enter icon" name="icon" value="{{$addservice->icon}}">
                          </div>
                          <div class="col">
                            <label for="heading" class="form-label"><h5>{{__('Heading')}}</h5></label>
                            <input type="text" class="form-control mb-4" id="heading" placeholder="Enter heading" name="heading" value="{{$addservice->heading}}">
                          </div>
                        </div>
                          <div class="row g-3">
                            <div class="col">
                            <label for="description" class="form-label"><h5>{{__('Description')}}</h5></label>
                            
                            <input type="text" name="title" class="form-label mb-2" placeholder="Title" value="{!! $addservice->description !!}">
                            <textarea class="form-control mt-5" name="description" id="editor"></textarea>
                          </div>
                          <div class="col">
                            <label for="button text" class="form-label"><h5>{{__('Button Text')}}</h5></label>
                            <input type="text" class="form-control mb-4" id="button_text" placeholder="Enter button text" name="button_text" value="{{$addservice->button_text}}">
                          </div>
                        </div>
                          <div class="row g-3">
                            <div class="col">
                            <label for="button link" class="form-label"><h5>{{__('Button Link')}}</h5></label>
                            <input type="text" class="form-control mb-4" id="button_link" placeholder="Enter url" name="button_link" value="{{$addservice->button_link}}">
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
  <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
      <script>
        ClassicEditor
          .create( document.querySelector( '#editor' ) )
          .then( editor => {
                  console.log( editor );
          } )
          .catch( error => {
                   console.error( error );
          } );
      </script>
@endsection