<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{ Auth::user()->firstname }}|{{ config('app.name', 'PAWS CLinic') }}</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet"  href="{{ asset('assets/css/css/style.css') }}">
	<link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet" />
</head>
<body>
	@include('layouts.app')
	<main>
		@yield('user-content')
	</main>


	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <script src="{{asset('assets/js/datatables-simple-demo.js')}}"></script>
    <script src="{{asset('assets/js/simple-datatables.min.js')}}"></script>
</body>
</html>