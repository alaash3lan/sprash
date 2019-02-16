<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Sparsh Architecture</title>
	{{-- <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300i,400,500" rel="stylesheet"> --}}

    {{-- <link rel="stylesheet" href="vendor/themify-icons/themify-icons.css"> --}}

	{{-- <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"> --}}


	{{-- <link rel="stylesheet" href="vendor/owl-carousel/owl.theme.default.min.css">
	<link rel="stylesheet" href="vendor/owl-carousel/owl.carousel.min.css"> --}}
    {{-- <link rel="stylesheet" href="vendor/bootstrap/bootstrap.min.css"> --}}

    <link href="{{ asset('css/sprash/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sprash/style.css') }}" rel="stylesheet">

  <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<!-- ================Offcanvus Menu Area =================-->
	<div class="side_menu">
			<ul class="list menu_right">
				<li>
					<a href="index.html">Home</a>
				</li>
				<li>
					<a href="about.html">About</a>
				</li>
				<li>
					<a href="projects.html">Projects</a>
				</li>
				<li>
					<a href="service.html">Service</a>
				</li>
				<li>
					<a href="#">Pages</a>
					<ul class="list">
						<li>
							<a href="elements.html">Elements</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#">Blog</a>
					<ul class="list">
						<li>
							<a href="blog.html">Blog</a>
						</li>
						<li>
							<a href="single-blog.html">Blog Details</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="contact.html">Contact</a>
				</li>
			</ul>
	</div>
	<!--================End Offcanvus Menu Area =================-->

	<!--================Canvus Menu Area =================-->
	<div class="canvus_menu">
		<div class="container">
			<div class="float-right">
				<div class="toggle_icon" title="Menu Bar">
					<span></span>
				</div>
			</div>
		</div>
	</div>
	<!--================End Canvus Menu Area =================-->
  <header>
    <div class="hero">


      <div class="owl-carousel owl-theme ">



        @if ($sliders)
        @foreach ($sliders as $slider)


         <div class="item">
          <div class="hero__slide">
            <img src="{{ asset('images/'. $slider->photo->file)}}" alt="">
            <div class="hero__slideContent text-center">
            <h1>{{$slider->title}}</h1>
            <p>{{$slider->body}}</p>
							<a class="" href="#/">Details</a>
							<span class="hero__slideContent--right"></span>
            </div>
          </div>
        </div>

        @endforeach

        @endif














      </div>
    </div>
  </header>

	<section class="about section-margin mb-5">

        @if ($about)
        @foreach ($about as $about)


        <div class="container">
			<div class="row align-items-center">
				<div class="col-md-5">
					<div class="about__img text-center text-md-left mb-5 mb-md-0">
						<img class="img-fluid" src="{{asset('images/'. $about->photo->file)}}" alt="">
						<a href="#/" class="about__img__date text-center">
							<h3>26</h3>
							<p>Years <br> of Creativity</p>
						</a>
					</div>
				</div>
				<div class="col-md-7 pl-xl-5">
					<div class="section-intro">
						<h4 class="section-intro__title">About our Company</h4>
						<h2 class="section-intro__subtitle">{{$about->title}} <br> Awesome Since 1992</h2>
					</div>
                <p>{{$about->body}}</p>
                        <p>If you are looking at blank cassettes on the web lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
					<a class="btn btn--rightBorder mt-4" href="#/">Read More</a>
				</div>
			</div>
		</div>

        @endforeach

        @endif

	</section>


@if($info)
@foreach ($info as $info)
<section class="overview">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-lg-4 col-xl-3 mb-4 mb-xl-0">
					<div class="media align-items-center overview__single">
						<span class="overview__single__icon"><i class="ti-crown"></i></span>
						<div class="media-body">
							<h3>{{$info->projects_done}}</h3>
							<p>Projects done</p>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-lg-4 col-xl-3 mb-4 mb-xl-0">
					<div class="media align-items-center overview__single">
						<span class="overview__single__icon"><i class="ti-face-smile"></i></span>
						<div class="media-body">
							<h3>{{$info->happy_clients}}</h3>
							<p>Happy Clients</p>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-lg-4 col-xl-3 mb-4 mb-xl-0">
					<div class="media align-items-center overview__single">
						<span class="overview__single__icon"><i class="ti-user"></i></span>
						<div class="media-body">
							<h3>{{$info->real_professionals}}</h3>
							<p>Real professionals</p>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-lg-4 col-xl-3 mb-4 mb-xl-0">
					<div class="media align-items-center overview__single">
						<span class="overview__single__icon"><i class="ti-gift"></i></span>
						<div class="media-body">
							<h3>{{$info->coffee}}</h3>
							<p>Cups of Coffee</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endforeach
@endif

<section class="portfolio section-margin">
		<div class="container">
			<div class="section-intro">
				<h4 class="section-intro__title">OUR PORTFOLIO</h4>
				<h2 class="section-intro__subtitle bottom-border">Latest Completed Projects</h2>
			</div>
@if ($projects)
@foreach ($projects as $project)


			<div class="row align-items-end pb-md-5 mb-4">
				<div class="col-md-7 mb-4 mb-md-0">
					<div class="portfolio__img">
						<img class="img-fluid" src="{{asset('images/'. $project->photo->file)}}" alt="">
					</div>
				</div>
				<div class="col-md-5 mb-5 pl-xl-5">
					<h4 class="section-intro__title left-border">{{$project->created_at->diffForHumans()}}</h4>
					<h2 class="section-intro__subtitle small">{{$project->title}}</h2>
                <p>{{$project->body}}</p>

					<a class="btn btn--rightBorder mt-3" href="#/">Read More</a>
				</div>
			</div>


			<div class="text-center pt-2">
				<button class="btn btn--rightBorder btn--leftBorder">Load More Projects</button>
			</div>
		</div>




        @endforeach

        @endif

	</section>


	<section class="tips tips-bg">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-7 mb-4 mb-lg-0">
					<h2 class="section-intro__subtitle">Get to Know Project Estimate?</h2>
					<p>There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope. It’s exciting to think about setting up your own viewing station whether that is on the deck</p>
				</div>
				<div class="col-lg-5 text-center text-lg-right">
					<a class="btn btn-dark btn--leftBorder btn--rightBorder" href="#/">Get Estimate</a>
				</div>
			</div>
		</div>
	</section>

	<section class="testimonial section-margin">
		<div class="container">
			<div class="section-intro">
				<h4 class="section-intro__title">OUR Testimonial</h4>
				<h2 class="section-intro__subtitle bottom-border">What People Say About Us</h2>
			</div>

			<div class="owl-carousel owl-theme ">

@if($people)
@foreach ($people as $person)

@endforeach
@endif
				<div class="item">
					<div class="media testimonial__slide">
						<img class="img-fluid mr-4" src="{{asset('images/'. $person->photo->file)}}" width="120" height="125" alt="">
						<div class="media-body">
                        <blockquote>				{{$person->text}}</blockquote>
                        <h3>{{$person->name}}</h3>
                        <p>{{$person->info}}</p>
						</div>
					</div>
                </div>






        </div>


			</div>
		</div>
	</section>

	<footer class="footer footer-bg">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-lg-2 mb-4 mb-lg-0 text-left">
					<h3 class="footer__title">Top Products</h3>
					<ul class="footer__link">
						<li><a href="#/">managed Website</a></li>
						<li><a href="#/">Manage Reputation</a></li>
						<li><a href="#/">power Tools</a></li>
						<li><a href="#/">Marketing Service</a></li>
					</ul>
				</div>
				<div class="col-sm-4 col-lg-2 mb-4 mb-lg-0 text-left">
					<h3 class="footer__title">Quick Links</h3>
					<ul class="footer__link">
						<li><a href="#/">Jobs</a></li>
						<li><a href="#/">Brand Assets</a></li>
						<li><a href="#/">Investor Relations</a></li>
						<li><a href="#/">Terms of Service</a></li>
					</ul>
				</div>
				<div class="col-sm-4 col-lg-2 mb-4 mb-lg-0 text-left">
					<h3 class="footer__title">Features</h3>
					<ul class="footer__link">
						<li><a href="#/">Jobs</a></li>
						<li><a href="#/">Brand Assets</a></li>
						<li><a href="#/">Investor Relations</a></li>
						<li><a href="#/">Terms of Service</a></li>
					</ul>
				</div>
				<div class="col-sm-4 col-lg-2 mb-4 mb-lg-0 text-left">
					<h3 class="footer__title">Resources</h3>
					<ul class="footer__link">
						<li><a href="#/">Guides</a></li>
						<li><a href="#/">Research</a></li>
						<li><a href="#/">Experts</a></li>
						<li><a href="#/">Agencies</a></li>
					</ul>
				</div>
				<div class="col-sm-8 col-lg-4 mb-4 mb-lg-0 text-left">
					<h3 class="footer__title">Newsletter</h3>
					<p>You can trust us. we only send promo offers,</p>
					<form action="" class="form-subscribe">
						<div class="input-group">
							<input type="email" class="form-control" placeholder="Your email address" required>
							<div class="input-group-append">
								<button class="btn-append" type="submit"><i class="lnr lnr-arrow-right"></i></button>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="d-sm-flex justify-content-between footer__bottom top-border">
				<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
				<ul class="social-icons mt-2 mt-sm-0">
					<li><a href="#/"><i class="fab fa-facebook-f"></i></a></li>
					<li><a href="#/"><i class="fab fa-twitter"></i></a></li>
					<li><a href="#/"><i class="fab fa-dribbble"></i></a></li>
					<li><a href="#/"><i class="fab fa-behance"></i></a></li>
				</ul>
			</div>
		</div>
	</footer>


    <script src="{{asset('js/sprash/all.js')}}"></script>




	<script>
		var testimonialCarousel = $('.testimonialCarousel');
      testimonialCarousel.owlCarousel({
      loop:true,
      margin:80,
      startPosition: 2,
      nav: false,
      responsiveClass:true,
      responsive:{
        0:{
            items:1
        },
        1000:{
            items:2,
            loop:true
        }
      }
    });

    var heroCarousel = $('.heroCarousel');
      heroCarousel.owlCarousel({
      loop:true,
      margin:10,
      nav: false,
      startPosition: 1,
      responsiveClass:true,
      responsive:{
        0:{
            items:1
        }
      }
	});

	var dropToggle = $('.menu_right > li').has('ul').children('a');
	dropToggle.on('click', function() {
		dropToggle.not(this).closest('li').find('ul').slideUp(200);
		$(this).closest('li').children('ul').slideToggle(200);
		return false;
	});

	$( ".toggle_icon" ).on('click', function() {
		$( 'body' ).toggleClass( "open" );
	});

	</script>
</body>
</html>
