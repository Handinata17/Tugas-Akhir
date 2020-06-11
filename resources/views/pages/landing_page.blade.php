<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>Ormawa</title>

<link rel="stylesheet" href="{{ asset ('landing_page/css/animate.css') }}">
<link rel="stylesheet" href="{{ asset ('landing_page/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset ('landing_page/css/materialdesignicons.min.css') }}">
<link rel="stylesheet" href="{{ asset ('landing_page/css/fontawesome-5.8.1.css') }}">
<link rel="stylesheet" href="{{ asset ('landing_page/css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset ('landing_page/css/swiper.min.css') }}">
<link rel="stylesheet" href="{{ asset ('landing_page/css/lity.min.css') }}">
<link rel="stylesheet" href="{{ asset ('landing_page/css/slicknav.css') }}">
<link rel="stylesheet" href="{{ asset ('landing_page/css/style.css') }}">
<link rel="stylesheet" href="{{ asset ('landing_page/css/theme.css') }}">
<link rel="stylesheet" href="{{ asset ('landing_page/css/responsive.css') }}">
</head>
<body>


<div id="mainmenu-area">
<div class="header-area header-absolute">
<div class="container">
<div class="row">
<div class="col-lg-3 col-md-3 w-50">
<a href="index.html" class="header-logo">
<img src="{{ asset ('landing_page/image/phb2.png') }}" alt="">
</a>
</div>
<div class="col-lg-9 col-md-9 w-50 t-right">
<button class="toggle">
<span></span>
</button>
<div class="mainmenu">
<nav>
<ul>
<li><a href="#home">Home</a>
<!-- <ul>
<li><a href="index.html" class="active">Home 1</a></li>
<li><a href="home-2.html">Home 2</a></li>
<li><a href="home-3.html">Home 3</a></li>
<li><a href="home-4.html">Home 4</a></li>
<li><a href="home-5.html">Home 5</a></li>
<li><a href="home-6.html">Home 6</a></li>
<li><a href="home-7.html">Home 7</a></li>
<li><a href="home-8.html">Home 8</a></li>
<li><a href="home-9.html">Home 9</a></li>
</ul> -->
</li>
<li><a class="nav-link" href="#">Recruitment</a></li>
<li><a class="nav-link" href="#features">Event</a></li>
<li><a class="nav-link" href="#testimonial">Dana RAB</a></li>
<li><a href="#">Login</a>
<ul>
<li><a href="{{route('pengguna.login')}}" class="active">Pengguna</a></li>
<li><a href="{{route('superadmin.login')}}">Admin</a></li>
</ul>
</li>

</ul>
</nav>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="hero-area o-hi" id="home">
<div class="container">
<div class="row aic">
<div class="col-lg-7 col-md-12 wow fadeInUp" data-wow-delay="0.2s">
<!-- <span class="h-icon mdi mdi-equalizer"></span> -->
<h2>Organisasi Mahasiswa</h2> <h2>Politeknik Harapan Bersama</span></h2>
</div>
<div class="col-lg-5 text-right col-md-12 wow fadeInUp" data-wow-delay="0.4s">
<!-- <div class="hero-img"> -->
<!-- <div class="waves-block">
<div class="waves wave-1"></div>
<div class="waves wave-2"></div>
<div class="waves wave-3"></div>
</div> -->
<img src="{{ asset ('landing_page/image/phb.png') }}" alt="">
<!-- <img src="{{ asset ('landing_page/image/Path-2.png') }}" alt="" class="path-1-img">
<img src="{{ asset ('landing_page/image/Path-1.png') }}" alt="" class="path-1-img path-2-img">
<img src="{{ asset ('landing_page/image/Path-3.png') }}" alt="" class="path-1-img path-3-img"> -->
</div>
</div>
</div>
</div>
</div>


