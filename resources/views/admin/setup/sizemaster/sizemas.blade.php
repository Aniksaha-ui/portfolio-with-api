@extends('admin.admin_layout')

@section('admin_panel')


 <div class="sl-mainpanel">
     

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5 style="text-align: center";>Size Master Table</h5>
         
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title" style="text-align: center;">Size List
  <a href="#" class="btn btn-sm btn-warning" style="float: right;" data-toggle="modal" data-target="#modaldemo3">Add New</a>
          </h6>
           

          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">Sl</th>
                  <th class="wd-15p">Key</th>
                  <th class="wd-15p">Value</th>
                </tr>
              </thead>
              <tbody>
                @foreach($codemas as $key=>$row)
                <tr>
                  <td style="font-family: Arial;color: black;">{{ $key +1 }}</td>
                  <td style="font-family:Arial;color: black;">{{ $row->hardcode }}{{ $row->softcode }}</td>
                  <td style="font-family:Arial;color: black;">{{ $row->value }}</td>
                  
                   
                </tr>
                @endforeach
                 
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->

        

 
    </div><!-- sl-mainpanel -->



    <div id="modaldemo3" class="modal fade">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content tx-size-sm">
              <div class="modal-header pd-x-20">
                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Color Add</h6>
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
       <form method="post" action="{{ route('store.codemas') }}">
        @csrf
         <div class="modal-body pd-20"> 
        
            <div class="form-layout">
              <div class="row mg-b-25">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1" style="color: black;">Code For</label>
                    <select class="form-control" name="softcode">
                  
                    @foreach($keyword as $row)
                    <option value="{{ $row->softcode }}"> {{ $row->softcode }}  </option> 
                    @endforeach  

                    </select>
          
                  </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Value</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Value" name="value">
                      
                    </div>
                </div>
                <div class="col-lg-12">

                      <div class="modal-footer">
                        <button type="submit" class="btn btn-info pd-x-20" >Sumbit</button>
                        <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
                      </div>
                </div>
              </div>
            </div>



       
     
     
          
              </div><!-- modal-body -->
          
                </form>
            </div>
          </div><!-- modal-dialog -->
        </div><!-- modal -->


@endsection