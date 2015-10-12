@extends('layouts.master')
@section('title', 'Welcome to Scotski!')
@section('content')
<div class="transwrap" style="display:none;"><div id="google_translate_element"></div></div>
<div class="jumbotron nicer">
<div class="row">
	<div class="col-md-12">
		<h2 class="special">Welcome to ScotSki, home of Scotland's biggest snow resorts</h2>
		<hr class="style-one" />
		@foreach ($posts as $post)
		    <p>{{ $post->content }}</p>
		@endforeach
	</div>
</div>
</div>


<div class="jumbotron nicer">
<div class="row">
	<div class="col-sm-6">
		<h2 class="special2">Our Slopes</h2>
		<hr class="style-two"/>
		<p>Our resorts are situated near the finest slopes in Scotland, whether you're a thrill seeker looking to experience the highest peaks, or a beginner, we have something for everyone.</p>
		<div class="embed-responsive embed-responsive-16by9">
		<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/KM6i1RoJxi4?rel=0&showinfo=0&theme=light&modestbranding=1" frameborder="0"></iframe>
		</div>
	</div>
	<div class="col-sm-6">
		<h2 class="special2">Our Resorts</h2>
		<hr class="style-two"/>
		<p>We have carefully designed our resorts to have a little something for everyone, even the little ones! feel free to check out our facilities page to explore all we have on offer.</p>
		<div class="embed-responsive embed-responsive-16by9">
		<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ALdwpUkeGbg?rel=0&showinfo=0&theme=light&modestbranding=1" frameborder="0"></iframe>
		</div>
	</div>
</div>
</div>
@stop
@section('scripts')

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
 @stop
