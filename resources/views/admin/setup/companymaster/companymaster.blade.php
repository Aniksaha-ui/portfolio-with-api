@extends('admin.admin_layout')

@section('admin_panel')


 <div class="sl-mainpanel">
     

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5 style="text-align: center";>Company Master Table</h5>
         
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title" style="text-align: center;">Company List

          </h6>
           

          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-5p">Sl</th>
                  <th class="wd-5p">Company Name</th>
                  <th class="wd-5p">CEO</th>
                  <th class="wd-5p">Chairman</th>
                  <th class="wd-5p">Director</th>
                  <th class="wd-5p">Company Nature</th>
                  <th class="wd-5p">Corporate_office</th>
                  <th class="wd-5p">Office Telephone_1</th>
                  <th class="wd-5p">Office Telephone_2</th>
                  <th class="wd-5p">Email_1</th>
                  <th class="wd-5p">Email_2</th>
                  <th class="wd-5p">Ceo_phone_1</th>
                  <th class="wd-5p">Ceo_phone_2</th>
                  <th class="wd-5p">Chairman_phone_1</th>
                  <th class="wd-5p">Chairman_phone_2</th>
                  <th class="wd-5p">Director_phone_1</th>
                  <th class="wd-5p">Director_phone_2</th>
                  <th class="wd-5p">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($company as $key=>$row)
                <tr>
                  <td style="font-family: Arial;color: black;">{{ $key +1 }}</td>
                  <td style="font-family: Arial;color: black;">{{$row->name}}</td>
                  <td style="font-family: Arial;color:black;">{{$row->ceo}}</td>
                  <td style="font-family: Arial;color: black;">{{$row->chairman}}</td>
                  <td style="font-family:Arial;color: black;">{{$row->director}}</td>
                  <td style="font-family: Arial;color: black;">{{$row->NOC}}</td>
                  <td style="font-family: Arial;color: black;">{{$row->corporate_office}}</td>
                  <td style="font-family: Arial;color: black;">{{$row->telephone_1}}</td>
                  <td style="font-family: Arial;color: black;">{{$row->telephone_2}}</td>
                  <td style="font-family: Arial;color: black;">{{$row->email_1}}</td>
                  <td style="font-family: Arial;color: black;">{{$row->email_2}}</td>
                
                  <td style="font-family: Arial;color: black;">{{$row->ceo_phone_1}}</td>
                  <td style="font-family: Arial;color: black;">{{$row->ceo_phone_2}}</td>
      
                  <td style="font-family: Arial;color: black;">{{$row->chairman_phone_1}}</td>
                  <td style="font-family:Arial;color: black;">{{$row->chairman_phone_2}}</td>
                
                  <td style="font-family:Arial;color: black;">{{$row->director_phone_1}}</td>
                  <td style="font-family:Arial;color: black;">{{$row->director_phone_2}}</td>
                  <td><a href="{{ URL::to('edit/company/'.$row->id) }}" class="btn btn-sm btn-info">Edit</a></td>
                   
                </tr>
                @endforeach
                 
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->

        

 
    </div><!-- sl-mainpanel -->



 <!-- LARGE MODAL -->
 <!-- <div id="modaldemo3" class="modal fade">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content tx-size-sm">
              <div class="modal-header pd-x-20">
                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Company Add</h6>
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
       <form method="post" action="{{ route('store.companymaster') }}">
        @csrf
         <div class="modal-body pd-20"> 
        
            <div class="form-layout">
              <div class="row mg-b-25">
               
                <div class="col-lg-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Value</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Value" name="value">
                      
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Value</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Value" name="value">
                      
                    </div>
                </div>
              
              </div>
            </div>



       
     
     
          
              </div>
          
                </form>
            </div>
          </div>
        </div> -->


@endsection