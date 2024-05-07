@extends('admin.admin_layout')

<link href="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.css" rel="stylesheet" />


@section('admin_panel')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="#">Starlight</a>
            <span class="breadcrumb-item active">Blog Section</span>
        </nav>

        <div class="sl-pagebody text-dark">


            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">New Blog
                    <a href="{{ route('all.blog') }}" class="btn btn-success btn-sm pull-right text-dark"> All Blogs</a>
                </h6>
                <p class="mg-b-20 mg-sm-b-30 text-dark">Blog Add From</p>

                <form method="post" action="{{ route('store.blog') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="form-layout">
                        <div class="row mg-b-25">
                            <!-- Title  -->
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Title: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="title"
                                        placeholder="Enter Title of the blog">
                                </div>
                            </div>
                            <!-- Title  -->
    
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Type: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="type"
                                        placeholder="Enter type of the blog">
                                </div>
                            </div>
                            
                            
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Icon Name(font awsome icon name): <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="icon_name"
                                        placeholder="Enter icon name">
                                </div>
                            </div>


                            <!-- Blog Short Description  -->

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label">* Blog Details <span
                                            class="tx-danger"></span></label>

                                    <textarea class="form-control" id="summernote1" name="description"> 

                                   </textarea>

                                </div>
                            </div>

                            <!-- Blog Short Description  -->

                            <!-- Blog Description  -->

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label">* Blog Short Details(30-50 words)<span
                                            class="tx-danger"></span></label>

                                    <textarea class="form-control" id="summernote2" name="short_description"> 
                                    </textarea>

                                </div>
                            </div>

                            <!-- Blog Short Description  -->

                        </div>
                        <hr>
                        <br><br><br><br>




                        <div class="form-layout-footer">
                            <button class="btn btn-info mg-r-5">Submit Form</button>
                            <button class="btn btn-secondary">Cancel</button>
                        </div>
                    </div>
            </div>
            </form>
        </div>


    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            // alert("Hello");
            $('select[name="category_id"]').on('blur', function() {
                var category_id = $(this).val();
                if (category_id) {

                    $.ajax({
                        url: "{{ url('/get/subcategory/') }}/" + category_id,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            var d = $('select[name="subcategory_id"]').empty();
                            $.each(data, function(key, value) {

                                $('select[name="subcategory_id"]').append(
                                    '<option value="' + value.id + '">' + value
                                    .subcategory_name + '</option>');

                            });
                        },
                    });

                } else {
                    // alert('danger');
                }




            });
        });

        $(document).ready(function() {

            // var category = document.getElementById('category_id').val();
            // console.log(category,"category");
            // alert("Hello");

            $('select[name="subcategory_id"]').on('blur', function() {
                var categoryId = document.getElementById('category_id').value;
                console.log(categoryId, "categoryId");
                var subcategory_id = $(this).val();
                if (subcategory_id) {

                    $.ajax({
                        url: `{{ url('get/lastlavel/') }}/${categoryId}/${subcategory_id}`,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            var d = $('select[name="lastlavel"]').empty();
                            $('select[name="lastlavel"]').append('<option value=""></option>');

                            $.each(data, function(key, value) {
                                // console.log(data);
                                $('select[name="lastlavel"]').append('<option value="' +
                                    value.id + '">' + value.lastlevel + '</option>');

                            });
                        },
                    });

                } else {
                    // alert('danger');
                }

            });
        });
    </script>



    <script type="text/javascript">
        function readURL(input) {
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
        function readURL2(input) {
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
        function readURL3(input) {
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