<div class="features-area pt-100" id="features">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-7 text-center wow fadeInUp" data-wow-delay="0.2s">
<div class="title">
<h6>FEATURES</h6>
<h2>An Amazing App can Change your Daily Life <span>Music Experience.</span></h2>
</div>
</div>
</div>
<div class="row aic">
<div class="col-lg-4">
<div class="features-group">
<div class="single-features-item dfx aic wow fadeInLeft" data-wow-delay="0.2s">
<div class="features-icon">
<span class="mdi mdi-music"></span>
</div>
<div class="features-content">
<h4>Create Playlist</h4>
<p>Create unlimited playlist as you want in your app.</p>
</div>
</div>
<div class="single-features-item dfx aic wow fadeInLeft" data-wow-delay="0.4s">
<div class="features-icon">
<span class="mdi mdi-file-music"></span>
</div>
<div class="features-content">
<h4>Create Playlist</h4>
<p>Create unlimited playlist as you want in your app.</p>
</div>
</div>
<div class="single-features-item dfx aic wow fadeInLeft hidden-sm" data-wow-delay="0.6s">
<div class="features-icon">
<span class="mdi mdi-settings"></span>
</div>
<div class="features-content">
<h4>Create Playlist</h4>
<p>Create unlimited playlist as you want in your app.</p>
</div>
</div>
</div>
</div>
<div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
<div class="features-image">
<img src="{{ asset ('landing_page/image/iPhoneX-Mockup2.png') }}" alt="">
</div>
</div>
<div class="col-lg-4">
<div class="features-group">
<div class="single-features-item dfx aic wow fadeInRight" data-wow-delay="0.2s">
<div class="features-icon">
<span class="mdi mdi-account"></span>
</div>
<div class="features-content">
<h4>Create Playlist</h4>
<p>Create unlimited playlist as you want in your app.</p>
</div>
</div>
<div class="single-features-item dfx aic wow fadeInRight" data-wow-delay="0.4s">
<div class="features-icon">
<span class="mdi mdi-radio"></span>
</div>
<div class="features-content">
<h4>Create Playlist</h4>
<p>Create unlimited playlist as you want in your app.</p>
</div>
</div>
<div class="single-features-item dfx aic wow fadeInRight hidden-sm" data-wow-delay="0.6s">
<div class="features-icon">
<span class="mdi mdi-server"></span>
</div>
<div class="features-content">
<h4>Create Playlist</h4>
<p>Create unlimited playlist as you want in your app.</p>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="c-border-bg">
<div class="container">
<div class="row">
<div class="col-lg-3 col-md-6 wow fadeInLeft" data-wow-delay="0.8s">
<div class="single-counter-box">
<p class="counter-number"><span>97</span>K</p>
<h6>DOWNLOAD</h6>
</div>
</div>
<div class="col-lg-3 col-md-6 wow fadeInLeft" data-wow-delay="0.6s">
<div class="single-counter-box">
<p class="counter-number"><span>2000</span></p>
<h6>PREMIUM MEMBER</h6>
</div>
</div>
<div class="col-lg-3 col-md-6 wow fadeInLeft" data-wow-delay="0.4s">
<div class="single-counter-box">
<p class="counter-number"><span>500</span></p>
<h6>CLIENT REVIEW</h6>
</div>
 </div>
<div class="col-lg-3 col-md-6 wow fadeInLeft" data-wow-delay="0.2s">
<div class="single-counter-box">
<p class="counter-number"><span>20</span>K</p>
<h6>MUSIC LIBRARY</h6>
</div>
</div>
</div>
</div>
</div>

</div>


<div class="rectangle-area pd-100 o-hi">
<div class="container">
<div class="row aic">
<div class="col-lg-6 text-right wow fadeInLeft" data-wow-delay="0.2s">
<div class="rectangle-img">
<img src="{{ asset ('landing_page/image/Main-Screen.png') }}" alt="">
<img src="{{ asset ('landing_page/image/mask.png') }}" alt="" class="mask">
<img src="{{ asset ('landing_page/image/Message-1.png') }}" alt="" class="message-1">
</div>
</div>
<div class="col-lg-6 wow fadeInRight" data-wow-delay="0.4s">
<div class="rectangle-right">
<div class="title">
<span class="mdi mdi-equalizer"></span>
<h2>Stream & Offline Download <span>in Your Devices.</span></h2>
<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem for make a accusantium doloremque laudantium, totam.</p>
</div>
<ul class="list">
<li>Insufficient order for make every as a Moments.</li>
<li>The Wealth of New Choices With Robot narrow Vacuum Cleaners.</li>
<li>How to Prepare for an Automated Future.</li>
</ul>
<a href="#" class="boxed-btn">
<div class="dfx aic">
<div class="btn-icon-img">
<img src="{{ asset ('landing_page/image/google-play.png') }}" alt="">
</div>
<div class="btn-content">
<h6><span>Getiton</span> Google Play</h6>
</div>
</div>
</a>
<a href="#" class="boxed-btn active right-btn">
<div class="dfx aic">
<div class="btn-icon-img">
<img src="{{ asset ('landing_page/image/app.png') }}" alt="">
</div>
<div class="btn-content">
<h6><span>Download on the</span> App Store</h6>
</div>
</div>
</a>
</div>
</div>
</div>
</div>
<img src="{{ asset ('landing_page/image/shape.png') }}" alt="" class="shape-img">
</div>


