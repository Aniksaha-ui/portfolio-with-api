@extends('admin.admin_layout')

@section('admin_panel')


<form  method="POST">
         {{csrf_field()}}
         <section>
             <div class="panel panel-header">

                 <div class="row">
                     <div class="col-md-6">
                 <div class="form-group">
                     <input type="text" name="customer_name" class="form-control" placeholder=" enter your company name">
                 </div></div>
                 <div class="col-md-6">
                  <div class="form-group">
                     <input type="date" name="customer_address" class="form-control" >
                 </div></div>

             </div></div>
             <div class="panel panel-footer" >
                 <table class="table table-bordered">
                     <thead>
                         <tr>
                             <th>Medicine Name</th>
                             <th>medicine catagory</th>
                             <th>Quantity</th>
                             <th>buying price</th>
                             <th>selling price</th>
                             <th>Amount</th>
                             
                             <th><a href="#" class="addRow"><i class="glyphicon glyphicon-plus"></i></a></th>
                         </tr>
                     </thead>
                     <tbody>
         <tr>
         <td><input type="text" name="medicine_name[]" class="form-control" required=""></td>
         <td><input type="text" name="medicine_catagory[]" class="form-control"></td>    
           <td><input type="text" name="quantity[]" class="form-control quantity" required=""></td>
           <td><input type="text" name="buyprice[]" class="form-control buyprice"></td>
           <td><input type="text" name="sellprice[]" class="form-control buyprice"></td>
           <td><input type="text" name="amount[]" class="form-control amount"></td>
           
         <td><a href="#" class="btn btn-danger remove"><i class="glyphicon glyphicon-remove"></i></a></td>
         </tr>
                         </tr>
                     </tbody>
                     <tfoot>
                         <tr>
                             <td style="border: none"></td>
                             <td style="border: none"></td>
                             <td style="border: none"></td>
                             <td>Total</td>
                             <td><b class="total"></b> </td>
                             <td><input type="submit" name="" value="Submit" class="btn btn-success"></td>
                         </tr>
                     </tfoot>
                 </table>
             </div>
         </section>
     </form>

     <script type="text/javascript">
    $('tbody').delegate('.quantity,.buyprice','keyup',function(){
        var tr=$(this).parent().parent();
        var quantity=tr.find('.quantity').val();
        var buyprice=tr.find('.buyprice').val();
        var amount=(quantity*buyprice);
        tr.find('.amount').val(amount);
        total();
    });
    function total(){
        var total=0;
        $('.amount').each(function(i,e){
            var amount=$(this).val()-0;
        total +=amount;
    });
    $('.total').html(total+".00 tk");    
    }
    $('.addRow').on('click',function(){
        addRow();
    });
    function addRow()
    {
        var tr='<tr>'+
        '<td><input type="text" name="medicine_name[]" class="form-control" required=""></td>'+
        '<td><input type="text" name="medicine_catagory[]" class="form-control"></td>'+
        '<td><input type="text" name="quantity[]" class="form-control quantity" required=""></td>'+
        '<td><input type="text" name="buyprice[]" class="form-control buyprice"></td>'+
        '<td><input type="text" name="sellprice[]" class="form-control buyprice"></td>'+
        ' <td><input type="text" name="amount[]" class="form-control amount"></td>'+

        '<td><a href="#" class="btn btn-danger remove"><i class="glyphicon glyphicon-remove"></i></a></td>'+
        '</tr>';
        $('tbody').append(tr);
    };
    $('.remove').live('click',function(){
        var last=$('tbody tr').length;
        if(last==1){
            alert("you can not remove last row");
        }
        else{
             $(this).parent().parent().remove();
        }
     
    });
</script>

@endsection