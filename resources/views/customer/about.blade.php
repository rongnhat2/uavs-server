@extends('customer.layout')
@section('title', "Về chúng tôi")


@section('css')

@endsection()


@section('body') 
		<div class="I-about-us">
			<div class="page-header" >
				<div class="page-title">
					<h2 class="title-block">
						Về chúng tôi
					</h2>
				</div>
			</div>
			<div class="wrapper">
				<div class="mission-wrapper">
					<div class="mission-content">
						<div class="content-wrapper">
							<div class="mission-title">
								Sứ mệnh
							</div>
							<div class="mission-description">
								United Association of Vietnamese Students in New South Wales (UAVS-NSW), established on March 25, 2018 is a connecting point of over 10000 Vietnamese students and 6 student organizations in NSW.
							</div>
						</div>
					</div>
					<div class="mission-image">
						<div class="image-bg-01"><img src="{{ asset("customer/assets/images/about-bg-01.png") }}" alt=""></div>
						<div class="image-bg-02"><img src="{{ asset("customer/assets/images/about-bg-02.png") }}" alt=""></div>
						<div class="image-wrapper">
							<img src="#" class="data-image-about" data-image-item="data_image_about_01" alt="">
						</div>
					</div>
				</div>
			</div>	
			<div class="progress-wrapper">
				<div id="dynamic-bg" class="dynamic-bg progress-bg">
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
					<div class="progress-block">
						<div class="process-image">
							<img src="{{ asset("customer/assets/images/process-image.png") }}" alt="">
						</div>
						<div class="process-content">
							<div class="block-title">
								Quá trình hình thành và phát triển
							</div>
							<div class="block-description">
								Throughout over 4 years of operation, UAVS has had many outstanding events and competitions that serve both the needs of education and excursions such as: USC- UAVS Startup Challenge; SydneyGo (2019), UAVS Business Case Challenge (2020), UAVS Hackatrix (2021) and University Fair (2021 and 2022), and we will keep working to come up with even more and more remarkable events. 
							</div>
						</div>
					</div>
				</div>
			</div> 
		</div>
@endsection()

@section('js') 
<script type="text/javascript" src="{{ asset("customer/assets/js/page/about.js") }}"></script> 
@endsection()