<div class="testimonial-area testimonial2" id="testimonial">
<div class="container">
<div class="row">
<div class="col-lg-6 col-md-8 wow fadeInUp" data-wow-delay="0.2s">
<div class="t-title">
<h6>TESTIMONIAL</h6>
<h2>What User Say & Their <span>Music Experience.</span></h2>
</div>
</div>
<div class="col-lg-6 col-md-4 wow fadeInUp" data-wow-delay="0.4s">
<div class="nav-bar">
<button class="prevbtn"><span class="mdi mdi-arrow-left"></span></button>
<button class="nextbtn"><span class="mdi mdi-arrow-right"></span></button>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<div class="owl-carousel t-carousel nav-bar">
<div class="single-c-item wow fadeInRight" data-wow-delay="0.2s">
<h5>Excellent App for Music Lover</h5>
<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem for a new to accusantium doloremque.</p>
<div class="t-content aic dfx">
<div class="t-image">
<img src="{{ asset ('landing_page/image/team-1.jpg') }}" alt="">
</div>
<div class="t-text">
<h6>Steve Rods <span>Businessman</span></h6>
</div>
</div>
<div class="quote-icon">
<i class="fas fa-quote-right"></i>
</div>
</div>
<div class="single-c-item wow fadeInRight" data-wow-delay="0.4s">
<h5>Excellent App for Music Lover</h5>
<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem for a new to accusantium doloremque.</p>
<div class="t-content aic dfx">
<div class="t-image">
<img src="{{ asset ('landing_page/image/team-2.jpg') }}" alt="">
</div>
<div class="t-text">
 <h6>Steve Rods <span>Businessman</span></h6>
</div>
</div>
<div class="quote-icon">
<i class="fas fa-quote-right"></i>
</div>
</div>
<div class="single-c-item wow fadeInRight" data-wow-delay="0.6s">
<h5>Excellent App for Music Lover</h5>
<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem for a new to accusantium doloremque.</p>
<div class="t-content aic dfx">
<div class="t-image">
<img src="{{ asset ('landing_page/image/team-3.jpg') }}" alt="">
</div>
<div class="t-text">
<h6>Steve Rods <span>Businessman</span></h6>
</div>
</div>
<div class="quote-icon">
<i class="fas fa-quote-right"></i>
</div>
</div>
<div class="single-c-item wow fadeInRight" data-wow-delay="0.8s">
<h5>Excellent App for Music Lover</h5>
<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem for a new to accusantium doloremque.</p>
<div class="t-content aic dfx">
<div class="t-image">
<img src="{{ asset ('landing_page/image/team-4.jpg') }}" alt="">
</div>
<div class="t-text">
<h6>Steve Rods <span>Businessman</span></h6>
</div>
</div>
<div class="quote-icon">
<i class="fas fa-quote-right"></i>
</div>
</div>
<div class="single-c-item wow fadeInRight" data-wow-delay="0.9s">
<h5>Excellent App for Music Lover</h5>
<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem for a new to accusantium doloremque.</p>
<div class="t-content aic dfx">
<div class="t-image">
<img src="{{ asset ('landing_page/image/team-5.jpg') }}" alt="">
</div>
<div class="t-text">
<h6>Steve Rods <span>Businessman</span></h6>
</div>
</div>
<div class="quote-icon">
<i class="fas fa-quote-right"></i>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="screen-slider">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-7 text-center wow fadeIn" data-wow-delay="0.2s">
<div class="title">
<h6>SCREENSHOT</h6>
<h2>All App Screen <span>& App Flow</span></h2>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-12 wow fadeInUp" data-wow-delay="0.4s">
<div class="swiper-container gallery-slider">
<div class="swiper-wrapper">
<div class="swiper-slide">
<div class="slide-item">
<img src="{{ asset ('landing_page/image/screen2.png') }}" alt="" class="img-responsive">
</div>
</div>
<div class="swiper-slide">
<div class="slide-item">
<img src="{{ asset ('landing_page/image/screen3.png') }}" alt="" class="img-responsive">
</div>
</div>
<div class="swiper-slide">
<div class="slide-item">
<img src="{{ asset ('landing_page/image/screen2.png') }}" alt="" class="img-responsive">
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="pricing-area price2 pd-100">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-7 text-center wow fadeInUp" data-wow-delay="0.2s">
<div class="title white">
<h2>No Hidden Price Best Price Around Market</h2>
<p>Compellingly communicate high-payoff vortals vis-a-vis real-time functionalities. </p>
</div>
</div>
</div>
<div class="row aic">
<div class="col-lg-4 col-md-6 wow fadeInLeft" data-wow-delay="0.2s">
<div class="single-pricing-item">
<div class="pricing-header">
<h3>Basic Plan</h3>
<div class="price">
<h2><span>$</span>49<sup>.99</sup><strong>/Per Month</strong></h2>
</div>
</div>
<div class="pricing-content">
<ul>
<li><strong>Advance </strong>Analytics</li>
<li><strong>Change </strong>Management</li>
<li><strong>Corporate </strong>Finance</li>
<li class="f-o">Strategy & Marketing</li>
<li class="f-o">Information Technology</li>
</ul>
</div>
<div class="pricing-footer">
<a href="" class="border-4-btn">BUY NOW</a>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
<div class="single-pricing-item active">
<div class="pricing-header">
<h3>Basic Plan</h3>
<div class="price">
<h2><span>$</span>69<sup>.99</sup><strong>/Per Month</strong></h2>
</div>
</div>
<div class="pricing-content">
<ul>
<li><strong>Advance </strong>Analytics</li>
<li><strong>Change </strong>Management</li>
<li><strong>Corporate </strong>Finance</li>
<li class="f-o">Strategy & Marketing</li>
<li class="f-o">Information Technology</li>
</ul>
</div>
<div class="pricing-footer">
<a href="" class="border-4-btn">BUY NOW</a>
<span class="mdi mdi-check-circle-outline"></span>
<p>Recommended</p>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 wow fadeInRight hidden-sm" data-wow-delay="0.2s">
<div class="single-pricing-item">
<div class="pricing-header">
<h3>Basic Plan</h3>
<div class="price">
<h2><span>$</span>99<sup>.99</sup><strong>/Per Month</strong></h2>
</div>
</div>
<div class="pricing-content">
<ul>
<li><strong>Advance </strong>Analytics</li>
<li><strong>Change </strong>Management</li>
<li><strong>Corporate </strong>Finance</li>
<li class="f-o">Strategy & Marketing</li>
<li class="f-o">Information Technology</li>
</ul>
</div>
<div class="pricing-footer">
<a href="" class="border-4-btn">BUY NOW</a>
</div>
</div>
</div>
</div>
</div>

