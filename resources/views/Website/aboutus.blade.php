
@extends('Website.master')
	@section('pagename')
	<div class="hero-section">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-lg-5">
					<span class="subheading mb-2" data-aos="fade-up">About</span>
					<h1 class="heading mb-3" data-aos="fade-up" data-aos-delay="100">{{$welcome->header_text}}</h1>

					<p id="second"  class="mb-5" data-aos="fade-up" style="color:black;" data-aos-delay="200" >{!! str_limit(strip_tags($welcome->sub_text), $limit = 5000, $end = '...') !!} </p>


					<p data-aos="fade-up" data-aos-delay="300">
					<!-- <a href="#whyus" class="btn btn-primary mr-2">Why Us</a>  -->
					<a href="{{url('/contact')}}" class="btn btn-outline-primary">Contact us</a></p>
				</div>
				<div class="col-lg-6">
					<div class="img-wrap" data-aos="fade-left">
						<img src="{{URL::to($welcome->img)}}" alt="Image" class="img-fluid">
					</div>
				</div>
			</div>
		</div>
	</div>

		<!-- why us section -->
		
	<!-- <div id="whyus" class="section section-3 pt-0">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-lg-7" data-aos="fade-up">
					<img src="{{URL::to($question->img)}}" alt="Image" class="img-fluid">
				</div>
				<div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
					<h3 class="subheading mb-2">Why us?</h3>
					<h2 class="heading mb-4">{{$question->header_text}}</h2>
					<p class="mb-5" id="section1" onclick="changeText2()" data-aos="fade-up" data-aos-delay="200">{!! str_limit(strip_tags($question->sub_text), $limit = 200, $end = '.......') !!}<span style="color:blue"><b>read more</b></span></p>


					<p id="section2"  class="mb-5" style="display:none" data-aos="fade-up" data-aos-delay="200">{!! str_limit(strip_tags($question->sub_text), $limit = 1000, $end = '...') !!} </p>
					<p><a href="#" class="btn btn-primary">About us</a></p>
				</div>
			</div>
		</div>
	</div> -->



	

	

	<div class="section">
		<div class="container">
			<div class="row mb-5">
				<div class="col-lg-8 text-center mx-auto" data-aos="fade-up">
					<span class="subheading mb-2">My Education History</span>
					<h2 class="heading">{{$education_title->header_text}}</h2>
					<!--<p id="section2" style="color:black;" class="mb-5"  data-aos="fade-up" data-aos-delay="200">{!! str_limit(strip_tags($question->sub_text), $limit = 1000, $end = '...') !!} </p>-->
				</div>
			</div>
			<div class="row d-flex align-items-center justify-content-center">
				
				@foreach($institution as $row)
				<div class=" col-6 col-xs-6 col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-dely="100">
					<div class="team" style="max-width: 240px;max-height: 300px">
						<img src="{{URL::to($row->img)}}" alt="Image"  class="mb-4" style="max-width: 240px;max-height: 300px">
						<div class="px-3">
							<h3 style="color:black; font-size:19px !important" class="d-flex align-item-center justify-start mb-0">{{$row->header_text}}</h3>
							<p style="color:black;" class="d-flex align-item-center justify-start">{!! $row->sub_text !!}</p>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>		
	</div>


	<!-- <div class="section">
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
									<img src="images/person_1.jpg" alt="Image" class="img-fluid">
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
									<img src="images/person_2.jpg" alt="Image" class="img-fluid">
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
									<img src="images/person_3.jpg" alt="Image" class="img-fluid">
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
									<img src="images/person_1.jpg" alt="Image" class="img-fluid">
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
									<img src="images/person_2.jpg" alt="Image" class="img-fluid">
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
									<img src="images/person_3.jpg" alt="Image" class="img-fluid">
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
									<img src="images/person_1.jpg" alt="Image" class="img-fluid">
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
									<img src="images/person_2.jpg" alt="Image" class="img-fluid">
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
									<img src="images/person_3.jpg" alt="Image" class="img-fluid">
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
	</div> -->
@endsection