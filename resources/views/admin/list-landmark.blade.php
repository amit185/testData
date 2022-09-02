@extends('admin.layouts.master')
@section('contents')
<div class="right_col" role="main">
    <div class="">
      <div class="row" style="display: block;">

        <div class="col-md-12 col-sm-12  ">
      
           
              <h2>Landmark List </h2>
              
            

            <div class="x_content">


              <div class="table-responsive">
                <table class="table table-striped jambo_table bulk_action">
                  <thead>
                    <tr class="headings">
                      <th>
                        <input type="checkbox" id="check-all" class="flat">
                      </th>
                      <th class="column-title">Landmark Name </th>
                      <th class="column-title">Landmark Tag </th>
                      <th class="column-title">Landmark Content</th>
                      <th class="column-title">Landmark Location </th>
                      <th class="column-title">Landmark Ticket Available</th>
                      <th class="column-title">Landmark Ticket Price</th>
                      <th class="column-title">Landmark Events </th>
                     
                      <th class="column-title">Action</th> 
                      
                    </tr>
                  </thead>

                  <tbody>
                      @foreach ($landmark as $item)
                          
                      <tr class="even pointer">
                          <td>{{ $item->id}}</td>
                        <td class="a-center ">{{ $item->landmark_name }} </td>
                        <td class=" ">{{ $item->landmark_tag }}</td>
                        <td class=" ">{{ $item->landmark_content }}</td>
                        <td class=" ">{{ $item->landmark_location }} <i class="success fa fa-long-arrow-up"></i></td>
                        <td class=" ">{{ $item->landmark_ticket_available }}</td>
                        <td class=" ">{{ $item->landmark_ticket_price }}</td>
                        <td class=" ">{{ $item->landmark_events }}</td>
                       
                        <td class=""><a href="#" class="btn btn-primary">Edit</a>|<a href="#" class="btn btn-danger">Delete</a>
                        </td>
                      </tr>
                      @endforeach
                    
                  </tbody>
                </table>
              </div>
                      
                  
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    
@endsection