<div class="animation-4">
<span></span>
<span></span>
<span></span>
<span></span>
<span></span>
<span></span>
<span></span>
<span></span>
<span></span>
</div>
</div>


<div class="case-study case-study2 padding-t">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-8 text-center wow fadeInUp" data-wow-delay="0.2s">
<div class="title">
<h4>Case Study</h4>
<h2>Our Project & Research</h2>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-4 col-md-6 wow fadeInRight" data-wow-delay="0.2s">
<div class="single-study9">
<img src="{{ asset ('landing_page/image/study9/study9-1.jpg') }}" alt="">
<div class="study-text">
<h3><a href="#">ICO Website Seo</a></h3>
<p>Cras eu elit congue, placerat dui ut, tincidunt nisl. Nulla leo elit, </p>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 wow fadeInRight" data-wow-delay="0.4s">
<div class="single-study9">
<img src="{{ asset ('landing_page/image/study9/study9-2.jpg') }}" alt="">
<div class="study-text">
<h3><a href="#">Mastermind Research</a></h3>
<p>Cras eu elit congue, placerat dui ut, tincidunt nisl. Nulla leo elit, </p>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 wow fadeInRight hidden-sm" data-wow-delay="0.6s">
<div class="single-study9">
<img src="{{ asset ('landing_page/image/study9/study9-3.jpg') }}" alt="">
<div class="study-text">
<h3><a href="#">ICO Website Seo</a></h3>
<p>Cras eu elit congue, placerat dui ut, tincidunt nisl. Nulla leo elit, </p>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="subscribe pt-100">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-8 text-center wow fadeInUp" data-wow-delay="0.2s">
<div class="subscribe-bg-c">
<div class="title">
<span class="mdi mdi-google-nearby"></span>
<h2>Subscribe to <span>Our Newsletter</span></h2>
</div>
<div class="form-area">
<form action="#" method="POST">
<span class="form-icon">
<i class="mdi mdi-email-outline"></i>
</span>
<input type="email" id="email" placeholder="Enter Email Address ...">
<button type="submit" id="submit" class="button">SUBSCRIBE</button>
</form>
<p class="circle-text"><span class="mdi mdi-alert-circle-outline"></span> We never Send you any spam mail.</p>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="footer-area pd-100">
<div class="footer">
<div class="container">
<div class="row">
<div class="col-lg-6 col-sm-12 tc col-md-12">
<a href="index.html" class="footer-logo">
<img src="{{ asset ('landing_page/image/logo.png') }}" alt="">
</a>
<p># 1 Music App for Music Lover.</p>
</div>
<div class="col-lg-6 col-sm-12 tc col-md-12">
<div class="footer-btn">
<h4>Download App Now!</h4>
<a href="#" class="boxed-btn">
<div class="dfx aic">
<div class="btn-icon-img">
<img src="{{ asset ('landing_page/image/google-play.png') }}" alt="">
</div>
<div class="btn-content">
<h6><span>Getiton</span> Google Play</h6>
</div>
</div>
</a>
<a href="#" class="boxed-btn active right-btn">
<div class="dfx aic">
<div class="btn-icon-img">
<img src="{{ asset ('landing_page/image/app.png') }}" alt="">
</div>
<div class="btn-content">
<h6><span>Download on the</span> App Store</h6>
</div>
 </div>
