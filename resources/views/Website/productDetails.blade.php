@extends('Website.master')
	@section('pagename')
    
    <section class="product">
        <h3 class="text-center mt-5 text-dark" style="color:black">Product Details<span></span></span></h3>
    </section>
    
    <div class="container mt-4">
        <div class="row g-3">
            <div class="col-lg-12 col-md-12 col-12">
                <img src="{{ URL::to($productDetails->image_one) }}" style="width:100%" height="90%" alt="">
            </div>
            <div class="col-lg-8 col-md-8 col-12">{!! $productDetails->product_details !!}</div>
            <div class="col-lg-3 col-md-3 col-12">
                <div class="card" style="width: 18rem;">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Category Name : Website</li>
                    <li class="list-group-item">Language : React</li>
                  <li class="list-group-item">Product Code : {{$productDetails->selling_price}}</li>
                </ul>                
              </div>
            </div>
        </div>
    </div>
 

    @endsection
  