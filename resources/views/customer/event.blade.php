@extends('customer.layout')
@section('title', "Trang chủ")


@section('css')

@endsection()


@section('body') 
	<div class="I-page-event">
		<div class="event-header">
			<div class="wrapper">
				<h3>We're always doing new things.</h3>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
			</div>
		</div>
		<div class="wrapper">
			<div class="event-main">
				<a href="#" class="event-item">
					<div class="item-title">
						UAVS Events
					</div>
				</a>
				<a href="#" class="event-item">
					<div class="item-title">
						Student Events
					</div>
				</a> 
			</div>
		</div>
	</div>
@endsection()

@section('js') 
<script type="text/javascript" src="{{ asset("customer/assets/js/page/hotel-detail.js") }}"></script> 
@endsection()