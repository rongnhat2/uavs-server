<!DOCTYPE html>
<html class="is-scrolling">
<head>
	<title>UAVS - @yield('title')</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link rel="shortcut icon" href="{{ asset("favicon.png") }}">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset("customer/assets/css/style.css") }}" /> 
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  
    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>
<body>
	<header>
		<div class="head-line"></div>
		<div class="head-content">
			<div class="wrapper">
				<a href="{{ route("customer.index") }}" class="header-logo">
					<img src="{{ asset("customer/assets/images/logo.png") }}" alt="">
				</a>
				<div class="header-nav">
					<a href="{{ route("customer.index") }}" page-name="index">Trang chủ</a>
					<a href="{{ route("customer.about") }}" page-name="about">Giới thiệu</a>
					<a href="{{ route("customer.future") }}" page-name="future">Sự kiện</a> 
					<a href="{{ route("customer.event") }}" page-name="event">Blog</a>
					<a href="{{ route("customer.community") }}" page-name="community">Liên hệ</a> 
				</div>
				<div class="nav-control">
					<i class="fas fa-bars"></i>
				</div>
			</div>
		</div>
	</header>
	<main>
		<input type="hidden" value="{{ $page }}" class="page-name">
		@yield('body')
	</main> 
	<footer style="background-image: url('{{ asset("customer/assets/images/bg-footer.png") }}');">
		<div class="wrapper">
			<div class="footer-top">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
						<a href="{{ route("customer.index") }}" class="logo-footer">
							<img src="{{ asset("customer/assets/images/uavs.png") }}" alt="">
						</a>
						<h4 class="title-footer">
							Vietnamese Students in Australia
						</h4>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
						<p class="footer-item">Địa chỉ: <span class="data-value" data-value-item="data_detail_1"></span></p>
						<p class="footer-item">Giờ làm việc: 09:00 - 18:00</p>
						<p class="footer-item">Hotline: <span class="data-value" data-value-item="data_detail_2"></span></p>
						<p class="footer-item">E-mail: <span class="data-value" data-value-item="data_detail_3"></span></p>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
						<p class="footer-item"><a href="{{ route("customer.about") }}">About us</a></p>
						<p class="footer-item"><a href="{{ route("customer.future") }}">Future Students</a></p>
						<p class="footer-item"><a href="{{ route("customer.current") }}">Current Students</a></p>
						<p class="footer-item"><a href="{{ route("customer.event") }}">Events and News</a></p>
						<p class="footer-item"><a href="{{ route("customer.community") }}">Our Community</a></p>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
						<p class="footer-item">Kết nối với chúng tôi: </p>
						<div class="social-list">
							<a href="#" class="social-item data-link" data-link-item="data_detail_4"><i class="fab fa-facebook-square"></i></a>
							<a href="#" class="social-item data-link" data-link-item="data_detail_5"><i class="fab fa-linkedin"></i></a>
						</div>	
					</div>
				</div>	
			</div>		
			<div class="footer-bottom">
				© Copyright 2023 All rights reserved.
			</div>
		</div>
	</footer>
</body>
<script src="https://kit.fontawesome.com/d8162761f2.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>   
<script type="text/javascript" src="{{ asset("customer/assets/js/owl.carousel.js") }}"></script>
<script type="text/javascript" src="{{ asset("customer/assets/js/api.js") }}"></script>
<script type="text/javascript" src="{{ asset("customer/assets/js/window.js") }}"></script>
@yield('js')

</html>			