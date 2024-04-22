@extends('admin.admin_layout')
@section('admin_panel')

 <div class="sl-mainpanel">
     

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Company Update</h5>
         
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Company Update
   
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
       <form method="post" action="{{ url('update/company/'.$company->id) }}" enctype="multipart/form-data" >
        @csrf
         <div class="modal-body pd-20"> 
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    
                </div>
                <div class="col-lg-6 col-md-6 col-12">

                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="form-group">
                    <label for="exampleInputEmail1">Company Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $company->name }}" name="name">
                    
                    </div>
      
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nature of Company</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $company->NOC }}" name="NOC">
                    
                  </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                <div class="form-group">
                <label for="exampleInputEmail1">Corporate Office</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $company->corporate_office }}" name="corporate_office">
                
                </div>
     
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="form-group">
                    <label for="exampleInputEmail1">Tel Number</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $company->telephone_1 }}" name="telephone_1">
                    
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Mobile Number</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $company->telephone_2 }}" name="telephone_2">
                    
                    </div>
        
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email 1</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $company->email_1 }}" name="email_1">
                    
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email 2</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $company->email_2 }}" name="email_2">
            
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Ceo Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $company->ceo }}" name="ceo">
                    
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="form-group">
                    <label for="exampleInputEmail1">Ceo Phone Number 1</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $company->ceo_phone_1 }}" name="ceo_phone_1">
                    
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Ceo Phone Number 2</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $company->ceo_phone_2 }}" name="ceo_phone_2">
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Chairman Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $company->chairman }}" name="chairman">
            
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                            
                    <div class="form-group">
                        <label for="exampleInputEmail1">Chairman Phone Number 1</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $company->chairman_phone_1 }}" name="chairman_phone_1">
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="form-group">
                    <label for="exampleInputEmail1">Chairman Phone Number 2</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $company->chairman_phone_2 }}" name="chairman_phone_2">
                    
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Director</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $company->director }}" name="director">
                    
                    </div>
                </div>
            </div>
       
        
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="form-group">
                    <label for="exampleInputEmail1">Director Phone Number 2</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $company->director_phone_1 }}" name="director_phone_1">
                    
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                <div class="form-group">
                    <label for="exampleInputEmail1">Director Phone Number 2</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $company->director_phone_2 }}" name="director_phone_2">
                
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