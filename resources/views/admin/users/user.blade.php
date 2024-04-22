@extends('admin.admin_layout')

@section('admin_panel')


 <div class="sl-mainpanel">
     

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5 style="text-align: center";>User Table</h5>
         
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
        @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif
          <h6 class="card-body-title" style="text-align: center;">User List
  <a href="#" class="btn btn-sm btn-warning" style="float: right;" data-toggle="modal" data-target="#modaldemo3">Add New</a>
          </h6>
           

          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">SL</th>
                  <th class="wd-15p">User Name</th>
                  <th class="wd-15p">Email</th>
                  <th class="wd-15p">Address</th>
                  <th class="wd-15p">Phone Number</th>
                  <th class="wd-20p">Action</th>
                  
                </tr>
              </thead>
              <tbody>
                @foreach($users as $key=>$row)
                <tr>
                  <td style="font-family: Arial;color: black;">{{ $key +1 }}</td>
                  <td style="font-family:Arial;color: black;">{{ $row->name }}</td>
                  <td style="font-family:Arial;color: black;">{{ $row->email }}</td>
                  <td style="font-family:Arial;color: black;">{{ $row->present_address }}</td>
                  <td style="font-family:Arial;color: black;">{{ $row->phone }}</td>
                  <td>
                    <a href="{{ URL::to('edit/user/'.$row->id) }} " class="btn btn-sm btn-info">Edit</a>
                    <a href="{{ URL::to('delete/user/'.$row->id) }}" class="btn btn-sm btn-danger" id="delete">Delete</a>
                  </td>
                   
                </tr>
                @endforeach
                 
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->

        

 
    </div><!-- sl-mainpanel -->



  <!-- LARGE MODAL -->
        <div id="modaldemo3" class="modal fade">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content tx-size-sm">
              <div class="modal-header pd-x-20">
                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Create New User</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
             
 
       <form method="post" action="{{ route('store.user') }}">
        @csrf
         <div class="modal-body pd-20"> 

        <div class="row">
          <div class="col-lg-6">
          <div class="form-group">
          <label for="exampleInputEmail1">User Name</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name" name="name">
          
        </div>
          </div>
          <div class="col-lg-6">
          <div class="form-group">
          <label for="exampleInputEmail1">User Email</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email" name="email">
          
        </div>
          </div>
        </div>

        
       
        <div class="form-group">
          <label for="exampleInputEmail1">User Phone</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Phone Number" name="phone">
          
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">User Address</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Address" name="present_address">
          
        </div>
          
              </div><!-- modal-body -->
              <div class="modal-footer">
                <button type="submit" class="btn btn-info pd-x-20" >Sumbit</button>
                <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
              </div>
                </form>
            </div>
          </div><!-- modal-dialog -->
        </div><!-- modal -->


@endsection