</a>
</div>
</div>
</div>
</div>
</div>
<div class="copyright">
<div class="container">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-12 tc">
<p>ORMAWA KMPHB</p>
</div>
<div class="col-lg-6 col-md-6 col-sm-12 tc">
<div class="copyright-section">
<ul>
<li><a href="">Privecy & Policy</a></li>
<li><a href="">Trems & Condition </a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>


<script src="{{ asset ('landing_page/js/jquery-1.12.4.min.js') }}" type="d8c396bb02207cc85c9c2094-text/javascript"></script>
<script src="{{ asset ('landing_page/js/popper.min.js') }}" type="d8c396bb02207cc85c9c2094-text/javascript"></script>
<script src="{{ asset ('landing_page/js/bootstrap.min.js') }}" type="d8c396bb02207cc85c9c2094-text/javascript"></script>
<script src="{{ asset ('landing_page/js/owl.carousel.min.js') }}" type="d8c396bb02207cc85c9c2094-text/javascript"></script>
<script src="{{ asset ('landing_page/js/swiper.min.js') }}" type="d8c396bb02207cc85c9c2094-text/javascript"></script>
<script src="{{ asset ('landing_page/js/jquery.counterup.min.js') }}" type="d8c396bb02207cc85c9c2094-text/javascript"></script>
<script src="{{ asset ('landing_page/js/waypoints.min.js') }}" type="d8c396bb02207cc85c9c2094-text/javascript"></script>
<script src="{{ asset ('landing_page/js/jquery.sticky.js') }}" type="d8c396bb02207cc85c9c2094-text/javascript"></script>
<script src="{{ asset ('landing_page/js/scrolltotop.js') }}" type="d8c396bb02207cc85c9c2094-text/javascript"></script>
<script src="{{ asset ('landing_page/js/contact-form-script.js') }}" type="d8c396bb02207cc85c9c2094-text/javascript"></script>
<script src="{{ asset ('landing_page/js/jquery.ajaxchimp.js') }}" type="d8c396bb02207cc85c9c2094-text/javascript"></script>
<script src="{{ asset ('landing_page/js/wow.min.js') }}" type="d8c396bb02207cc85c9c2094-text/javascript"></script>
<script src="{{ asset ('landing_page/js/lity.min.js') }}" type="d8c396bb02207cc85c9c2094-text/javascript"></script>
<script src="{{ asset ('landing_page/js/smooth-scroll.min.js') }}" type="d8c396bb02207cc85c9c2094-text/javascript"></script>
<script src="{{ asset ('landing_page/js/slicknav-min.js') }}" type="d8c396bb02207cc85c9c2094-text/javascript"></script>
<script src="{{ asset ('landing_page/js/jquery.barChart.js') }}" type="d8c396bb02207cc85c9c2094-text/javascript"></script>
<script src="{{ asset ('landing_page/js/jquery.barfiller.js') }}" type="d8c396bb02207cc85c9c2094-text/javascript"></script>
<script src="{{ asset ('landing_page/js/jquery.lineProgressbar.js') }}" type="d8c396bb02207cc85c9c2094-text/javascript"></script>
<script src="{{ asset ('landing_page/js/main.js') }}" type="d8c396bb02207cc85c9c2094-text/javascript"></script>
<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js') }}" data-cf-settings="d8c396bb02207cc85c9c2094-|49" defer=""></script></body>
</html>