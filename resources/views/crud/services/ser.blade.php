@extends('dblayout.dbheader')
@section('content')
<div class="app-wrapper">   
	<div class="app-content pt-3 p-md-3 p-lg-4">
		
            <div class="container">
              <div class="row">
                <div class="card">
                   <div class="card-body d-flex">
                      <div class="col-md-11">
                      <h3><a href="{{url('/admin')}}">Home</a>/Serivices</h3>
                      </div>
                      <div class="col-md-1">
                      <a href="{{route('servicesemp.create')}}" class="btn btn-success text-white">Add</a></li>
                      </div>
                   </div>
                </div>
              </div>
  	         <!--  <div class="row">
  		          <div class="col-sm-12">
  			           
  		          </div>
  	          </div> -->
  	       
              <div class="row mt-3">
                             
                  <table class="table table-bordered bg-white">
                    <thead>
                      <tr class="bg-success text-white text-center">
                        <th>Icon</th>
                        <th>Heading</th>
                        <th>description</th>
                        <th>Button Text</th>
                        <th>Button link</th>
                      </tr>
                    </thead>

                   @foreach ($service as $key => $value)
                    <tbody>
                      <tr class="text-center">
                          <td>{{$value->icon}}</td>
  						            <td>{{$value->heading}}</td>
  						            <td>{{$value->description}}</td>
                          <td>{{$value->button_text}}</td>
                          <td>{{$value->button_link}}</td>
                          <td>
                            <form action="{{route('servicesemp.destroy',$value->id) }}" method="POST">
                            {{ method_field('DELETE')}}
                            {{ csrf_field() }}
                            
                            <!-- Button to Open the Modal -->
                             <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#myModal">

                               <i class="fa-sharp fa-solid fa-trash" aria-hidden="true">
                                                        </i>
                             </button>

                               <!-- The Modal -->
                             <div class="modal" id="myModal">
                               <div class="modal-dialog">
                                 <div class="modal-content">

                                   <!-- Modal Header -->
                                   <div class="modal-header">
                                     <h4>CONFIRMATION</h4>
                                     <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                   </div>

                                   <!-- Modal body -->
                                   <div class="modal-body">
                                     Are you sure you want to delete this
                                   </div>

                                   <!-- Modal footer -->
                                   <div class="modal-footer">
                                    <button class="btn btn-success">Yes</button>
                                  </div>

                                </div>
                              </div>
                            </div>

                            <a class="btn btn-outline-primary" href="{{ route('servicesemp.edit',$value->id)}}"><i class="fa-sharp fa-solid fa-pen-clip" aria-hidden="true"></i></a>      
                            </form>
                        </td>
                       </tr>
                     </tbody>
                   @endforeach
                   
              </table>
             </div>
                
            </div>
      
    </div>
 </div>
@endsection