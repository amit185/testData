@extends('admin.layouts.master')
@section('contents')
<div class="right_col" role="main">
    <div class="">
      <div class="row" style="display: block;">

        <div class="col-md-12 col-sm-12  ">
      
           
              <h2>Company List </h2>
              
            

            <div class="x_content">


              <div class="table-responsive">
                <table class="table table-striped jambo_table bulk_action">
                  <thead>
                    <tr class="headings">
                      <th>
                        <input type="checkbox" id="check-all" class="flat">
                      </th>
                      <th class="column-title">Event Name </th>
                      <th class="column-title">Event Tag </th>
                      <th class="column-title">Event Location</th>
                      <th class="column-title">Event Content</th>
                      <th class="column-title">Event Date</th>
                      <th class="column-title">Event Ticket Available </th>
                      <th class="column-title">Event Ticket Discount </th>
                      <th class="column-title">Event Ticket Price</th>
                     
                      <th class="column-title">Action</th> 
                      
                    </tr>
                  </thead>

                  <tbody>
                      @foreach ($event as $item)
                          
                      <tr class="even pointer">
                          <td>{{ $item->id}}</td>
                        <td class="a-center ">{{ $item->event_name }} </td>
                        <td class=" ">{{ $item->event_tag }}</td>
                        <td class=" ">{{ $item->event_content }}</td>
                        <td class=" ">{{ $item->event_location }} <i class="success fa fa-long-arrow-up"></i></td>
                        <td class=" ">{{ $item->event_date }}</td>
                        <td class=" ">{{ $item->event_ticket_available }}</td>
                        <td class=" ">{{ $item->event_ticket_discount }}</td>
                        <td class=" ">{{ $item->event_ticket_price }}</td>
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