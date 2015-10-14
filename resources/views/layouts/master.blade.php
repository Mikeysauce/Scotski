<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>ScotSki - @yield('title')</title>

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
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


<script type="text/javascript">
    function triggerHtmlEvent(element, eventName) {
var event;
if(document.createEvent) {
    event = document.createEvent('HTMLEvents');
    event.initEvent(eventName, true, true);
    element.dispatchEvent(event);
} else {
    event = document.createEventObject();
    event.eventType = eventName;
    element.fireEvent('on' + event.eventType, event);
}
}
        $('.translation-links a').click(function(e) {
  e.preventDefault();
  var lang = $(this).data('lang');
  $('#google_translate_element select option').each(function(){
    if($(this).text().indexOf(lang) > -1) {
        $(this).parent().val($(this).val());
        var container = document.getElementById('google_translate_element');
        var select = container.getElementsByTagName('select')[0];
        triggerHtmlEvent(select, 'change');
    }
});
});
</script>
{!! Html::script('/js/scrollfix.js') !!}
@yield('scripts')
</body>
</html>