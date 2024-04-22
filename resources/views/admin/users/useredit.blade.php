@extends('admin.admin_layout')

@section('admin_panel')


 <div class="sl-mainpanel">
     

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5 class="text-center">User Table</h5>
         
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title" style="text-align: center;color: black;">User Update</h6>


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
       <form method="post" action="{{ url('update/user/'.$user->id) }}">
        @csrf
         <div class="modal-body pd-20"> 
        <div class="form-group">
          <label for="exampleInputEmail1">User Name</label>
          <input type="text" class="form-control" value="{{$user->name}}" id="exampleInputEmail1" aria-describedby="emailHelp"  name="name">
          
        </div>
          
        <div class="form-group">
          <label for="exampleInputEmail1">User Email</label>
          <input type="text" class="form-control" value="{{$user->email}}" id="exampleInputEmail1" aria-describedby="emailHelp"  name="email">
          
        </div>
          
        <div class="form-group">
          <label for="exampleInputEmail1">User Address</label>
          <input type="text" class="form-control" value="{{$user->present_address}}" id="exampleInputEmail1" aria-describedby="emailHelp"  name="present_address">
          
        </div>
          
        <div class="form-group">
          <label for="exampleInputEmail1">User Phone</label>
          <input type="text" class="form-control" value="{{$user->phone}}" id="exampleInputEmail1" aria-describedby="emailHelp"  name="phone">
          
        </div>
          
              </div><!-- modal-body -->
              <div class="modal-footer">
                <button type="submit" class="btn btn-info pd-x-20" >Update</button>
             
              </div>
                </form>
          </div><!-- table-wrapper -->
        </div><!-- card -->

        

 
    </div><!-- sl-mainpanel -->





@endsection