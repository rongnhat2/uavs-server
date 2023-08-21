@extends('customer.layout')
@section('title', "SINH VIÊN TƯƠNG LAI")


@section('css')

@endsection()


@section('body')
		<div class="I-community">
			<div class="page-header" style="background-image: url('{{ asset("customer/assets/images/top-bg.png") }}');">
				<div class="page-title">
					<h2 class="title-block">
						Về chúng tôi
					</h2>
				</div>
			</div>
			<div class="wrapper">
				<div class="community-list">
					 
				</div>
			</div>	
		</div>
@endsection()

@section('js') 
<script type="text/javascript" src="{{ asset("customer/assets/js/page/community.js") }}"></script> 
@endsection()