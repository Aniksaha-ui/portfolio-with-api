@extends('admin.admin_layout')

  

@section('admin_panel')




  <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <span class="breadcrumb-item active">Product Section</span>
      </nav>

      <div class="sl-pagebody">

 <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Update Order
 <a href="{{ route('admin.neworder')}}" class="btn btn-success btn-sm pull-right">All order</a>
          </h6>
          <p class="mg-b-20 mg-sm-b-30">Update Order From</p>

       <form method="post" action="{{ url('admin/update/order/'.$order->id) }} " enctype="multipart/form-data">    
        @csrf

          <div class="form-layout">
            <div class="row mg-b-25">
              

            <div class="col-lg-6" hidden="true">
                <div class="form-group">
                  <label class="form-control-label">Invoice Id<span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="id" value="{{ $order->id }}" >
                </div>
            </div><!-- col-4 -->
            <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Invoice Id<span class="tx-danger">*</span></label>
                  <input disabled="disabled" disable="true" class="form-control" type="text" name="invoiceid" value="Invoice - {{ $order->id }}" >
                </div>
            </div><!-- col-4 -->
            <div class="col-lg-6">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Status: <span class="tx-danger">*</span></label>
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
              </div><!-- col-4 -->


 

          </div><!-- end row --> 

            <div class="form-layout-footer">
              <button class="btn btn-info mg-r-5">Update Order Status</button>
              
            </div><!-- form-layout-footer -->
          </div><!-- form-layout -->
        </div><!-- card -->

        </form>  
        
        </div><!-- row -->

  


 

 
 </div>
 </div>


    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
 



@endsection
