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
                      <th class="column-title">Company Name </th>
                      <th class="column-title">Company Location </th>
                      <th class="column-title">Company Link</th>
                      <th class="column-title">Company Content</th>
                      <th class="column-title">Company Logo</th>
                      <th class="column-title">Status </th>
                     
                      <th class="column-title">Action</th> 
                      
                    </tr>
                  </thead>

                  <tbody>
                      @foreach ($company as $item)
                          
                      <tr class="even pointer">
                          <td>{{ $item->id}}</td>
                        <td class="a-center ">{{ $item->company_name }} </td>
                        <td class=" ">{{ $item->company_location }}</td>
                        <td class=" ">{{ $item->company_link }}</td>
                        <td class=" ">{{ $item->company_content }} <i class="success fa fa-long-arrow-up"></i></td>
                        <td class=" ">{{ $item->company_logo }}</td>
                        <td class=" ">{{ $item->company_status }}</td>
                        <td class=""><a href="{{url('companies/edit/'.$item->id)}}" class="btn btn-primary">Edit</a>|<a href="#" class="btn btn-danger">Delete</a>
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