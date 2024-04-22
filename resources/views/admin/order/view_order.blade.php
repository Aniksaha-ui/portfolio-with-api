@extends('admin.admin_layout')

@section('admin_panel')


<style>
table, th, td {
 /* background-color: #ffffff !important;  */
  border-collapse: collapse;
  border: 1px solid black;
  color:black !important;
}

table, td{
 background-color: #ffffff !important; 

}

hr{
 background-color: black !important; 
}

</style>
 <div class="sl-mainpanel"> 
  <div class="sl-pagebody">

 
    <div class="card pd-20 pd-sm-40 col-lg-12">
      
    <div>
    <h3 class="text-center text-dark">Enjtexbd Limited</h3>
      <h3 class="text-center text-dark">Order</h3>

    <div class="d-flex align-items-center justify-content-end" style="margin-top:-5%">
    <form method="post" action="{{ url('admin/update/order/'.$order->id) }} " enctype="multipart/form-data">    
             @csrf     
          <th>Update Status</th>
          <th>

           <div class="form-group mg-b-10-force">
       <select class="form-control select2" id="status" name="status">
                    <option value="{{$order->status}}">
                    @if($order->status == 0)
                    Pending
                    @elseif($order->status == 1)
                    Cutting
                    @elseif($order->status == 2)
                    Progress
                    @elseif($order->status == 3)
                      Delevered
                    @else
                    <span class="badge badge-danger">Cancle</span>

                    @endif  

                    </option>
                    <hr>
                    <option value="1">Cutting</option>
                    <option value="2">Progress</option>
                    <option value="3">Delivered</option>
                    
                  </select>
                </div>
          </th>
          <th>
            <button class="btn btn-primary">update</button>
          </th> 
        </form> 
    </div>
   

    </div>
     

      
     <br>
    <div class="container-fluid card" style="border: 2px solid black;">
    
        <div class="row row-cols-2 row-cols-lg-3 g-2 g-lg-5">
          <div class="col">
            
              <div class="card">
                  <div class="card-body">
                    <p class="card-title" style="color:black">Order Number &nbsp;&nbsp; :  {{$order->order_number}}</p>
                    <p class="card-title" style="color:black;">invoice number&nbsp;&nbsp; : Invoice {{$order->id}}
                    @if($order->status == 0)
                    ( <span class="badge badge-warning">Pending</span> )
                  @elseif($order->status == 1)
                    ( <span class="badge badge-info">Cutting</span> )
                  @elseif($order->status == 2)
                    ( <span class="badge badge-warning">Progress</span> )
                  @elseif($order->status == 3)
                    ( <span class="badge badge-success">Delevered</span> )
                  @else
                    ( <span class="badge badge-danger">Cancle</span> )
                  @endif 
                   </p>
                  
                 
                
                    <p class="card-title" style="color:black;">Customer Name &nbsp;&nbsp;&nbsp;&nbsp;: <span>{{$order->name}}</span></p> 
                    <p class="card-title" style="color:black;">Customer Phone &nbsp&nbsp;&nbsp;: <span>{{$order->phone}}</span></p>
                    <p class="card-title" style="color:black;">Customer Address : <span>{{$order->present_address}}</span></p>
                    <p class="card-title" style="color:black;">Shipping Address &nbsp;: <span>{{$shipping->ship_address}}</span></p>
                  </div>
                
              </div>
            </div>

            <div class="col"></div>
            <div class="col">
                  <div class="card">
                      <div class="card-body">
                       
                        <p class="card-title" style="color:black;">Supplier Name : <span>Enjtexbd Limited</span></p>
                        <p class="card-title" style="color:black;">Supplier Email: <span>enjtexbd@gmail.com</span></p>
                        <p class="card-title" style="color:black;">Supplier phone: <span>+8801779174858</span></p>
                        <p class="card-title" style="color:black;">Created by : <span>Admin Name</span></p> 
                      </div>
                  </div>
            </div>
        </div>  <!-- end of row -->


        
      </div> <!--end of container -->

        <!-- clearfix  -->
        <div style="margin-top: 1px;"></div>
       <div class="card" style="1px solid black;">
           

          <!-- table -->
                    
          <div class="table-wrapper">
            <table class="table">
              <thead>
                <tr >
                  <th class="wd-10p tx-xl-center">SL</th>
                  <th class="wd-15p tx-xl-center">Product ID</th>
                  <th class="wd-35p tx-xl-center">Product Name</th>
                  <th class="wd-10p tx-xl-center">Color</th>
                  <th class="wd-10p tx-xl-center">Size</th>
                  <th class="wd-10p tx-xl-center">Quantity</th>
                  <th class="wd-15p tx-xl-center">Unit Price</th>
                  <th class="wd-30p tx-xl-center">Total</th>
                  
                  
                </tr>
              </thead>
              <tbody>
                @foreach($details as $key=>$row)
                <tr>
                  <td class="tx-xl-center">{{ $key +1 }}</td>
                 <td class="tx-xl-center">{{ $row->product_code }}</td>
                 <td class="tx-xl-center">{{ $row->product_name }}</td>             
                 <td class="tx-xl-center">{{ $row->color }}</td>
                 <td class="tx-xl-center">{{ $row->size }}</td>
                 <td class="tx-xl-center">{{ $row->quantity }}</td>
                 <td class="tx-xl-center">{{ $row->singleprice }}</td>
                 <td class="tx-xl-center">{{ $row->totalprice }}</td>

                </tr>
                @endforeach
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="tx-xl-center">Total</td>
                    <td class="tx-xl-center"> {{$totalPrice}}</td>
                </tr>
              </tbody>
            </table>
          </div><!-- table-wrapper -->


          <!-- <div class="container mt-5">
            <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
              
              <div class="col">
                   <hr />
                   <p class="tx-xl-center text-dark">Prepared By</p>
              </div>
              <div class="col">
                   <hr />
                   <p class="tx-xl-center text-dark">Checked By</p>
              </div>
              <div class="col">
                   <hr />
                   <p class="tx-xl-center text-dark">Passed By</p>
              </div>
              <div class="col">
                   <hr />
                   <p class="tx-xl-center text-dark">Approved By</p>
              </div>
              
            </div>
          </div> -->


        </div><!-- card -->
    </div> <!--end of card --> 

    

  </div>
</div>
 @endsection
      	