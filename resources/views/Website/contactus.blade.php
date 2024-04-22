@extends('Website.master')
@section('pagename')

<div class="hero-section" >

    <section id="contact" class="contact" >
    <div class="container">
      <div class="section-title">
        <h2 class="text-center">Contact Info</h2>
      </div>
    </div>
            
            
    <div class="container mt-lg-4 mt-md-1 mt-1">
        <div class="row d-flex align-items-center justify-content-center">
        
            @foreach($contacts as $row)
            <div class="shadow-sm ms-lg-2 ms-0 col-lg-5 order-lg-2 mb-5 mb-lg-0 card p-lg-5 " style="height: 300px">
                <div class="col-lg-6 col-md-6 info mt-4 mt-lg-0">
                    <table>
                        <thead>
                            <tr>
                                <th colspan="2" > {{$row->person_name}}</th>
                            </tr>
                            
                        </thead>
                        <tr>
                                <td colspan="2">{{$row->designation}}</td>
                        </tr>
                        <tr>
                            <td class="ftd">Cell:</td> <td>{{$row->cell_1}}</td>
                        </tr>
                        <tr>
                            <td></td> <td>{{$row->cell_2}}</td>
                        </tr>
                        <tr>
                            <td class="ftd">Email:</td> <td>{{$row->email_1 ? $row->email_1 : ''}}</td>
                        </tr>
                        <tr>
                            <td></td> <td>{{$row->email_2 ? $row->email_2 : ''}}</td>
                        </tr>
                        <tr>
                            <td></td> <td>{{$row->email_3 ? $row->email_3 :''}}</td>
                        </tr>
                        <tr>
                            <td class="ftd">Address:</td> <td ><pre class="mpre"> {!!$row->address ? $row->address : '' !!}</pre></td>
                        </tr>
                    </table>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    
    </section>
      <!-- End Contact Section -->
</div>

<div class="container pt-0">
  
		<div class="row d-flex align-items-center justify-content-center">

			<div class="shadow-sm col-lg-5 order-lg-1 mb-5 mb-lg-0 card py-lg-5">
			
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14598.515599103996!2d90.3623919145129!3d23.83179180114631!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c14a3366b005%3A0x901b07016468944c!2sMirpur%20DOHS%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1675831395192!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


			</div>

			<div class="shadow-sm col-lg-5 order-lg-2 mb-5 mb-lg-0 card p-lg-3 ms-lg-2 ms-md-2 ms-0 mt-lg-0 mt-md-0 mt-2" >
				<div class="section-title mb-5">
					<strong class="subtitle text-center" data-aos="fade-up" data-aos-delay="0">Contact Us</strong>
					<h2 class="heading" data-aos="fade-up" data-aos-delay="100">Let's have a talk</h2>
				</div>
				<form class="contact-form" data-aos="fade-up" data-aos-delay="200">
					<div class="row">
						<div class="col-6">
							<div class="form-group mb-3">
								<label class="text-black" for="fname">First name</label>
								<input type="text" class="form-control" id="fname">
							</div>
						</div>
						<div class="col-6">
							<div class="form-group mb-3">
								<label class="text-black" for="lname">Last name</label>
								<input type="text" class="form-control" id="lname">
							</div>
						</div>
					</div>
					<div class="form-group mb-3">
						<label class="text-black" for="email">Email address</label>
						<input type="email" class="form-control" id="email">
					</div>

					<div class="form-group mb-3">
						<label class="text-black" for="message">Message</label>
						<textarea name="" class="form-control" id="message" cols="30" rows="5"></textarea>
					</div>
          <div class="d-flex align-items-center justify-content-center">
					<button type="submit" class="btn btn-primary">Send Message</button>

          </div>
				</form>
			</div>
		</div>
	</div>


<style>

table {
    font-size:1.1em;
    color:#111;
}
thead{
    font-size:1.1em;
    font-weight:600;
}
td{
    padding-right:5px;
    vertical-align: top;
}
.mpre{ font-size:1em;
font-family:inherit;}
.ftd{
    font-weight:600;
}
.contact .info-wrap {
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
  padding: 30px;
}
.contact .info {
  background: #fff;
}
.contact .info i {
  font-size: 20px;
  color: #ffb03b;
  float: left;
  width: 44px;
  height: 44px;
  background: #fff6e8;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 50px;
  transition: all 0.3s ease-in-out;
}
.contact .info h4 {
  padding: 0 0 0 60px;
  font-size: 18px;
  font-weight: 600;
  margin-bottom: 5px;
  color: #433f39;
  font-family: "Poppins", sans-serif;
}
.contact .info p {
  padding: 0 0 0 60px;
  margin-bottom: 0;
  font-size: 14px;
  color: #7a7368;
}
.contact .info:hover i {
  background: #ffb03b;
  color: #fff;
}
/* 
@-webkit-keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
@keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
} */
</style>

	@endsection