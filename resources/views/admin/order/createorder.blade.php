@extends('admin.admin_layout')

@section('admin_panel')

  
  <div class="sl-mainpanel">
     

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Create Order</h5>
         
        </div><!-- sl-page-title -->
        <form action="{{ route('store.order')}}" method="post" enctype="multipart/form-data">
          @csrf
        <div class="row">
        
        
     

                  <div class="col-lg-8">
          <div class="card pd-20 pd-sm-40"> 
        <div class="card-header">
            <h4>Order Product</h4>
            @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>Validation error - Deplicate product</li>
                      @endforeach
                  </ul>
              </div>
           @endif
        </div>
          <div class="table-wrapper">
            <table class="table table-bordered">
              <thead>
                <tr>
                    
                  <th class="wd-25p text-center">Product Name</th>
                  <th class="wd-15p text-center">Qty</th>
                  <th class="wd-15p text-center">Price</th>
                  <th class="wd-15p text-center">Color</th>
                  <th class="wd-15p text-center">Size</th>
                  <th class="wd-40p text-center">Total</th>
                  <!-- <th class="wd-15p">Brand Logo</th> -->
                  <th class="wd-10p text-center">
                    
                  <a href="#" class="btn btn-sm btn-success add_more">
                        <i class="fa fa-plus-circle"></i>
                    </a>
                </th>
                  
                </tr>
              </thead>
              <tbody class="addMoreProduct">
               
                <tr>
                <td>
                      
                        <select id="product_id" class="form-control product_id" name="product_id[]">
                          <option value="">Select Product</option>
                            @foreach($products as $row)
                                <option data-price="{{$row->selling_price}}" data-color="{{$row->product_color}}" data-size="{{$row->product_size}}"  value="{{ $row->id }}"> {{ $row->product_name }}  </option> 
                            @endforeach  
        
                        </select>
                </td>
            
                <td style="color: black;">
                    
                        <input type="number" id="quantity" name="quantity[]" class="form-control mx-3 quantity">
                </td>

                  <td style="color: black;">
                  <input type="number" id="price" name="price[]" class="form-control mx-3 price">

                </td>
               
                    
                <td style="color: black;">
                <select id="product_color" name="product_color[]" class="form-control product_color" >
                    @foreach($color as $row)
                        <option value="{{ $row->value }}"> {{ $row->value }}  </option> 
                    @endforeach  

                </select>
                  
                </td>


                <td style="color: black;">
                <select id="product_size" name="product_size[]" class="form-control product_size" >
                    @foreach($size as $row)
                        <option value="{{ $row->value }}"> {{ $row->value }}  </option> 
                    @endforeach  

                </select>
                  
                </td>


                <td style="color: black;">
                  <input type="number" id="total_amount" name="total_amount[]" class="form-control total_amount">

                 </td>
                 
                  
                  <td>
                  <a href="#" class="btn btn-sm btn-danger delete">
                        <i class="fa fa-times"></i>
                    </a>
                  </td>
                   
                </tr>
              
               
                 
              </tbody>
            </table>

            <div class="card">
              <p class="text-right" style="margin-right:80px">Total=<b class="total">0</b></p>
            </div>
          </div><!-- table-wrapper -->
        </div><!-- card -->

          </div>


          <div class="col-lg-4">
          <div class="card">
            <div class="card-header">
                <h4 class="text-center">Customer Information</h4>
            </div>
                <div class="card-body" style="padding:20px">
                  <div class="panel">
                      <div class="row">
                        <table class="table table-striped">
                        <tr>
                            <td colspan="2">
                              <label for="">Order Number</label>
                              <input class="form-control" type="text" name="order_number"  placeholder="Enter Order Number">
                            </td>
                            
                          </tr>
                        
                          <tr>
                            <td>
                              <label for="">Customer Name</label>
                              <select  class="form-control" name="ship_name">
                                <option style="font-size:20px" value="">Select Customer</option>
                                  @foreach($user as $row)
                                      <option style="font-size:20px" value="{{ $row->id }}"> {{ $row->name }}  </option> 
                                  @endforeach  
                               </select>
                            </td>
                            <td>
                              <label for="">Phone Number</label>
                                <input class="form-control" type="text" name="ship_phone"  placeholder="Enter phone number">
                            </td>

                          </tr>
                          <tr>
                            <td>
                            <label for="">Email</label>
                                <input class="form-control" type="text" name="ship_email"  placeholder="Enter Email">
                            </td>
                            <td>
                              <label for="">Address*</label>
                                <input class="form-control" type="text" name="ship_address"  placeholder="Enter Address">
                            </td>
                           
                            

                          </tr>

                          <tr>
                            
                          <td>
                              <label for="">City*</label>
                                <input class="form-control" type="text" name="ship_city"  placeholder="Enter Address">
                            </td>
                          <td>
                              <label for="">Order Date*</label>
                                <input class="form-control" type="date" name="date"  placeholder="Enter Date">
                            </td>

                          
                          </tr>
                          <tr>
                            <td>
                              <button type="submit" class="btn btn-primary btn-block">Save</button>
                            </td>
                          </tr>
                        </table>
                      </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </form>
 
    </div><!-- sl-mainpanel -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>

 <script type="text/javascript">
    $('.add_more').on('click',function(){
      var product = $('.product_id').html();
      var color =$('.product_color').html();
      var size =$('.product_size').html();
    
      var numberofrow = ($('.addMoreProduct tr').length - 0)+1;
      var tr = '<tr>' +
                '<td><select class="form-control product_id" name="product_id[]" >' + product + '<select></td>' + 
                '<td><input type="number" name="quantity[]" class="form-control quantity"/></td>' + '<td><input type="number" name="price[]" class="form-control price"/></td>' 
                +'<td><select class="form-control product_color" name="product_color[]" >' + color + '<select></td>'
                 +'<td><select class="form-control product_size" name="product_size[]" >' + size + '<select></td>'
                +'<td><input type="number" name="total_amount[]" class="form-control total_amount"/></td>' +
                '<td><a class="btn btn-sm btn-danger delete"><i class="fa fa-times"></i></a></td>'

          console.log(tr,"tr");
          $('.addMoreProduct').append(tr);
    });

    $('.addMoreProduct').delegate('.delete','click',function(){
     
      $(this).parent().parent().remove();
    });

    function TotalAmount(){
      var total=0;
      $('.total_amount').each(function(i,e){
        var amount = $(this).val() - 0;
        total +=amount;
      });
      // console.log(total,"total");
      // console.log( $('.total').html(total),"totallllll");
      $('.total').html(total);

    }

    
    $('.addMoreProduct').delegate('.product_id','change',function(){
    //  console.log("hitted");
      var tr= $(this).parent().parent();
      var price = tr.find('.product_id option:selected').attr('data-price') ;
      // var product_color = tr.find('.product_id option:selected').attr('data-color') ;
      // var product_size = tr.find('.product_id option:selected').attr('data-size') ;
      tr.find('.price').val(price);
      // tr.find('.product_color').val(product_color);
      // tr.find('.product_size').val(product_size);
      var qty =tr.find('.quantity').val() - 0;
      var disc = tr.find('.discount').val() - 0 
      var price = tr.find('.price').val() - 0;
      // console.log(price,qty);
    
      var total_amount = (qty*price);
      console.log(total_amount,"total_amount")
      tr.find('.total_amount').val(total_amount);
      // console.log(total_amount,price,disc,qty,"total");
      TotalAmount();

    });

    $('.addMoreProduct').delegate('.quantity,.discount','keyup',function(){

      var tr= $(this).parent().parent();
      var qty =tr.find('.quantity').val() - 0;
      var disc = tr.find('.discount').val() - 0 
      var price = tr.find('.price').val() - 0;
      var total_amount = (qty*price);
      tr.find('.total_amount').val(total_amount);
      TotalAmount();

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
