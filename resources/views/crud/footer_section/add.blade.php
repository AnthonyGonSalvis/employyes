@extends('dblayout.dbheader')
@section('content')
 <div class="app-wrapper">   
	<div class="app-content pt-3 p-md-3 p-lg-4">
		<div class="container">
	            <div class="row">
		            <div class="col-sm-12">
                 
			            <form method="post" action="{{route('foots.store')}}"  enctype="multipart/form-data">
			              @csrf
                          <div class="row g-3">
                            <div class="col">
                             <label for="paragraph" class="form-label"><h5>{{__('Paragraph')}}</h5></label>
                              <input type="text" name="title" class="form-control mb-5" placeholder="Title">
                              <textarea class="form-control mt-5" name="paragraph" id="editor"></textarea>
                              <small class="text-danger">@error('paragraph') {{ $message }} @enderror</small>
                            </div>
                           
                          </div>

                        
                          <button type="submit" class="btn btn-primary text-white">Submit</button>
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