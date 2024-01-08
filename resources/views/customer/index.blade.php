@extends('customer.layout')
@section('title', "Trang chủ")


@section('css')

@endsection()


@section('body') 
		<div class="I-banner" style="background-image: url('assets/images/uavs-banner.png');">
			<div class="wrapper">
				<div class="banner-wrapper">

				</div>
			</div>
		</div>
		<div class="I-about">
			<div class="wrapper"> 
				<div class="about-content">
					<div class="content-descriotion-wrapper">
						<div>
							<p class="top-content">A STUDENT DESIGN SOCIETY</p>
							<h1 class="main-content">Sydney University <span>Experience Design</span> Society</h1>
							<p class="description-detail">We’re a society driven by students passionate about the design of everyday interactions, services, and experiences. SUEDE aims to bridge the gap between a theory-based education and practical industry-based learning.</p>
							<p class="description-detail"> We help students be better prepared for the workforce while also creating a community centred around design.</p>
							<div class="button-list">
								<a href="">About Us</a>
								<a href="" class="join">Join UAVS</a>
							</div>
						</div>
					</div>
					<div class="content-image-wrapper">
						<div class="bg-circle-01"> </div>
						<div class="bg-circle-02"> </div>
						<div class="image-wrapper">
							<div class="image-large" style="background-image: url('assets/images/about.png');"></div>
							<div class="image-list">
								<div class="image-small" style="background-image: url('assets/images/about.png');"></div>
								<div class="image-small" style="background-image: url('assets/images/about.png');"></div>
							</div>	
							<div class="image-large" style="background-image: url('assets/images/about.png');"></div> 
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="I-signigicant">
			<div class="signigicant-item">
				<div class="item-value">300</div>
				<div class="item-name">Members</div>
			</div>
			<div class="signigicant-item">
				<div class="item-value">300</div>
				<div class="item-name">Facebook Followers</div>
			</div>
			<div class="signigicant-item">
				<div class="item-value">300</div>
				<div class="item-name">Instagram Follower</div>
			</div>
			<div class="signigicant-item">
				<div class="item-value">300</div>
				<div class="item-name">LinkedIn Followers</div>
			</div>
			<div class="signigicant-item">
				<div class="item-value">300</div>
				<div class="item-name">Tiktok Followers</div>
			</div>
		</div>
		<div class="I-event">
			<div id="dynamic-bg" class="dynamic-bg event-bg" style="background-image: url('assets/images/event-bg.png');">
			   <ul class="bg-bubbles">
		            <li></li>
		            <li></li>
		            <li></li>
		            <li></li>
		            <li></li>
		            <li></li>
		            <li></li>
		            <li></li>
		            <li></li>
		            <li></li>
		            <li></li>
		            <li></li>
		            <li></li>
		        </ul>
			</div>
			<div class="wrapper"> 
				<div class="component-description">EVENTS, MERCH AND MORE.</div>
				<div class="component-title">
					<span>What do we do</span>
				</div>
				<div class="event-description-wrapper">
					<p>We connect students with one another, but also directly with leading industry partners in Sydney. We are always on the lookout to work with new industry partners, so please reach out!</p>
					<p>We work with industry and graduate partners to provide fantastic events such as our signature Portfolio Parties, workshops, industry panels, raffle events and inter-society collaborative events.</p>
					<p>We do everything from small-scale social events, such as Happy Hour Gaming, taco nights or pizza nights, to pub crawls and food outings, all the way through to networking nights! We are at the heart of a tight-knit, design centred community.</p>
				</div>
				<div class="event-join-wrapper">
					<div class="join-wrapper uavs">
						<div class="card-title">
							Events
						</div>
						<div class="card-image" style="background-image: url('assets/images/about.png');"></div>
						<div class="card-description">
							We work with industry and graduate partners to provide fantastic events such as our signature Portfolio Parties, workshops, industry panels, raffle events and inter-society collaborative events.
						</div>
						<a href="" class="event-link">View Events</a>
					</div>
					<div class="join-wrapper student">
						<div class="card-title">
							Associated Events
						</div>
						<div class="card-image" style="background-image: url('assets/images/about.png');"></div>
						<div class="card-description">
							We work with industry and graduate partners to provide fantastic events such as our signature Portfolio Parties, workshops, industry panels, raffle events and inter-society collaborative events.
						</div>
						<a href="" class="event-link">View Associated Events</a>
					</div>
				</div>
			</div>
		</div>
		<div class="I-linked">
			<div class="wrapper"> 
				<div class="component-description">GET FORTNIGHTLY ACCESS TO</div>
				<div class="component-title">
					<span>Exclusive design NEWSLETTER</span>
				</div>
 				<div class="linked-wrapper">
 					<div class="linked-item">
 						<p class="linked-description">
 							In addition to various other member perks, SUEDE members get access to our newsletter; The Material. It's rich with design resources, blog posts from faculty members and design students, industry news and job opportunities, and there's a new issue every fortnight.
 						</p>
						<a href="" class="linked-link">Join UAVS</a>
 					</div>
 					<div class="linked-item">
 						<div class="card-image" style="background-image: url('assets/images/about.png');"></div>
 					</div>
 				</div>
			</div>
		</div>
		<div class="I-social">
			<div class="social-item">
				<a href="#"><img src="assets/images/facebook-logo.svg" alt=""></a> 
			</div>
			<div class="social-item">
				<a href="#"><img src="assets/images/instagram.svg" alt=""></a> 
			</div>
			<div class="social-item">
				<a href="#"><img src="assets/images/linkedin.svg" alt=""></a> 
			</div>
			<div class="social-item">
				<a href="#"><img src="assets/images/discord.svg" alt=""></a> 
			</div>
			<div class="social-item">
				<a href="#"><img src="assets/images/medium.svg" alt=""></a> 
			</div>
			<div class="social-item">
				<a href="#"><img src="assets/images/tik-tok.svg" alt=""></a> 
			</div>
		</div>
		<div class="I-sponsors">
			<div class="wrapper">  
				<div class="component-title">
					<span>Proudly sponsored by</span>
				</div> 
				<div class="sponsors-list">
					<div class="sponsore-item">
						<img src="assets/images/sponsors-01.png" alt="">
					</div>
					<div class="sponsore-item">
						<img src="assets/images/sponsors-02.png" alt="">
					</div>
					<div class="sponsore-item">
						<img src="assets/images/sponsors-01.png" alt="">
					</div>
					<div class="sponsore-item">
						<img src="assets/images/sponsors-02.png" alt="">
					</div>
					<div class="sponsore-item">
						<img src="assets/images/sponsors-01.png" alt="">
					</div>
					<div class="sponsore-item">
						<img src="assets/images/sponsors-02.png" alt="">
					</div>
					<div class="sponsore-item">
						<img src="assets/images/sponsors-01.png" alt="">
					</div>
					<div class="sponsore-item">
						<img src="assets/images/sponsors-02.png" alt="">
					</div>
				</div>
				<div class="button-list">
					<a href="">More Sponsors</a>
					<a href="" class="join">Contact Us</a>
				</div>
			</div>
		</div>
@endsection()

@section('js') 
<script type="text/javascript" src="{{ asset("customer/assets/js/page/hotel-detail.js") }}"></script> 
@endsection()