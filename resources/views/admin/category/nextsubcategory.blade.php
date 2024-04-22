@extends('admin.admin_layout')

@section('admin_panel')


 <div class="sl-mainpanel">
     

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5 style="text-align: center";>Next SubCategory Table</h5>
         
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title" style="text-align: center;">Next Subcategory List
  <a href="#" class="btn btn-sm btn-warning" style="float: right;" data-toggle="modal" data-target="#modaldemo3">Add New</a>
          </h6>
           

          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">ID</th>
                  <th class="wd-15p">Category name</th>
                  <th class="wd-15p">Sub Category name</th>
                  <th class="wd-15p">Next Lavel Cate</th>
                  <th class="wd-20p">Action</th>
                  
                </tr>
              </thead>
              <tbody>
                @foreach($nextsubcategory as $key=>$row)
                <tr>
                  <td style="font-family: Arial;color: black;">{{ $key +1 }}</td>
                  <td style="font-family:Arial;color: black;">{{ $row->category_name }}</td>
                  <td style="font-family:Arial;color: black;">{{ $row->subcategory_name }}</td>
                  <td style="font-family:Arial;color: black;">{{ $row->lastlevel }}</td>
                  <td>
                    <a href="{{ URL::to('edit/nextsubcategory/'.$row->id) }} " class="btn btn-sm btn-info">Edit</a>
                    <a href="{{ URL::to('delete/nextsubcategory/'.$row->id) }}" class="btn btn-sm btn-danger" id="delete">Delete</a>
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
                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Next Subcategory Add</h6>
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
       <form method="post" action="{{ route('store.nextsubcategory') }}">
        @csrf
         <div class="modal-body pd-20"> 
             <div class="form-layout">
                <div class="row mg-b-25">
                  <div class="col-lg-6">
                    <div class="form-group mg-b-10-force">
                        <label class="form-control-label">Category: <span class="tx-danger">*</span></label>
                        <select class="form-control select2" id="category_id" data-placeholder="Choose country" name="category_id">
                          <option label="Choose Category"></option>
                          @foreach($category as $row)
                          <option value="{{ $row->id }}">{{ $row->category_name }}</option>
                          @endforeach
                        </select>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group mg-b-10-force">
                    <label class="form-control-label">Sub Category: <span class="tx-danger">*</span></label>
                    <select class="form-control select2" data-placeholder="Choose country" name="subcategory_id">
                    </select>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label">Next Sub-Category: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" name="lastlevel" id="color">
                    </div>
                  </div>    

                </div>
             </div>
           


            

       
          
              </div><!-- modal-body -->
              <div class="modal-footer" style="margin-top:2%">
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

    
      $(document).ready(function(){
        // alert("Hello");
     $('select[name="category_id"]').on('blur',function(){
          var category_id = $(this).val();
          if (category_id) {
            
            $.ajax({
              url: "{{ url('/get/subcategory/') }}/"+category_id,
              type:"GET",
              dataType:"json",
              success:function(data) { 
              var d =$('select[name="subcategory_id"]').empty();
              $.each(data, function(key, value){
              
              $('select[name="subcategory_id"]').append('<option value="'+ value.id + '">' + value.subcategory_name + '</option>');

              });
              },
            });

          }else{
            // alert('danger');
          }


          

            });
      });

  $(document).ready(function(){

    // var category = document.getElementById('category_id').val();
    // console.log(category,"category");
    // alert("Hello");

 $('select[name="subcategory_id"]').on('blur',function(){
  var categoryId = document.getElementById('category_id').value;
      console.log(categoryId,"categoryId");
      var subcategory_id = $(this).val();
      if (subcategory_id) {
        
        $.ajax({
          url: `{{ url('get/lastlavel/') }}/${categoryId}/${subcategory_id}`,
          type:"GET",
          dataType:"json",
          success:function(data) { 
          var d =$('select[name="lastlavel"]').empty();
          $('select[name="lastlavel"]').append('<option value=""></option>');

          $.each(data, function(key, value){
          // console.log(data);
          $('select[name="lastlavel"]').append('<option value="'+ value.id + '">' + value.lastlevel + '</option>');

          });
          },
        });

      }else{
        // alert('danger');
      }

        });
  });

</script>



@endsection