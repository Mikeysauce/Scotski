@extends('layouts.master')
@section('title', 'Piste Maps')
@section('scripts')
{!! Html::script('/js/lightbox.js') !!}
@stop
@section('content')
@if(Session::has('message'))
    <div class="alert alert-info">
      {{Session::get('message')}}
    </div>
@endif
<div class="col-md-12 map-outer">
            <div class="col-md-6" >
                <h2 class="txtcolour">Glencoe Pistes</h2>
                <p>Visit the original & best ski area in Scotland.</p>
                <p>Established in 1956 Glencoe is Scotland's oldest Ski centre and has a reputation as being a great venue for the more experienced skier. With stunning scenery and a great choice of runs including the famous 'flypaper' (The UK's steepest black run) Glencoe is a must visit destination for the more experienced skier and snowboarder.</p>
                <p>However what few people know is that Glencoe also has a large plateau area which makes the perfect setting for those new to snow sports. Further improvements to the beginner's area have been made for this season with a new rope tow across the plateau which has its very own snow cannon to ensure that the very best snow conditions are always available.</p>
            </div>
            <div class="col-md-6">
              <a alt="Glencoe Piste Map" href="http://www.piste-maps.co.uk/Piste-Maps/Scotland/Glencoe-Piste-Map.jpg" data-title="Glencoe Piste map" data-lightbox="image-1"><img src="http://www.piste-maps.co.uk/Piste-Maps/Scotland/Glencoe-Piste-Map.jpg" class="img-responsive pistes" /></a>
            </div>
</div>


<div class="col-md-12 map-outer">
            <div class="col-md-6" >
                <h2 class="txtcolour">Glenshee Pistes</h2>
                <p>Glenshee, which takes its name from the Gaelic 'Glen of the Fairies', certainly offers one of the most magical skiing experiences in Scotland.</p>
                <p>The largest resort in the UK, it covers an area of more than 2,000 acres extending across four mountains and three valleys and boasting 21 lifts and tows.</p>
                <p>Glenshee offers a choice of 36 runs comprising 40 kms of pisted snow. The longest single run, Glas Maol, extends to a fantastic 2 kms of skiing, while the extensive snow-making facilities means the centre is often open for longer.</p>
            </div>
            <div class="col-md-6">
                  <a alt="Piste Map" href="http://www.piste-maps.co.uk/Piste-Maps/Scotland/Glenshee-Piste-Map.jpg" data-title="Glenshee Piste map" data-lightbox="image-1"><img src="http://www.piste-maps.co.uk/Piste-Maps/Scotland/Glenshee-Piste-Map.jpg" class="img-responsive pistes" /></a>
            </div>
</div>

<div class="col-md-12 map-outer">
            <div class="col-md-6" >
                <h2 class="txtcolour">Cairngorm Pistes</h2>
                <p>Cairngorm Mountain has a reputation as one of the most beautiful - and sometimes challenging - places to ski in the UK, as well as boasting Scotland's only funicular railway.</p>
                <p>It's also Scotland's most popular resort and is located just a short distance from the main A9 arterial route which runs between Perth and Inverness.    </p>
                <p>Whether you're a skier or not, the ride on the train to the Ptarmigan Top Station is a unique experience with an opportunity to take in fantastic panoramic views of the surrounding area.</p>
            </div>
            <div class="col-md-6">
              <a alt="Piste Map" href="http://www.piste-maps.co.uk/Piste-Maps/Scotland/Cairngorm-Piste-Map.jpg" data-title="Cairngorm Piste map" data-lightbox="image-1"><img src="http://www.piste-maps.co.uk/Piste-Maps/Scotland/Cairngorm-Piste-Map.jpg" class="img-responsive pistes" /></a>
            </div>
</div>

<div class="col-md-12 map-outer">
            <div class="col-md-6" >
                <h2 class="txtcolour">Nevis-Range Pistes</h2>
                <p>With skiing up to 1190 metres (3,900 feet) Nevis Range reaches high on to the mountain of Aonach Mor - Scotland's eighth highest - and offers skiing and boarding late into spring.</p>
                <p>The base of the snowsports area is accessed by the UK’s only mountain gondola taking visitors from the car park just above sea level to 650 metres (2,150 feet). The beginner's area is literally a stone’s throw away from the Snowgoose restaurant at the top station, with a variety of easy green and blue graded runs. An artificial slope also provides skiing opportunities when snow is lean.</p>
            </div>
            <div class="col-md-6">
              <a alt="Piste Map" href="http://www.piste-maps.co.uk/Piste-Maps/Scotland/Nevis-Range-Piste-Map.jpg" data-title="Nevis-Range Piste map" data-lightbox="image-1"><img src="http://www.piste-maps.co.uk/Piste-Maps/Scotland/Nevis-Range-Piste-Map.jpg" class="img-responsive pistes" /></a>
            </div>
</div>

<div class="col-md-12 map-outer">
            <div class="col-md-6" >
                <h2 class="txtcolour">The Lecht Pistes</h2>
                <p>Situated in the stunning location in Eastern Cairngorms at 2,090 ft above sea level it is in the heart of Scotland’s largest National Park.</p>
                <p>Operating since the mid 1970s, the resort has grown from one ski tow to a year-round highland activity centre with 20 maintained ski runs and 15 lifts. This is one of Scotland’s top ski resorts and is accessible from one of the most scenically beautiful roads in Scotland, the A939, between Timintoul and Strathdon and can be reached easily from Speyside and Aviemore, Donside and Aberdeen as well as royal Deeside.</p>
            </div>
            <div class="col-md-6">
              <a alt="Piste Map" href="http://www.piste-maps.co.uk/Piste-Maps/Scotland/TheLecht-PisteMap.jpg" data-title="The Lecht Piste map" data-lightbox="image-1"><img src="http://www.piste-maps.co.uk/Piste-Maps/Scotland/TheLecht-PisteMap.jpg" class="img-responsive pistes" /></a>
            </div>
</div>
@stop






{{--                   <div class="col-md-12">
              <h2 class="special2">Glenshee</h2>
              <hr class="style-two">
              <a href="http://www.piste-maps.co.uk/Piste-Maps/Scotland/Glenshee-PisteMap.jpg" data-lightbox="image-1"><img src="http://www.piste-maps.co.uk/Piste-Maps/Scotland/Glenshee-PisteMap.jpg" alt="Scotski Banner" class="img-responsive"></a>
         </div>
     </div>
</div>
@stop --}}