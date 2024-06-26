@extends('Website.master')
	@section('pagename')
  
    <section class="product">
    <h3 class="text-center mt-5 text-dark" style="color:black">{{$category ? $category : 'Products'}}<span>{{$subcategory ? '['.$subcategory .']' : ''}}</span>{{$lastlevelName ? '['.$lastlevelName.']' : ''}}</span></h3>
    </section>

    <div class="container">
      <div class="row g-2">
        @foreach($products as $product)
        <div class="col-4">
          <div class="card" style="width: 24rem;">
            <img src="{{ URL::to($product->image_one) }}" height="300" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center">{{$product->product_name}}({{$product->product_code}})</h5>
              <p class="card-text text-center">{!! str_limit($product->product_details, $limit = 100, $end="...") !!}</p>
            </div>
            <div class="card-body">
              <div class="d-flex align-items-center justify-content-center">
                <a href="{{ url('product/details/'.$product->id) }}" class="btn btn-danger">Details</a>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>


    @endsection