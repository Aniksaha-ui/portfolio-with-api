@extends('admin.admin_layout')

@section('admin_panel')


 <div class="sl-mainpanel">
     

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5 style="text-align: center";>Contact Table</h5>
         
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title" style="text-align: center;">Contact List
  <a href="#" class="btn btn-sm btn-warning" style="float: right;" data-toggle="modal" data-target="#modaldemo3">Add New</a>
          </h6>
           

          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                    <th class="wd-5p">ID</th>
                    <th class="wd-5p">Contact name</th>
                    <th class="wd-5p">Designation</th>
                    <th class="wd-5p">Address</th>
                    <th class="wd-5p">Cell 1</th>
                    <th class="wd-5p">Cell 2</th>
                    <th class="wd-5p">Email 1</th>
                    <th class="wd-5p">Email 2</th>
                    <th class="wd-5p">Email 3</th>
                    <th class="wd-10p">Action</th>
                  
                </tr>
              </thead>
              <tbody>
                @foreach($contacts as $key=>$row)
                <tr>
                  <td style="font-family: Arial;color: black;">{{ $key +1 }}</td>
                  <td style="font-family:Arial;color: black;">{{ $row->person_name }}</td>
                  <td style="font-family:Arial;color: black;">{{ $row->designation }}</td>
                  <td style="font-family:Arial;color: black;">{{ $row->address}}</td>
                  <td style="font-family:Arial;color: black;">{{ $row->cell_1 }}</td>
                  <td style="font-family:Arial;color: black;">{{ $row->cell_2 }}</td>
                  <td style="font-family:Arial;color: black;">{{ $row->email_1 }}</td>
                  <td style="font-family:Arial;color: black;">{{ $row->email_2 }}</td>
                  <td style="font-family:Arial;color: black;">{{ $row->email_3 }}</td>
                  <td>
                    <a href="{{ URL::to('edit/contact/'.$row->id) }} " class="btn btn-sm btn-info">Edit</a>
                    <a href="{{ URL::to('delete/contact/'.$row->id) }}" class="btn btn-sm btn-danger" id="delete">Delete</a>
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
                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Contact Add</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
             
      @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif
    <form method="post" action="{{ route('store.contactmaster') }}" enctype="multipart/form-data">
        @csrf
         <div class="modal-body pd-20"> 

              <div class="row">
                <div class="col-lg-6">
                      <div class="form-group">
                          <label for="exampleInputEmail1">Contact Name</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Contact" name="person_name">
                          
                      </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                            <label for="exampleInputEmail1">Designation</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Contact" name="designation">
                            
                    </div>
                </div>
               
              </div>


              <div class="row">
                <div class="col-lg-4">
                      <div class="form-group">
                          <label for="exampleInputEmail1">Contact Email 1</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Contact Email 1" name="email_1">
                          
                      </div>
                </div>
                <div class="col-lg-4">
                      <div class="form-group">
                          <label for="exampleInputEmail1">Contact Email 2</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Contact Email 2" name="email_2">
                          
                      </div>
                </div>
                <div class="col-lg-4">
                      <div class="form-group">
                          <label for="exampleInputEmail1">Contact Email 3</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Contact Email 3" name="email_3">
                          
                      </div>
                </div>
              </div>


              <div class="row">
                <div class="col-lg-4">
                      <div class="form-group">
                          <label for="exampleInputEmail1">Phone 1</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Contact Phone Number 1" name="cell_1">
                          
                      </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                            <label for="exampleInputEmail1">Phone 2</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Contact Phone Number 2" name="cell_2">  
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                            <label for="exampleInputEmail1">Address</label>
                            <!-- <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Contact" name="address"> -->
                            <textarea class="form-control" placeholder="Please enter your address"  name="address"> 
                            </textarea>
                    </div>
                </div>

              </div>

             

        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-info pd-x-20" >Sumbit</button>
          <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
        </div>
    </form>
            </div>
          </div>
        </div>


@endsection