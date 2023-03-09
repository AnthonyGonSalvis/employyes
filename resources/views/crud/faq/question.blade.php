@extends('dblayout.dbheader')
@section('content')
<div class="app-wrapper">   
  <div class="app-content pt-3 p-md-3 p-lg-4">
    
            <div class="container">
              <div class="row">
                <div class="card">
                   <div class="card-body d-flex">
                      <div class="col-md-11">
                      <h3><a href="{{url('/admin')}}" style="color: #E43B3B;">Home</a>/FAQ</h3>
                      </div>
                      <div class="col-md-1">
                      <a href="{{route('faq.create')}}" class="btn text-white" style="background-color: #E43B3B;">Add</a></li>
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
                      <tr class="text-white text-center" style="background-color: #E43B3B;">
                        <th>Heading</th>
                        <th>Text</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                   @foreach ($faqs as $key => $value)
                    <tbody>
                      <tr class="text-center">
                        
                          <td>{{$value->question}}</td>
                          <td>{{$value->answer}}</td>
                          
                          <td>
                            <form action="{{route('faq.destroy',$value->id) }}" method="POST">
                            {{ method_field('DELETE')}}
                            {{ csrf_field() }}
                            
                            <!-- Button to Open the Modal -->
                             <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#myModal">

                               <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                  <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                </svg>
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

                            <a class="btn btn-outline-primary" href="{{ route('faq.edit',$value->id)}}"><i class="fa-sharp fa-solid fa-pen-clip" aria-hidden="true"></i></a>      
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