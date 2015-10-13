@extends('layouts.master')
@section('content')
    @if(Session::has('message'))
    <div class="alert alert-info">
      {{Session::get('message')}}
    </div>
@endif
 <div class="jumbotron nicer">
 <h2 class="special2">Hotel</h2>
    <hr class="style-two" style="width: 8%;">
<div>
<p>
We have a hand picked selection of local hotels at each location providing a high standard of accommodation including a full Scottish breakfast and three course evening meal.  To browse some of our accommodation, view the facilities section above.
</p>
<p>
Whilst on the slopes, your lunch is provided at the resort bistro between 12 and 2 allowing you maximum time on the slopes.
</p>
<p>
Travel to your holiday destination is not included in the price, however, transfers to and from the slopes from your hotel are included.  A free shuttle bus will leave each hotel on the hour starting at 7am and finishing at 2am.  It will return from the slopes to your accommodation at 30 minutes past each hour starting at 2am and ending at 10pm.
</p>
<p>
For travel information and maps to each of our resorts view the locations section above.
</p>
 <ol class="breadcrumb">
  <li><a href="{{ URL::to('home') }}">Home</a></li>
  <li><a href="{{ URL::to('facilities') }}">Facilities</a></li>
  <li class="active">Hotel</li>
</ol>
</div>
</div>
@stop