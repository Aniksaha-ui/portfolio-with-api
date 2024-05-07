@extends('Website.master')
	@section('pagename')
  
    {{-- <section class="product">
    <h3 class="text-center mt-5 text-dark" style="color:black">{{$category ? $category : 'Products'}}<span>{{$subcategory ? '['.$subcategory .']' : ''}}</span>{{$lastlevelName ? '['.$lastlevelName.']' : ''}}</span></h3>
    </section> --}}
    <section class="product">
        <h3 class="text-center mb-5">Blogs</h3>
    </section>

    <div class="container">
      <div class="row g-2">
        @foreach($blogs as $blog)
        <div class="col-lg-4 col-md-4 col-12">
          <div class="card" style="width: 24rem;">
            <img src="{{ URL::to($blog->img) }}" height="300" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center">{{$blog->header_text}}</h5>
            </div>
            <div class="card-body">
              <div class="d-flex align-items-center justify-content-center">
                <a href="{{ url('blog/details/'.$blog->id) }}" class="btn btn-danger">Details</a>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>


    @endsection