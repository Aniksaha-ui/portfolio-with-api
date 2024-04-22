@extends('admin.admin_layout')
@section('admin_panel')

 <div class="sl-mainpanel">
     

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>contact Update</h5>
         
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">contact Update
   
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
       <form method="post" action="{{ url('update/contact/'.$contact->id) }}" enctype="multipart/form-data" >
        @csrf
         <div class="modal-body pd-20"> 
          
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="form-group">
                    <label for="exampleInputEmail1">Person Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $contact->person_name }}" name="person_name">
                    
                    </div>
      
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Person Designation</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $contact->designation }}" name="designation">
                    
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <!-- <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $contact->address }}" name="address"> -->
                    <textarea class="form-control"  name="address"> 
                    {{ $contact->address }}
                   </textarea>
                  </div>
                </div>
            </div>
          
         
            <div class="row">

                <div class="col-lg-4 col-md-4 col-12">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email 1</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $contact->email_1 }}" name="email_1">
                    
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email 2</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $contact->email_2 }}" name="email_2">
            
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email_3</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $contact->email_3 }}" name="email_3">
                    
                    </div>
                </div>
            </div>

            <div class="row">
              
              <div class="col-lg-6 col-md-6 col-12">
                  <div class="form-group">
                  <label for="exampleInputEmail1">Cell Number 1</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $contact->cell_1 }}" name="cell_1">
                  
                  </div>
              </div>
              <div class="col-lg-6 col-md-6 col-12">
                  <div class="form-group">
                  <label for="exampleInputEmail1">Cell Number 2</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $contact->cell_2 }}" name="cell_2">
                  
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