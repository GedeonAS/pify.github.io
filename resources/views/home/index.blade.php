@extends('layouts.master')   
@section('banner')
    @parent
    		<!-- Start Banner Area -->
		<div class="banner-area">
			<div class="container-fluid">
				<div class="row align-items-center">
					<div class="col-lg-6">
						<div class="banner-content">
							<h1>Pify</h1>
							<h3>Share & grow the world's <span>knowledge</span>!</h3>
							<p>We want to connect with people who will share their knowledge from one person to another.</p>
							<a href="user.html" class="default-btn">
								Create a free team
							</a>
						</div>
					</div>

					<div class="col-lg-6 pe-0">
						<div class="banner-img">
							<img src="{{asset('pify/assets/images/banner/banner-img.png')}}" alt="Image">
							<img src="{{asset('pify/assets/images/banner/shape-1.png')}}" alt="Image" class="shape shape-1">
							<img src="{{asset('pify/assets/images/banner/shape-2.png')}}" alt="Image" class="shape shape-2">
							<img src="{{asset('pify/assets/images/banner/shape-3.png')}}" alt="Image" class="shape shape-3">
							<img src="{{asset('pify/assets/images/banner/shape-4.png')}}" alt="Image" class="shape shape-4">
							<img src="{{asset('pify/assets/images/banner/shape-5.png')}}" alt="Image" class="shape shape-5">
							<img src="{{asset('pify/assets/images/banner/shape-6.png')}}" alt="Image" class="shape shape-6">
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Banner Area -->
@endsection

@section('content')

		{{-- content --}}
		@include('question.content')
		{{-- content end --}}
        
@endsection
@push('scripts')
		<script>
			let page = 1
		</script>
        @include('question.script')
@endpush