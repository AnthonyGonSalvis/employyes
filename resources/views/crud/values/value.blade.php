@extends('dblayout.main')
@section('content')
<div class="app-wrapper">   
  <div class="app-content pt-3 p-md-3 p-lg-4">
    
            <div class="container">
              <div class="row">
                <div class="col-sm-10">
                  
                </div>
                <div class="col-sm-2">
                  <button type="button" class="btn btn-outline-success text-white"><a href="{{route('values.create')}}">Add</a></button>
                </div>
              </div>
             <!--  <div class="row">
                <div class="col-sm-12">
                   
                </div>
              </div> -->
           
              <div class="container mt-3">
                             
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>Icon</th>
                        <th>Number</th>
                        <th>Text</th>
                        
                        <th>Status</th>
                      </tr>
                    </thead>
                   @foreach ($val->take(3) as $key => $value)
                    <tbody>
                      <tr>
                        <td><img src="{{asset('valuesimages/'.$value->image)}}" style="height: 50px; width: 50px; border-radius: 50%;"></td>
                        <td>{{$value->heading}}</td>
                        <td>{{$value->content}}</td>
                     
                        <td>
                            <form action="{{route('values.destroy',$value->id)}}" method="POST">
                            {{ method_field('DELETE') }}
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

                            <a class="btn btn-outline-primary" href="{{route('values.edit',$value->id)}}"><i class="fa-sharp fa-solid fa-pen-clip" aria-hidden="true"></i></a>      
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