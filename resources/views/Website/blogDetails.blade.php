@extends('Website.master')
	@section('pagename')
    
    <section class="product">
        <h3 class="text-center mt-5 text-dark" style="color:black">Blog Details of {{$blogDetails->header_text}}<span></span></span></h3>
    </section>
    <div class="container mt-4">
        <div class="row g-3">
            <div class="col-lg-12 col-md-12 col-12 d-flex align-items-center justify-content-center">
                <img src="{{ URL::to($blogDetails->img) }}" style="width:50%" height="90%" alt="">
            </div>
            <div class="col-lg-12 col-md-12 col-12">
                <h3 class="text-center">{{$blogDetails->header_text}}</h3 >
                <p>{!! $blogDetails->sub_text !!}</p>
            </div>
            
        </div>
    </div>
 

    @endsection
  