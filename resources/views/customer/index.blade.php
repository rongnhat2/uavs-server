@extends('customer.layout')
@section('title', "Trang chủ")


@section('css')

@endsection()


@section('body') 
	<div class="I-banner" style="background-image: url('customer/assets/images/uavs-banner.png');">
		<div class="wrapper">
			<div class="banner-wrapper">

			</div>
		</div>
	</div>
	<div class="I-about">
		<div class="wrapper">
			<h3 class="component-title">
				Về chúng tôi
			</h3>
			<div class="about-content">
				<div class="content-descriotion-wrapper">
					<div>
						<p>Được thành lập vào năm 2020, Hội Sinh viên Việt Nam tại Australia (SVAU) ra đời với mục tiêu chủ đạo là tạo dựng mạng lưới kết nối cho hơn 30.000 du học sinh, thanh niên và chuyên gia người Việt đang học tập, sinh sống và làm việc tại Australia.</p>
						<p>Cộng đồng du học sinh Việt Nam tại Australia luôn cố gắng tạo ra những hoạt động ngoại khoá trên mọi lĩnh vực giúp gắn kết những học sinh, sinh viên Việt Nam đồng thời giúp bạn bè tại đất nước Úc nói riêng, trên thế giới nói chung, có cái nhìn toàn diện, tích cực và sâu sắc hơn hình ảnh đất nước hình chữ S của chúng ta. </p>
					</div>
				</div>
				<div class="content-image-wrapper">
						<div class="bg-circle-01"> </div>
						<div class="bg-circle-02"> </div>
					<div class="image-wrapper">
						<img src="#" class="image-view-data" data-image="data_image_about" alt="">
					</div>
				</div>
			</div>
		</div>
		<img src="{{ asset("customer/assets/images/about-bottom.png") }}" alt="" class="about-footer">
	</div>
	{{-- <div class="I-signigicant">
		<div class="wrapper">
			<h3 class="component-title">
				Con số nổi bật
			</h3>
			<div class="signigicant-item-wrapper">
				<div class="item-wrapper">
					<div class="item-block">
						<div class="item-bg">
							<img src="{{ asset("customer/assets/images/signi-bg.png") }}" alt="">
						</div>
						<div class="item-top">
							<div class="item-icon"><img src="{{ asset("customer/assets/images/cap.png") }}" alt=""></div>
							<div class="item-value data-value" data-value-item="data_num_1"> </div>
							<div class="item-description">Sinh viên Việt Nam đang du học tại Australia vào năm 2021.</div>
						</div>
					</div>
				</div>
				<div class="item-wrapper">
					<div class="item-block">
						<div class="item-bg">
							<img src="{{ asset("customer/assets/images/signi-bg.png") }}" alt="">
						</div>
						<div class="item-top">
							<div class="item-icon"><img src="{{ asset("customer/assets/images/cap.png") }}" alt=""></div>
							<div class="item-value data-value" data-value-item="data_num_2"> </div>
							<div class="item-description">Hội Sinh Viên Việt Nam cấp bang trên khắp lãnh thổ Australia.</div>
						</div>
					</div>
				</div>
				<div class="item-wrapper">
					<div class="item-block">
						<div class="item-bg">
							<img src="{{ asset("customer/assets/images/signi-bg.png") }}" alt="">
						</div>
						<div class="item-top">
							<div class="item-icon"><img src="{{ asset("customer/assets/images/cap.png") }}" alt=""></div>
							<div class="item-value data-value" data-value-item="data_num_3"> </div>
							<div class="item-description">Năm hoạt động.</div>
						</div>
					</div>
				</div>
				<div class="item-wrapper">
					<div class="item-block">
						<div class="item-bg">
							<img src="{{ asset("customer/assets/images/signi-bg.png") }}" alt="">
						</div>
						<div class="item-top">
							<div class="item-icon"><img src="{{ asset("customer/assets/images/cap.png") }}" alt=""></div>
							<div class="item-value data-value" data-value-item="data_num_4"> </div>
							<div class="item-description">Sự kiện đã tổ chức tại cả Việt Nam và Australia.</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>  --}}
	<div class="I-value">
		<div class="value-bg">
			<img src="{{ asset("customer/assets/images/value-bg.png") }}" alt="">
		</div>
		<div class="wrapper">
			<div class="value-content" data-lang="value_title">
				Các con số nổi bật
			</div>
			<div class="value-item-list">
				<div class="value-item">
					<div class="item-block">
						<div class="item-top">
							<div class="item-icon">
								<img src="{{ asset("customer/assets/images/value-01.png") }}" alt="">
							</div>
							<div class="item-name" data-lang="value_item_1">
								<div class="item-value data-value" data-value-item="data_num_1"> </div>
								<div class="item-description">Sinh viên Việt Nam đang du học tại Australia vào năm 2021.</div>
							</div>
						</div>
					</div>
				</div>
				<div class="value-item">
					<div class="item-block">
						<div class="item-top">
							<div class="item-icon">
								<img src="{{ asset("customer/assets/images/value-02.png") }}" alt="">
							</div>
							<div class="item-name" data-lang="value_item_2">
								<div class="item-value data-value" data-value-item="data_num_2"> </div>
								<div class="item-description">Hội Sinh Viên Việt Nam cấp bang trên khắp lãnh thổ Australia.</div>
							</div>
						</div>
					</div>
				</div>
				<div class="value-item">
					<div class="item-block">
						<div class="item-top">
							<div class="item-icon">
								<img src="{{ asset("customer/assets/images/value-03.png") }}" alt="">
							</div>
							<div class="item-name" data-lang="value_item_3">
								<div class="item-value data-value" data-value-item="data_num_3"> </div>
								<div class="item-description">Năm hoạt động.</div>
							</div>
						</div>
					</div>
				</div>
				<div class="value-item">
					<div class="item-block">
						<div class="item-top">
							<div class="item-icon">
								<img src="{{ asset("customer/assets/images/value-04.png") }}" alt="">
							</div>
							<div class="item-name" data-lang="value_item_4">
								<div class="item-value data-value" data-value-item="data_num_4"> </div>
								<div class="item-description">Sự kiện đã tổ chức tại cả Việt Nam và Australia.</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="I-news" style="background-image: url('{{ asset("customer/assets/images/news-bg.png") }}');">
		<div class="wrapper">
			<div class="news-block-title">
				Sự kiện
			</div>
			<div class="news-item-list">
				
			</div>
		</div>			
	</div> 
	<div class="I-infomation">
		<div class="wrapper">
			<div class="component-title">
				Liên hệ
			</div>
			<div class="info-wrapper">
				<div class="info-item">
					<div class="info-block">
						<div>
							<div class="info-image">
								<img src="{{ asset("customer/assets/images/ep_map-location.svg") }}" alt="">
							</div>
							<div class="info-title">
								Địa chỉ:
							</div>
							<div class="info-detail data-value" data-value-item="data_detail_1"> </div>
						</div>
					</div>
				</div>
				<div class="info-item">
					<div class="info-block">
						<div>
							<div class="info-image">
								<img src="{{ asset("customer/assets/images/bx_phone-call.svg") }}" alt="">
							</div>
							<div class="info-title">
								Hotline:
							</div>
							<div class="info-detail data-value" data-value-item="data_detail_2"> </div>
						</div>
					</div>
				</div>
				<div class="info-item">
					<div class="info-block">
						<div>
							<div class="info-image">
								<img src="{{ asset("customer/assets/images/bx_mail-send.svg") }}" alt="">
							</div>
							<div class="info-title">
								Email:
							</div>
							<div class="info-detail data-value" data-value-item="data_detail_3"> </div>
						</div>
					</div>
				</div>
			</div>
			<div class="contact-wrapper" id="form-contact">
				<div class="contact-item">
					<img src="#" class="image-view-data" data-image="data_image_contact" alt="">
				</div>
				<div class="contact-item">
					<div class="error-log"></div>
					<div class="contact-block">
						<div class="input-block">
							<div class="input-item w50">
								<div class="input-bound">
									<div class="input-title">
										Họ Tên
									</div>
									<input type="text" class="data-name" placeholder="Họ Tên">
								</div>
							</div>
							<div class="input-item w50">
								<div class="input-bound">
									<div class="input-title">
										Số điện thoại
									</div>
									<input type="text" class="data-phone" placeholder="Số điện thoại">
								</div>
							</div>
						</div>
						<div class="input-block">
							<div class="input-item">
								<div class="input-bound">
									<div class="input-title">
										Email
									</div>
									<input type="text" class="data-email" placeholder="Email">
								</div>
							</div>
						</div>
						<div class="input-block">
							<div class="input-item">
								<div class="input-bound">
									<div class="input-title">
										Nội dung
									</div>
									<textarea class="data-message" placeholder="Nội dung"></textarea>
								</div>
							</div>
						</div>
						<div class="input-block">
							<div class="input-item">
								<button class="form-submit send-message" atr="Send">Gửi tin nhắn <i class="fas fa-chevron-right"></i></button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection()

@section('js') 
<script type="text/javascript" src="{{ asset("customer/assets/js/page/index.js") }}"></script> 
@endsection()