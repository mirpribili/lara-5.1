@include('layouts.header')
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				@include('components.nav')
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12"> {{-- lg md sm xs --}}
				@yield('content') {{-- yield ? выработка --}}
			</div>
		</div>
	</div>
@include('layouts.footer')
