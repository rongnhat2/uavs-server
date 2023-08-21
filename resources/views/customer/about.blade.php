@extends('customer.layout')
@section('title', "Về chúng tôi")


@section('css')

@endsection()


@section('body') 
		<div class="I-about-us">
			<div class="page-header" style="background-image: url('{{ asset("customer/assets/images/top-bg.png") }}');">
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
								Tự hào với ba giá trị cốt lõi <span>“Kết Nối - Tương Trợ - Phát Triển”</span>, SVAU là cầu nối tin cậy giữa sinh viên với doanh nghiệp và các cơ quan ban ngành trong nước cũng như tại Australia. Ngoài ra, với mục tiêu mang những tiến bộ khoa học công nghệ tạo ra bởi các chuyên gia người Việt đang sinh sống và làm việc tại Australia, SVAU thành lập Mạng lưới Đổi mới Sáng tạo Việt - Úc để thúc đẩy phát triển công nghệ 4.0 như Nông nghiệp Thông minh, Giải pháp Giao thông Thông minh, Tự động hoá trong cuộc sống…
							</div>
						</div>
					</div>
					<div class="mission-image">
						<div class="image-bg-01"><img src="{{ asset("customer/assets/images/about-bg-01.png") }}" alt=""></div>
						<div class="image-01"><img src="#" class="data-image-about" data-image-item="data_image_about_02" alt=""></div>
						<div class="image-bg-02"><img src="{{ asset("customer/assets/images/about-bg-02.png") }}" alt=""></div>
						<div class="image-wrapper">
							<img src="#" class="data-image-about" data-image-item="data_image_about_01" alt="">
						</div>
						<div class="circle">
							<img src="{{ asset("customer/assets/images/image 30.png") }}" alt="">
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
								Được thành lập vào năm 2020, Hội Sinh viên Việt Nam tại Australia (SVAU) ra đời với mục tiêu chủ đạo là tạo dựng mạng lưới kết nối cho hơn 30.000 du học sinh, thanh niên và chuyên gia người Việt đang học tập, sinh sống và làm việc tại Australia. Cộng đồng du học sinh Việt Nam tại Australia luôn cố gắng tạo ra những hoạt động ngoại khoá trên mọi lĩnh vực giúp gắn kết những học sinh, sinh viên Việt Nam đồng thời giúp bạn bè tại đất nước Úc nói riêng, trên thế giới nói chung, có cái nhìn toàn diện, tích cực và sâu sắc hơn hình ảnh đất nước hình chữ S của chúng ta. 
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