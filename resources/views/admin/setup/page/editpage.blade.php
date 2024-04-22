@extends('admin.admin_layout')

@section('admin_panel')

 <div class="sl-mainpanel">
     

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Page Setup</h5>
         
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title text-center">Page Update
   
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
       <form method="post" action="{{ url('update/pagesetup/'.$pagesetup->id) }}" enctype="multipart/form-data" >
        @csrf
         <div class="modal-body pd-20"> 
      


        <div class="form-group">
            <label class="form-control-label">Section Header Text: <span class="tx-danger">*</span></label>
            <textarea class="form-control"  name="header_text"> {{$pagesetup->header_text}}
            </textarea>
        </div>
     

        <div class="form-group">
            <label class="form-control-label">Section Sub Text: <span class="tx-danger">*</span></label>
            <textarea class="form-control" id="summernote1" name="sub_text"> {{$pagesetup->sub_text}}
            </textarea>
        </div>
          
        <div class="form-group">
          <label for="exampleInputEmail1">Section Image</label>
          <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $pagesetup->img }}" name="brand_logo">
        
        </div>


             

                


        <div class="form-group">
          <label for="exampleInputEmail1"> Old Brand Logo</label>
          <img src="{{ URL::to($pagesetup->img) }}" height="70px;" width="90px;">
        <input type="hidden" name="img" value="{{ $pagesetup->img }}">   
          
        </div>

        

              </div><!-- modal-body -->
              <div class="modal-footer">
                <button type="submit" class="btn btn-info pd-x-20">Update</button>
                 
              </div>
                </form>
                </div>

          </div><!-- table-wrapper -->
        </div><!-- card -->

        

 
    </div><!-- sl-mainpanel -->


    <script type="text/javascript">
  function readURL(input){
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