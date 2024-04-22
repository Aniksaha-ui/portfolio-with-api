@extends('Website.master')
	@section('pagename')

	<div class="hero-section">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-lg-5">
					<span class="subheading mb-2" data-aos="fade-up">Services</span>
					<h1 class="heading mb-3" data-aos="fade-up" data-aos-delay="100">{{$carosuel->header_text}}</h1>
					

					<p id="second" style="color:black !important" class="mb-5"  data-aos="fade-up" data-aos-delay="200">{!! str_limit(strip_tags($carosuel->sub_text), $limit = 1000, $end = '...') !!} </p>

				<p data-aos="fade-up" data-aos-delay="300">
				<a href="#ourservice" class="btn btn-primary mr-2">Learn More</a> 
				<a href="#" class="btn btn-outline-primary">Contact us</a></p>
				</div>
				<div class="col-lg-6">
					<div class="img-wrap" data-aos="fade-left">
						<img src="{{URL::to($carosuel->img)}}" alt="Image" class="img-fluid">
					</div>
				</div>
			</div>
		</div>
	</div>



	<div id="ourservice" class="section section-4 pt-0">
		<div class="container">
		<div class="row text-center mb-5" data-aos="fade-up">
				<div class="col-lg-6 mx-auto text-center">
					<h3 class="subheading mb-2">Services</h3>
					<h2 style="color:black !important" class="heading mb-4">Our Services</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-10">
					<div class="row">
						@foreach($service as $row)
						<div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
							<div class="service d-flex" style="height:180px;width:500px">
								<div class="icon">
									<span class="flaticon-shield"></span>
								</div>
								<div class="text">
									<h3 style="color:black !important">{{$row->header_text}}</h3>
									<p style="color:black !important">{!! $row->sub_text !!}</p>
								</div>
							</div>

							
						</div>
						@endforeach
					</div>	
				</div>
				
			</div>
		</div>
	</div>




@endsection