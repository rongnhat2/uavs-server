@extends('customer.layout')
@section('title', "TIN TỨC VÀ SỰ KIỆN")


@section('css')

@endsection()


@section('body') 
		<div class="I-news2">
			<div class="page-header" style="background-image: url('{{ asset("customer/assets/images/top-bg.png") }}');">
				<div class="page-title">
					<h2 class="title-block">
						TIN TỨC VÀ SỰ KIỆN
					</h2>
				</div>
			</div>
			<div class="wrapper">
				<div class="news-wrapper">
					<div class="news-list-wrapper">
						<div class="list-item">

						</div>
						{{-- <div class="pagination-item">
							
						</div> --}}
					</div>
					<div class="side-wrapper"> 
						<div class="news-filter-wrapper">
							<div class="search-wrapper">
								<div class="input-wrapper">
									<input type="text" class="data-search" placeholder="Tìm kiếm">
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

								</div>
							</div>
						</div>
						<div class="news-post-wrapper">
							<div class="post-wrapper">
								<div class="post-title">
									Bài viết nổi bật
								</div>
								<div class="post-list">
									{{-- <div class="post-item">
										<div class="item-image" style="background-image: url('assets/images/about-image-01.png');"></div>
										<a href="">HOẠT ĐỘNG GIẢI TRÍ PHỔ BIẾN TẠI ÚC “XỨ SỞ CHUỘT TÚI” CÓ ĐÁNG ĐỂ MONG CHỜ?</a>
									</div>
									<div class="post-item">
										<div class="item-image" style="background-image: url('assets/images/about-image-01.png');"></div>
										<a href="">HOẠT ĐỘNG GIẢI TRÍ PHỔ BIẾN TẠI ÚC “XỨ SỞ CHUỘT TÚI” CÓ ĐÁNG ĐỂ MONG CHỜ?</a>
									</div>
									<div class="post-item">
										<div class="item-image" style="background-image: url('assets/images/about-image-01.png');"></div>
										<a href="">HOẠT ĐỘNG GIẢI TRÍ PHỔ BIẾN TẠI ÚC “XỨ SỞ CHUỘT TÚI” CÓ ĐÁNG ĐỂ MONG CHỜ?</a>
									</div> --}}
								</div>
							</div>
						</div>
					</div>	
				</div>
			</div>	
		</div>
@endsection()

@section('js') 
<script type="text/javascript" src="{{ asset("customer/assets/js/page/event.js") }}"></script> 
@endsection()