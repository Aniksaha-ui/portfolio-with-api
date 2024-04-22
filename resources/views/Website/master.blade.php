<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">


	
	<link rel="stylesheet" href="{{asset('website/fonts/icomoon/style.css')}}">
	<link rel="stylesheet" href="{{asset('website/fonts/flaticon/font/flaticon.css')}}">

	<link rel="stylesheet" href="{{asset('website/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('website/css/tiny-slider.css')}}">
	<link rel="stylesheet" href="{{asset('website/css/aos.css')}}">
	<link rel="stylesheet" href="{{asset('website/css/style.css')}}">
	<script src="https://kit.fontawesome.com/4e8f8f5356.js" crossorigin="anonymous"></script>
	<title>Anik Saha&mdash; Professional Software Engineer</title>
</head>
<body>

	<div class="site-mobile-menu site-navbar-target">
		<div class="site-mobile-menu-header">
			<div class="site-mobile-menu-close">
				<span class="icofont-close js-menu-toggle"></span>
			</div>
		</div>
		<div class="site-mobile-menu-body"></div>
	</div>

	<nav class="site-nav mt-3">
		<div class="container">
			<div class="site-navigation">
				<a href="{{url('/')}}" class="logo m-0 mt-2 float-start"><img src="{{asset('website/images/logo.png')}}" alt="EnJ" class="img-fluid" height="80" width="80"></a>

				<ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end">
					<li class="active"><a href="{{url('/')}}">Home</a></li>
					<li class="has-children">
				<a href="{{url('/company-profile')}}">Our Compnay</a>
				<ul class="dropdown menu-for-company" style="background-color:#1b98e0">
					<li><a style="color:white;" href="{{url('/company-profile')}}">Company Profile</a></li>
					<li><a style="color:white;" href="our-mission">Our Mission</a></li>
				</ul>
            </li>
					<li class="has-children">
						<a href="{{url('/product')}}">Product</a>
						<ul class="dropdown" style="background-color:#1b98e0">

							   
						@php
								$category = DB::table('categories')->get();
						@endphp
						@foreach($category as $cat)
							<li class="has-children">
								<a style="color:white" href="{{ url('productbycategory/'.$cat->id) }}">{{$cat->category_name}}</a>
								<ul class="dropdown" style="background-color:#1b98e0">
								@php
								$subcategory = DB::table('subcategories')->where('category_id',$cat->id)->get();
								@endphp
								@foreach($subcategory as $sub)
									<li class="has-children">
										<a style="color:white" href="{{ url('productbysubcategory/'.$cat->id .'/'.$sub->id ) }}">{{$sub->subcategory_name}}</a>
										<ul class="dropdown" style="background-color:#1b98e0">
										@php
										$lastlevel = DB::table('lastlavels')->where('category_id',$cat->id)->where('subcategory_id',$sub->id)->get();
										@endphp
										@foreach($lastlevel as $last)
										<li><a style="color:white" href="{{ url('productbynextcategory/'.$cat->id .'/'.$sub->id.'/'.$last->id ) }}">{{$last->lastlevel}}</a></li>
										@endforeach
										</ul> 
									</li>
								@endforeach
									
								</ul>
							</li>
						@endforeach


							
						</ul>
					</li>
					@php
							$id = Auth::guard('admin')->check();
					@endphp
					@if($id=='true')
					<li><a href="{{url('admin/home')}}">Admin panel</a></li>
					@endif


		
					<li><a href="{{url('/about')}}">About Me</a></li>
					<li><a href="{{url('/activity')}}">My Activity</a></li>
					<li><a href="{{url('/services')}}">Services</a></li>
					<!-- <li><a href="{{url('/faq')}}">FAQ</a></li> -->
					<li><a href="{{url('/contact')}}">Contact</a></li>
					<!-- <li class="#"><a href="#">Download now</a></li> -->
					
					@php
							$name = Auth::id();
					@endphp

					<!-- @if($name!=null)
					<li><a href="{{url('/home')}}">My Orders</a></li>
					<li><a href="{{ route('user.logout') }}">Logout</a></li>
					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                    </form>
					

					@endif -->
					
					<!-- @if($name==null)
					<li><a href="{{url('/login')}}">Login</a></li>
					
					@endif -->

				</ul>

				<a href="#" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none" data-toggle="collapse" data-target="#main-navbar">
					<span></span>
				</a>

			</div>
		</div>
	</nav>


	
        @yield('pagename')



	<div class="site-footer" style="padding-bottom:0px !important">
		<div class="container">
			<div class="row mb-5">
				<div class="col-md-6 col-lg-4">
					<div class="widget">
						<h3 style="color:black !important" class="heading">About Me</h3>
						<p style="color:black !important">I am a professional Web Developer with 1 year expriece.My current company is <b>ERA INFOTECH LTD</b>.My working technology is Angular,Node,React & ASP.NET</p>
					</div>
					<div class="widget">
						<ul class="list-unstyled social">
							<li style="color:black !important"><a href="#"><span class="icon-twitter"></span></a></li>
							<li style="color:black !important"><a href="#"><span class="icon-instagram"></span></a></li>
							<li style="color:black !important"><a href="#"><span class="icon-facebook"></span></a></li>
						</ul>
					</div>
				</div>
				<div class="d-flex align-items-center justify-content-center col-md-6 col-lg-4 pl-lg-5">
					<div class="widget">
						<h3 style="color:black !important" class="heading">Pages</h3>
						<ul class="links list-unstyled">
						    <li ><a style="color:black !important" href="{{url('/')}}">Home</a></li>
							<li ><a style="color:black !important" href="{{url('/about')}}">About</a></li>
							<li ><a style="color:black !important" href="{{url('/service')}}">Service</a></li>
							<li ><a style="color:black !important" href="{{url('/contact')}}">Contact</a></li>
						</ul>
					</div>
				</div>
				@php
					 $profile = DB::table('companymasters')->get();
				@endphp
				@foreach($profile as $row)
				<div class="col-md-6 col-lg-4">
					<div class="widget">
						<h3 style="color:black !important" class="heading">Contact</h3>
						<ul class="list-unstyled quick-info links">
							<li style="color:black !important" class="email"><a style="color:black !important" href="#">{{$row->email_1}}</a></li>
							<li style="color:black !important" class="phone"><a style="color:black !important"href="#">{{$row->telephone_1}}</a></li>
							<li style="color:black !important" class="phone"><a style="color:black !important"href="#">{{$row->telephone_2}}</a></li>
							<li style="color:black !important" class="address"><a style="color:black !important" href="#">{{$row->corporate_office}}</a></li>
						</ul>
					</div>
				</div>
				@endforeach
			</div>

			
		</div>
	</div>

	<!-- Preloader -->
	<div id="overlayer"></div>
	<div class="loader">
		<div class="spinner-border text-primary" role="status">
			<span class="visually-hidden">Loading...</span>
		</div>
	</div>

	

	<script src="{{asset('website/js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{asset('website/js/tiny-slider.js')}}"></script>
	<script src="{{asset('website/js/aos.js')}}"></script>
	<script src="{{asset('website/js/navbar.js')}}"></script>
	<script src="{{asset('website/js/counter.js')}}"></script>
	<script src="{{asset('website/js/custom.js')}}"></script>
	<script>
		
		function changeText(){
			var first = document.getElementById('first');
		var second = document.getElementById('second');
		// console.log(first);
		first.style.display = "none";
		second.style.display = "block";
		}

		function changeText2(){
		var first = document.getElementById('section1');
		var second = document.getElementById('section2');
		// console.log(first);
		first.style.display = "none";
		second.style.display = "block";
		}
		function changeText3(){
		var first = document.getElementById('section3');
		var second = document.getElementById('section4');
		// console.log(first);
		first.style.display = "none";
		second.style.display = "block";
		}


	</script>
	@yield('js')
</body>
</html>