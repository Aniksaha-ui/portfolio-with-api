@extends('admin.admin_layout')

@section('admin_panel')

 <div class="sl-mainpanel">
     

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Sub Category Table</h5>
         
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Sub Category List
  <a href="#" class="btn btn-sm btn-warning" style="float: right;" data-toggle="modal" data-target="#modaldemo3">Add New</a>
          </h6>
           

          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">ID</th>
                  <th class="wd-15p">Sub Category name</th>
                  <th class="wd-15p">Category name</th>
                  <th class="wd-20p">Action</th>
                  
                </tr>
              </thead>
              <tbody>
                @foreach($subcat as $key=>$row)
                <tr>
                  <td style="color: black;">{{ $key +1 }}</td>
                  <td style="color: black;">{{ $row->subcategory_name }}</td>
                   <td style="color: black;">{{ $row->category_name }}</td>
                  <td>
                    <a href="{{ URL::to('edit/subcategory/'.$row->id) }} " class="btn btn-sm btn-info">Edit</a>
                    <a href="{{ URL::to('delete/subcategory/'.$row->id) }}" class="btn btn-sm btn-danger" id="delete">Delete</a>
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
                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Sub Category Add</h6>
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
       <form method="post" action="{{ route('store.subcategory') }}">
        @csrf
         <div class="modal-body pd-20">
          <div class="form-layout">
            <div class="row mg-b-25">
                <div class="col-lg-6">
                      <div class="form-group">
                        <label for="exampleInputEmail1" style="color: black;">Category Name</label>
                        <select class="form-control" name="category_id">
                      
                        @foreach($category as $row)
                        <option value="{{ $row->id }}"> {{ $row->category_name }}  </option> 
                        @endforeach  

                        </select>
                        
                      </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1" style="color: black;">Sub Category Name</label>
                      <input type="text" style="color: black;" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Sub Category" name="subcategory_name">
                      
                    </div>     
                  </div>
            
            </div>
          </div> 

              </div><!-- modal-body -->
              <div class="modal-footer" style="margin-top:-4%">
                <button type="submit" class="btn btn-info pd-x-20">Sumbit</button>
                <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
              </div>
                </form>
            </div>
          </div><!-- modal-dialog -->
        </div><!-- modal -->

 

@endsection