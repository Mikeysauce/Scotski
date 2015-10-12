@extends('layouts.master')
@section('title', 'Locations')
@section('scripts')
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
{!! Html::script('/js/all.js') !!}
@stop
@section('content')
        <div class="col-md-12 map-outer">
            <div class="col-md-4" >
                <h2 class="txtcolour">
                    Glencoe
                </h2>
				<div class="tempwrap
					<h4>
					<span style="color:#337ab7;">Current Temperature</span>:
					<span class="glencoetemperature" style="color: #5a5a5a;font-size: 15px;"></span>
                    <span class="glencoecurrently" style="color: #5a5a5a;font-size: 15px;"></span>
					</h4>
				</div>

                <p>
                    The resort is situated in an area of outstanding natural beauty on Rannoch Moor
                    and offers stunning views of the iconic Buachaille Etive Mor. The onsite
                    campsite boasts a large camping area, hook-ups and microlodges.
                </p>
                <p>
                    In summer the centre offers chairlift rides, mountain biking (Downhill and XC),
                    tubing, hill-walking, climbing, photography and great home cooked food in the
                    panoramic log cabin cafe.
                </p>
            </div>
            <div class="col-md-8" id="Glencoe-map-container"></div>
        </div>
        <div class="col-md-12 map-outer">
            <div class="col-md-4" >
                <h2 class="txtcolour">
                    Glenshee
                </h2>
				<div class="tempwrap">
					<h4>
					<span style="color:#337ab7;">Current Temperature</span>:
					<span class="glensheetemperature" style="color: #5a5a5a;font-size: 15px;"></span>
                    <span class="glensheecurrently" style="color: #5a5a5a;font-size: 15px;"></span>
					</h4>
				</div>
                <p>
                    The resort is situated in an area of outstanding natural beauty on Rannoch Moor
                    and offers stunning views of the iconic Buachaille Etive Mor. The onsite
                    campsite boasts a large camping area, hook-ups and microlodges.
                </p>
                <p>
                    In summer the centre offers chairlift rides, mountain biking (Downhill and XC),
                    tubing, hill-walking, climbing, photography and great home cooked food in the
                    panoramic log cabin cafe.
                </p>

            </div>
            <div class="col-md-8" id="Glenshee-map-container"></div>
        </div>
        <div class="col-md-12 map-outer">
            <div class="col-md-4" >
                <h2 class="txtcolour">
                    Cairngorm
                </h2>
				<div class="tempwrap">
					<h4>
					<span style="color:#337ab7;">Current Temperature</span>:
					<span class="cairngormtemperature" style="color: #5a5a5a;font-size: 15px;"></span>
                    <span class="cairngormcurrently" style="color: #5a5a5a;font-size: 15px;"></span>
					</h4>
				</div>
                <p>
                Cairngorm is one of the most popular skiing and boarding destinations in Scotland. With
                range of runs from beginners to more advanced along with some off piste for the
                days there is enough snow.
                </p>
                <p>The "Apres ski" in Aviemore is varied and lively during the ski season.</p>
            </div>
            <div class="col-md-8" id="Cairngorm-map-container"></div>
        </div>
        <div class="col-md-12 map-outer">
            <div class="col-md-4" >
                <h2 class="txtcolour">
                    Nevis
                </h2>
				<div class="tempwrap">
					<h4>
					<span style="color:#337ab7;">Current Temperature</span>:
					<span class="nevistemperature" style="color: #5a5a5a;font-size: 15px;"></span>
                    <span class="neviscurrently" style="color: #5a5a5a;font-size: 15px;"></span>
					</h4>
				</div>
                <p>
				The Nevis Range is the most westerly of all the ski areas and also one of the highest and most impressive with the imposing scenery of Ben Nevis and the huge open snowfields. The gondola takes skiers and boarders from the car park to the huge choice of skiing facilities.
				</p>
				<p>
				The huge open bowl makes it a favourite haunt for boarders and all levels of skiers. More advanced skiers/boarders can also enjoy the huge off-piste expanse of the Black Corrie.
				</p>
            </div>
            <div class="col-md-8" id="nevis-map-container"></div>
        </div>
        <div class="col-md-12 map-outer">
            <div class="col-md-4" >
                <h2 class="txtcolour">
                    The Lecht
                </h2>
				<div class="tempwrap">
					<h4>
					<span style="color:#337ab7;">Current Temperature</span>:
					<span class="lechttemperature" style="color: #5a5a5a;font-size: 15px;"></span>
                    <span class="lechtcurrently" style="color: #5a5a5a;font-size: 15px;"></span>
					</h4>
				</div>
                <p>
				The Lecht is an ideal place for children to learn with the car park and lifts just moments apart. There is snowmaking equipment (always a bonus with the uncertainty of the snow weather in Scotland!) and there is a designated snowboard fun park for those inclined to try their stuff on the half pipe and jumps.
				</p>
				<p>
				It is a family focused and friendly resort with activities for non-skiers as well as skiers.
				</p>
            </div>
            <div class="col-md-8" id="lecht-map-container"></div>
        </div>
@stop