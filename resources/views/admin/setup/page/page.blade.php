@extends('admin.admin_layout')

@section('admin_panel')


 <div class="sl-mainpanel">
     

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5 style="text-align: center";>Page Setup Table</h5>
         
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title" style="text-align: center;">Page Setup List
  <a href="#" class="btn btn-sm btn-warning" style="float: right;" data-toggle="modal" data-target="#modaldemo3">Add New</a>
          </h6>
           

          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">SL</th>
                  <th  class="wd-15p">Page Name</th>
                  <th  class="wd-15p">Section Number</th>
                  <th class="wd-15p">Header Text</th>
                  <th class="wd-15p">Sub Text</th>
                  <th class="wd-15p">image</th>
                  <th class="wd-20p">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($page as $key=>$row)
                <tr>

                  <td style="font-family: Arial;color: black;">{{ $key +1 }}</td>
                  <td style="font-family: Arial;color: black;">{{$row->value}}</td>
                  <td style="font-family: Arial;color: black;">{{ $row->section_id}}</td>
                  <td style="font-family:Arial;color: black;">{{ str_limit( $row->header_text , $limit = 20, $end = '...') }}</td>
                  <td style="font-family:Arial;color: black;">{{ str_limit($row->sub_text , $limit =50, $end = '...') }}</td>

                  <td style="font-family:Arial;color: black;"> <img src="{{ URL::to($row->img) }}" height="50px;" width="50px;"></td>
                  <td>
                    <a href="{{ URL::to('edit/pagesetup/'.$row->id) }} " class="btn btn-sm btn-info">Edit</a>
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
                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Code Master Add</h6>
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
       <form method="post" action="{{ route('store.pagesetup') }}" enctype="multipart/form-data">
        @csrf



         <div class="modal-body pd-20 "> 
      
         <div class="form-group">
          <label for="exampleInputEmail1" style="color: black;">Select Page Name</label>
           <select class="form-control" name="page_id">
          @foreach($pageNames as $row)
          <option value="{{ $row->id }}"> {{ $row->value }}  </option> 
          @endforeach  
           </select>
        </div>
        
         <div class="form-group">
          <label for="exampleInputEmail1" style="color: black;">Select Section</label>
           <select class="form-control" name="section_id">
          @foreach($sectionNames as $row)
          <option value="{{ $row->value }}"> {{ $row->value }}  </option> 
          @endforeach  
           </select>
        </div>


        <div class="form-group p-20">
            <label class="form-control-label">Section Header Text: <span class="tx-danger">*</span></label>
            <textarea class="form-control"  name="header_text"> 
            </textarea>
        </div>
      

     
        <div class="form-group">
            <label class="form-control-label">Section Sub Text: <span class="tx-danger">*</span></label>
            <textarea class="form-control" id="summernote1" name="sub_text"> 
            </textarea>
        </div>
        

        <table>
        <tbody class="addMoreProduct">
                <thead>
                <tr>
                  <th class="wd-10p text-center">
                    
                  <a href="#" class="btn btn-sm btn-success add_more">
                        <i class="fa fa-plus-circle"></i>
                    </a>
                </th>
                  
                </tr>
              </thead>
            <tr>
              
                <td style="color: black;">
                        <input type="file" id="img" name="img[]" class="form-control  img">
                </td>
            </tr>
              
               
                 
              </tbody>
            </table>

<!-- 
        <div class="form-group">
            <label class="form-control-label">Section Image <span class="tx-danger">*</span></label>
            <label class="custom-file">
        <input type="file" id="file" class="custom-file-input" name="img" onchange="readURL(this);" >
        <span class="custom-file-control"></span>
        <img src="#" id="one">
            </label>

          
              </div> --><!-- modal-body -->
              <div class="modal-footer">
                <button type="submit" class="btn btn-info pd-x-20" >Sumbit</button>
                <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
              </div>
                </form>
            </div>
          </div><!-- modal-dialog -->
        </div><!-- modal -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>


        <script type="text/javascript">
  function readURL(input){
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $('#one')
        .attr('src', e.target.result)
        .width(100)
        .height(100);
      };
      reader.readAsDataURL(input.files[0]);
    }
  }
</script>
        <script type="text/javascript">
  function readURL2(input){
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $('#two')
        .attr('src', e.target.result)
        .width(100)
        .height(100);
      };
      reader.readAsDataURL(input.files[0]);
    }
  }
</script>
<script type="text/javascript">
    $('.add_more').on('click',function(){
      var product = $('.img').html();
      
    
      var numberofrow = ($('.addMoreProduct tr').length - 0)+1;
      var tr = '<tr>' +
                '<td><input type="file" id="img" name="img[]" class="form-control mx-3 img"></td>' 

          console.log(tr,"tr");
          $('.addMoreProduct').append(tr);
    });

</script>

@endsection