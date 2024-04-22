@extends('admin.admin_layout')

 <link href="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.css" rel="stylesheet"/>


@section('admin_panel')
  <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <span class="breadcrumb-item active">Product Section</span>
      </nav>

      <div class="sl-pagebody">

 
 <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">New Product ADD
 <a href="{{ route('all.product')}}" class="btn btn-success btn-sm pull-right"> All Product</a>
          </h6>
          <p class="mg-b-20 mg-sm-b-30">New Prodcut Add From</p>

       <form method="post" action="{{route('store.product')}}" enctype="multipart/form-data">    
        @csrf

          <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Product Name: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="product_name"  placeholder="Enter Product Name">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Product Code: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="product_code"  placeholder="Enter Product Code">
                </div>
              </div><!-- col-4 -->
             


             

               
              <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Category: <span class="tx-danger">*</span></label>
       <select class="form-control select2" id="category_id" data-placeholder="Choose country" name="category_id">
                    <option label="Choose Category"></option>
                    @foreach($category as $row)
                    <option value="{{ $row->id }}">{{ $row->category_name }}</option>
                    @endforeach
                  </select>
                </div>
              </div><!-- col-4 -->


              <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Sub Category: <span class="tx-danger">*</span></label>
       <select class="form-control select2" data-placeholder="Choose country" name="subcategory_id">
                     
                  </select>
                </div>
              </div><!-- col-4 -->



              <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Last lavel <span class="tx-danger">*</span></label>
       <select class="form-control select2" data-placeholder="Choose lastlavel" name="lastlavel">
                     
                  </select>
                </div>
              </div><!-- col-4 -->



              <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Brand: <span class="tx-danger">*</span></label>
       <select class="form-control select2" data-placeholder="Choose country" name="brand_id">
                    <option label="Choose Brand"></option>

                    @foreach($brand as $br)
                    <option value="{{ $br->id }}">{{ $br->brand_name }}</option>
                     @endforeach
                  </select>
                </div>
              </div><!-- col-4 -->

              <!-- <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Product Size: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="product_size" id="size" >
                </div>
              </div> -->
              <!-- col-4 -->

<!-- <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Product Color: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="product_color" id="color" >
                </div>
              </div>
               -->
                <!-- col-4 -->


              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Selling Price: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="selling_price" placeholder="Enter Product Price" >
                </div>
              </div><!-- col-4 -->


               <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">Product Details: <span class="tx-danger">*</span></label>
  
            <textarea class="form-control" id="summernote1"  name="product_details"> 

             </textarea>
                   
                </div>
              </div><!-- col-4 -->

               



 <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Feature image<span class="tx-danger">*</span></label>
                 <label class="custom-file">
          <input type="file" id="file" class="custom-file-input" name="image_one" onchange="readURL(this);" required="">
          <span class="custom-file-control"></span>
          <img src="#" id="one">
            </label>

                </div>
              </div><!-- col-4 -->


               <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Multi Image: <span class="tx-danger">*</span></label>
                 <label class="custom-file">
                 <input required type="file" class="form-control" name="multiimage[]" placeholder="address" multiple>
          <span class="custom-file-control"></span>
          <img src="#" id="two">
            </label>

                </div>
              </div>




 <!-- <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Image Three: <span class="tx-danger">*</span></label>
                 <label class="custom-file">
          <input type="file" id="file" class="custom-file-input" name="image_three" onchange="readURL3(this);" required="">
          <span class="custom-file-control"></span>
          <img src="#" id="three">
            </label>

                </div>
              </div><!-- col-4 --> 

            <!-- </div>row --> -->
</div>
  <hr>
  <br><br><br><br>

          


            <div class="form-layout-footer">
              <button class="btn btn-info mg-r-5">Submit Form</button>
              <button class="btn btn-secondary">Cancel</button>
            </div><!-- form-layout-footer -->
          </div><!-- form-layout -->
        </div><!-- card -->

        </form> 



        
        </div><!-- row -->

  
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->


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
  function readURL3(input){
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $('#three')
        .attr('src', e.target.result)
        .width(100)
        .height(100);
      };
      reader.readAsDataURL(input.files[0]);
    }
  }
</script>

@endsection
