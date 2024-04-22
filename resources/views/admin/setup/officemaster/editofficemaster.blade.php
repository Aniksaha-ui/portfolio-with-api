@extends('admin.admin_layout')

@section('admin_panel')

 <div class="sl-mainpanel">
     

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Brand Update</h5>
         
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Brand Update
   
          </h6>
           

          <div class="table-wrapper">
         
   @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif
       <form method="post" action="{{ url('update/office/'.$office->id) }}" enctype="multipart/form-data" >
        @csrf
         <div class="modal-body pd-20"> 
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $office->title }}" name="title">
                    
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Company Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $office->company_name }}" name="company_name">
                        
                    </div>
                </div>
            </div>
            


            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Address</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $office->office_address }}" name="office_address">
                        
                    </div>
                </div>
            </div>
            


   


          
              </div><!-- modal-body -->
              <div class="modal-footer">
                <button type="submit" class="btn btn-info pd-x-20">Update</button>
                 
              </div>
                </form>


          </div><!-- table-wrapper -->
        </div><!-- card -->

        

 
    </div><!-- sl-mainpanel -->


 
 

@endsection