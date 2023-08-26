@extends('customer.layout')
@section('title', "Trang chủ")


@section('css')

@endsection()


@section('body')  
	<div class="I-infomation">
		<div class="page-header" >
			<div class="page-title">
				<h2 class="title-block">
					Liên hệ
				</h2>
			</div>
		</div>
		<div class="wrapper"> 
			<div class="info-wrapper m-t-50">
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