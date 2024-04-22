
@extends('Website.master')
	@section('pagename')
	
	<style>
    .products{
        margin:auto;
        padding:100px 0;
        text-align:center;
        }
      .figure-holder{
         display: inline-block;
          width: 300px;
          height: 160px;
          margin: 5px;
          border: 1px solid #2ab160;
        }
      .figure-holder img{
          height: 150px;
          width: 190px;
      }
      .figure-holder a{
           color: #2ab160;
       text-decoration: none;
       padding: 0 5px;
       transition: all .9s;
      
       /*text-shadow: -1px -1px 0 #e0e0eb,    1px -1px 0 #e0e0eb, -1px 1px 0 #e0e0eb, 1px 1px 0 #e0e0eb;*/
       }
      .figure-holder a:hover {
       color:#fff;
       }
      
      
      figure {
        text-align: center;
        text-indent: 0;
        padding:5px;
        display:inline-block;
      }
      figcaption{
      margin-top:-100px;
      font-size: 1.5em;
      font-weight:600;
      }
	
	</style>


	<div class="hero-section">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-lg-5">
					<span class="subheading mb-2" data-aos="fade-up">Welcome</span>
					<h1 class="heading mb-3" data-aos="fade-up" data-aos-delay="100">{{$carosuel->header_text}}</h1>

				<p id="second" style="color:black !important" class="mb-5" data-aos="fade-up" data-aos-delay="200">{!! $carosuel->sub_text !!} </p>

					<p data-aos="fade-up" data-aos-delay="300">
					<a href="{{url('/services')}}" class="btn btn-primary mr-2">My Service</a>
					 <a href="{{url('/about')}}" class="btn btn-outline-primary">About Me</a></p>
				</div>
				<div class="col-lg-6">
					<div class="img-wrap" data-aos="fade-left">
						<img src="{{ URL::to($carosuel->img) }}" alt="Image" class="img-fluid">
					</div>
				</div>
			</div>
		</div>
	</div>


  <!-- <section class="price-list" id="companies">
		<div class="container">
			<div class="row" id="product">
				<h2 class="wow bounceIn company animated text-center" data-wow-duration="2s" style="visibility: visible;-webkit-animation-duration: 2s; -moz-animation-duration: 2s; animation-duration: 2s;"> Products </h2>
				<div class="col-lg-12 col-sm-4">
					<div class="products">
	  					@foreach($category as $row)
						<div class="figure-holder">
							<a href="{{ url('productbycategory/'.$row->id) }}" target="_self">	
								<figure>
								<p><img class="scaled" src="{{$row->img}}" alt="Handicrafts">
								</p><figcaption>{{$row->category_name}}</figcaption>
								<p></p>
								</figure>
							</a>
						</div>					
	  					@endforeach
						
					
					</div>
				</div>
			</div>
		</div>
   </section> -->



 

	<!-- our service  -->
	<div id="service" class="section section-3">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-lg-7" data-aos="fade-up">
					<img src="{{URL::to($service->img)}}" alt="Image" class="img-fluid">
				</div>
				<div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
					<h3 class="subheading mb-2">Service</h3>
					<h2 class="heading mb-4">{{$service->header_text}}</h2>



					<p id="section2" style="color:black !important" class="mb-5" data-aos="fade-up" data-aos-delay="200">{!! $service->sub_text !!} </p>
					<p data-aos="fade-up" data-aos-delay="300">
					<a href="{{url('/services')}}" class="btn btn-primary mr-2">Learn More</a>
					
				</div>
			</div>
		</div>
	</div>
	<!-- our service  -->


	 <!-- <div class="section section-4">
		<div class="container">
			<div class="row text-center mb-5" data-aos="fade-up">
				<div class="col-lg-6 mx-auto text-center">
					<h3 class="subheading mb-2">Services</h3>
					<h2 class="heading mb-4">Our Services</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-8">
					<div class="row">
						<div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
							<div class="service d-flex">
								<div class="icon">
									<span class="flaticon-shield"></span>
								</div>
								<div class="text">
									<h3>Design Marketing</h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								</div>
							</div>

							<div class="service d-flex">
								<div class="icon">
									<span class="flaticon-megaphone"></span>
								</div>
								<div class="text">
									<h3>Internet Marketing</h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								</div>
							</div>

							<div class="service d-flex">
								<div class="icon">
									<span class="flaticon-contract"></span>
								</div>
								<div class="text">
									<h3>Social Marketing</h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
							<div class="service d-flex">
								<div class="icon">
									<span class="flaticon-startup"></span>
								</div>
								<div class="text">
									<h3>SEO Marketing</h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								</div>
							</div>

							<div class="service d-flex">
								<div class="icon">
									<span class="flaticon-link"></span>
								</div>
								<div class="text">
									<h3>BackLinks Marketing</h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								</div>
							</div>

							<div class="service d-flex">
								<div class="icon">
									<span class="flaticon-trophy"></span>
								</div>
								<div class="text">
									<h3>Design Marketing</h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								</div>
							</div>
						</div>
					</div>	
				</div>
				
			</div>
		</div>
	</div>  -->


	

	<div class="section bg-light">
		<div class="container">
			<div class="row mb-5">
				<div class="col-lg-8 mx-auto text-center" data-aos="fade-up">
					<span class="subheading mb-2">Testimonials</span>
					<h1 class="heading mb-3">Testimonials</h1>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
				</div>
			</div>

			<div class="testimonial-slider-wrap" data-aos="fade-up" data-aos-delay="100">
				<div id="testimonial-nav">
					<span class="prev" data-control="prev">
						<span class="icon-keyboard_arrow_left"></span>
					</span>
					<span class="next" data-control="next">
						<span class="icon-keyboard_arrow_right"></span>
					</span>
				</div>
				<div class="testimonial-slider" id="testimonial-slider">
					<div class="item">
						<div class="testimonial-v2">
							<blockquote>
								<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.&rdquo;</p>
							</blockquote>
							<div class="author d-flex">
								<div class="author-pic">
									<img src="{{asset('website/images/person_1.jpg')}}" alt="Image" class="img-fluid">
								</div>
								<div class="author-name">
									<h3>Carl Anderson</h3>
									<span>Director at Google</span>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimonial-v2">
							<blockquote>
								<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.&rdquo;</p>
							</blockquote>
							<div class="author d-flex">
								<div class="author-pic">
									<img src="{{asset('website/images/person_2.jpg')}}" alt="Image" class="img-fluid">
								</div>
								<div class="author-name">
									<h3>Drew Wood</h3>
									<span>Director at Google</span>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimonial-v2">
							<blockquote>
								<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.&rdquo;</p>
							</blockquote>
							<div class="author d-flex">
								<div class="author-pic">
									<img src="{{asset('website/images/person_3.jpg')}}" alt="Image" class="img-fluid">
								</div>
								<div class="author-name">
									<h3>Michelle Alisson</h3>
									<span>Director at Google</span>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimonial-v2">
							<blockquote>
								<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.&rdquo;</p>
							</blockquote>
							<div class="author d-flex">
								<div class="author-pic">
									<img src="{{asset('website/images/person_1.jpg')}}" alt="Image" class="img-fluid">
								</div>
								<div class="author-name">
									<h3>Carl Anderson</h3>
									<span>Director at Google</span>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimonial-v2">
							<blockquote>
								<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.&rdquo;</p>
							</blockquote>
							<div class="author d-flex">
								<div class="author-pic">
									<img src="{{asset('website/images/person_2.jpg')}}" alt="Image" class="img-fluid">
								</div>
								<div class="author-name">
									<h3>Drew Wood</h3>
									<span>Director at Google</span>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimonial-v2">
							<blockquote>
								<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.&rdquo;</p>
							</blockquote>
							<div class="author d-flex">
								<div class="author-pic">
									<img src="{{asset('website/images/person_3.jpg')}}" alt="Image" class="img-fluid">
								</div>
								<div class="author-name">
									<h3>Michelle Alisson</h3>
									<span>Director at Google</span>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimonial-v2">
							<blockquote>
								<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.&rdquo;</p>
							</blockquote>
							<div class="author d-flex">
								<div class="author-pic">
									<img src="{{asset('website/images/person_1.jpg')}}" alt="Image" class="img-fluid">
								</div>
								<div class="author-name">
									<h3>Carl Anderson</h3>
									<span>Director at Google</span>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimonial-v2">
							<blockquote>
								<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.&rdquo;</p>
							</blockquote>
							<div class="author d-flex">
								<div class="author-pic">
									<img src="{{asset('website/images/person_2.jpg')}}" alt="Image" class="img-fluid">
								</div>
								<div class="author-name">
									<h3>Drew Wood</h3>
									<span>Director at Google</span>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimonial-v2">
							<blockquote>
								<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.&rdquo;</p>
							</blockquote>
							<div class="author d-flex">
								<div class="author-pic">
									<img src="{{asset('website/images/person_3.jpg')}}" alt="Image" class="img-fluid">
								</div>
								<div class="author-name">
									<h3>Michelle Alisson</h3>
									<span>Director at Google</span>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>		
	</div>





@endsection
