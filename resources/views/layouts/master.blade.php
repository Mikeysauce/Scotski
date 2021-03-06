<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>ScotSki - @yield('title')</title>

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width">
	<meta name="google" content="notranslate" />
  @yield('meta')

	<!-- fonts -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab">

	<!-- stylesheets -->
	{!! Html::style('//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css') !!}
	{!! Html::style('//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css') !!}
	{!! Html::style('//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css') !!}
	{!! Html::style('//cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.1/css/lightbox.min.css') !!}
	@yield('styles')
	{!! Html::style('/css/style.css') !!}
</head>
<body>
<div class="transwrap" style="display:none;"><div id="google_translate_element"></div></div>
@section('header')
@include('layouts.partials.header')
@show

@if (!Auth::check())
@section('navbar')
@include('layouts.partials.navbar')
@show
@endif

@if (Auth::check())
@section('navbar')
@include('layouts.partials.navbar-loggedin')
@show
@endif

<div class="container">
@section('messages')
@include('layouts.partials.messages')
@yield('content')
</div>
@section('footer')
@include('layouts.partials.footer')
@show


 <!-- scripts -->
{!! Html::script('//code.jquery.com/jquery-2.1.4.min.js') !!}
{!! Html::script('//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js') !!}

<script type="text/javascript">
  function googleTranslateElementInit() {
    new google.translate.TranslateElement({pageLanguage: 'en', autoDisplay: false}, 'google_translate_element'); //remove the layout
  }
</script>
<script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" type="text/javascript"></script>


{!! Html::script('/js/alls.js') !!}
@yield('scripts')
</body>
</html>