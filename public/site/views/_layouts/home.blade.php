<!doctype html>
<html lang="en">
@include('site::_partials/head')

<body>

	@include('site::_partials/navigation')

	<div class="container">

		@include('site::_partials/header')

		@yield('main')

		@include('site::_partials/footer')

	</div>
	
</body>

</html>