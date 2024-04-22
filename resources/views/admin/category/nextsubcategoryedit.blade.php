@extends('admin.admin_layout')

@section('admin_panel')

 <div class="sl-mainpanel">
     

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Next Sub-Category Update</h5>
         
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Next Sub-Category Update
   
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
       <form method="post" action="{{ url('update/nextsubcategory/'.$lastlavel->id) }}">
        @csrf
         <div class="modal-body pd-20"> 
        

        <div class="form-group">
          <label for="exampleInputEmail1"> Category Name</label>

          <select class="form-control select2" id="category_id" data-placeholder="Choose country" name="category_id">
          
          @foreach($category as $row)
          <option value="{{ $row->id }}"
      <?php if ($row->id == $lastlavel->category_id ) {
       echo "selected"; } ?> >{{ $row->category_name }}</option> 
          @endforeach

          </select>
        </div>


        <div class="form-group">
          <label for="exampleInputEmail1"> Sub Category Name</label>

          <select class="form-control select2" id="subcategory_id" data-placeholder="Choose country" name="subcategory_id">
          
          @foreach($subcategory as $row)
          <option value="{{ $row->id }}"
      <?php if ($row->id == $lastlavel->subcategory_id ) {
       echo "selected"; } ?> >{{ $row->subcategory_name }}</option> 
          @endforeach

          </select>
        </div>

    
        <div class="form-group">
          <label for="exampleInputEmail1">Next Sub-Category Name</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $lastlavel->lastlevel }}" name="lastlevel">
          
        </div>  
        


          
              </div><!-- modal-body -->
              <div class="modal-footer">
                <button type="submit" class="btn btn-info pd-x-20">Update</button>
                 
              </div>
                </form>


          </div><!-- table-wrapper -->
        </div><!-- card -->

        

 
    </div><!-- sl-mainpanel -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>

    <script type="text/javascript">

    
$(document).ready(function(){
  // alert("Hello");
$('select[name="category_id"]').on('change',function(){
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