@extends('Website.master')
@section('pagename')




    <div class="hero-section" style="margin-top:-2%">

        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active"  style=" width:100%; height: 550px !important;">
                <img src="https://www.styletextradingbd.com/wp-content/uploads/2018/08/1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item"  style="width:100%; height: 550px !important;">
                <img src="https://www.styletextradingbd.com/wp-content/uploads/2018/08/2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item"  style=" width:100%; height: 550px !important;">
                <img src="https://www.styletextradingbd.com/wp-content/uploads/2018/08/1.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>

    </div>





    <div class="container mx-auto" style="font-size:18px;font-weight:400">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 text-center mx-auto" data-aos="fade-up">
					<p style="color:black !important;">{!! $mission->sub_text !!}</p>
				</div>
			</div>

		</div>		
	</div>





@endsection