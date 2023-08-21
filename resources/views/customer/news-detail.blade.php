@extends('customer.layout')
@section('title', "SINH VIÊN TƯƠNG LAI")


@section('css')

@endsection()


@section('body')
		<div class="I-news">
			<div class="page-header" style="background-image: url('{{ asset("customer/assets/images/top-bg.png") }}');">
				<div class="page-title">
					<h2 class="title-block">
						Về chúng tôi
					</h2>
				</div>
			</div>
			<div class="wrapper">
				<div class="news-wrapper">
					<div class="news-detail">
						<div class="news-banner" style="background-image: url('{{ asset("customer/assets/images/top-bg.png") }}');"> </div>
						<h2 class="news-title">
							Tổng quan về cấp 3 tại Úc
						</h2>
						<p class="news-description">
							Úc luôn được mệnh danh là một trong những đất nước sở hữu nền giáo dục...
						</p>
						<div class="news-detail">
							
						</div>
					</div>
					<div class="side-wrapper"> 
						<div class="news-filter-wrapper">
							<div class="search-wrapper">
								<div class="input-wrapper">
									<input type="text" placeholder="Tìm kiếm">
									<div class="search-action">
										<i class="fas fa-search"></i>
									</div>
								</div>
							</div>
							<div class="category-wrapper">
								<div class="category-title">
									Danh mục
								</div>
								<div class="category-list">
									<div class="category-item">
										<a href="">Tìm hiểu về giáo dục Úc</a>
										<div class="item-count">
											10
										</div>
									</div>
									<div class="category-item">
										<a href="">Tìm hiểu về giáo dục Úc</a>
										<div class="item-count">
											10
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="news-post-wrapper">
							<div class="post-wrapper">
								<div class="post-title">
									Bài viết nổi bật
								</div>
								<div class="post-list">
									<div class="post-item">
										<div class="item-image" style="background-image: url('{{ asset("customer/assets/images/about-image-01.png") }}');"></div>
										<a href="">HOẠT ĐỘNG GIẢI TRÍ PHỔ BIẾN TẠI ÚC “XỨ SỞ CHUỘT TÚI” CÓ ĐÁNG ĐỂ MONG CHỜ?</a>
									</div>
									<div class="post-item">
										<div class="item-image" style="background-image: url('{{ asset("customer/assets/images/about-image-01.png") }}');"></div>
										<a href="">HOẠT ĐỘNG GIẢI TRÍ PHỔ BIẾN TẠI ÚC “XỨ SỞ CHUỘT TÚI” CÓ ĐÁNG ĐỂ MONG CHỜ?</a>
									</div>
									<div class="post-item">
										<div class="item-image" style="background-image: url('{{ asset("customer/assets/images/about-image-01.png") }}');"></div>
										<a href="">HOẠT ĐỘNG GIẢI TRÍ PHỔ BIẾN TẠI ÚC “XỨ SỞ CHUỘT TÚI” CÓ ĐÁNG ĐỂ MONG CHỜ?</a>
									</div>
								</div>
							</div>
						</div>
					</div>	
				</div>
			</div>	
		</div>
@endsection()