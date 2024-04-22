@extends('admin.admin_layout')

@section('admin_panel')

 <div class="sl-mainpanel">
     

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Order Details</h5>
         
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Order List</h6>
           

          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                <th class="wd-15p">Order Number</th>
                <th class="wd-15p">User Name</th>
                <th class="wd-15p">User Phone Number</th>
                  <th class="wd-20p">Total</th>
                  <th class="wd-20p">Date</th>
                  <th class="wd-20p">Status</th>
                  <th class="wd-20p">Action</th>
                  
                </tr>
              </thead>
              <tbody>
                @foreach($order as $row)
                <tr>
                <td style="color: black">{{$row->order_number}} </td>
                <td style="color: black">{{ $row->name }} </td>
                <td style="color: black">{{ $row->phone }} </td>
                <td style="color: black">{{ $row->paying_amount }}/- </td>
                <td style="color: black">{{ $row->date }}  </td>
                <td>
              @if($row->status == 0)
                  <span class="badge badge-warning">Pending</span>
                  @elseif($row->status == 1)
                  <span class="badge badge-info">Cutting</span>
                  @elseif($row->status == 2)
                  <span class="badge badge-warning">Progress</span>
                  @elseif($row->status == 3)
                  <span class="badge badge-success">Delevered</span>
                  @else
                  <span class="badge badge-danger">Cancle</span>

              @endif  

               </td>

                  <td>
                    <a href="{{ URL::to('admin/view/order/'.$row->id) }} " class="btn btn-sm btn-info">View</a>
                    
                    <a href="{{ URL::to('admin/edit/order/'.$row->id) }} " class="btn btn-sm btn-info">Update Status</a>
                  </td>
              
                   
                </tr>
                @endforeach
                 
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->

        

 
    </div><!-- sl-mainpanel -->


 
 

@endsection