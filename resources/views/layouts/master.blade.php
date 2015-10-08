<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>ScotSki - @yield('title')</title>

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width">

	@yield('meta')

	<!-- fonts -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab">

	<!-- stylesheets -->
	{!! Html::style('//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css') !!}
	{!! Html::style('//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css') !!}
	{!! Html::style('//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css') !!}
	@yield('styles')
	{!! Html::style('/css/all.css') !!}
</head>
<body>
@section('header')
@include('layouts.partials.header')
@show
@section('navbar')
@include('layouts.partials.navbar')
@show

<div class="container">
@yield('content')
</div>
@section('footer')
@include('layouts.partials.footer')
@show


 <!-- scripts -->
{!! Html::script('//code.jquery.com/jquery-2.1.4.min.js') !!}
{!! Html::script('//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js') !!}
@yield('scripts')
</body>
</html>