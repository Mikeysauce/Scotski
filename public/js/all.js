/*! simpleWeather v3.0.2 - http://simpleweatherjs.com */
!function(e){"use strict";function t(e,t){return Math.round("f"===e?5/9*(t-32):1.8*t+32)}e.extend({simpleWeather:function(i){i=e.extend({location:"",woeid:"",unit:"f",success:function(){},error:function(){}},i);var o=new Date,n="https://query.yahooapis.com/v1/public/yql?format=json&rnd="+o.getFullYear()+o.getMonth()+o.getDay()+o.getHours()+"&diagnostics=true&callback=?&q=";if(""!==i.location)n+='select * from weather.forecast where woeid in (select woeid from geo.placefinder where text="'+i.location+'" and gflags="R" limit 1) and u="'+i.unit+'"';else{if(""===i.woeid)return i.error({message:"Could not retrieve weather due to an invalid location."}),!1;n+="select * from weather.forecast where woeid="+i.woeid+' and u="'+i.unit+'"'}return e.getJSON(encodeURI(n),function(e){if(null!==e&&null!==e.query&&null!==e.query.results&&"Yahoo! Weather Error"!==e.query.results.channel.description){var o,n=e.query.results.channel,r={},s=["N","NNE","NE","ENE","E","ESE","SE","SSE","S","SSW","SW","WSW","W","WNW","NW","NNW","N"],a="https://s.yimg.com/os/mit/media/m/weather/images/icons/l/44d-100567.png";r.title=n.item.title,r.temp=n.item.condition.temp,r.code=n.item.condition.code,r.todayCode=n.item.forecast[0].code,r.currently=n.item.condition.text,r.high=n.item.forecast[0].high,r.low=n.item.forecast[0].low,r.text=n.item.forecast[0].text,r.humidity=n.atmosphere.humidity,r.pressure=n.atmosphere.pressure,r.rising=n.atmosphere.rising,r.visibility=n.atmosphere.visibility,r.sunrise=n.astronomy.sunrise,r.sunset=n.astronomy.sunset,r.description=n.item.description,r.city=n.location.city,r.country=n.location.country,r.region=n.location.region,r.updated=n.item.pubDate,r.link=n.item.link,r.units={temp:n.units.temperature,distance:n.units.distance,pressure:n.units.pressure,speed:n.units.speed},r.wind={chill:n.wind.chill,direction:s[Math.round(n.wind.direction/22.5)],speed:n.wind.speed},r.heatindex=n.item.condition.temp<80&&n.atmosphere.humidity<40?-42.379+2.04901523*n.item.condition.temp+10.14333127*n.atmosphere.humidity-.22475541*n.item.condition.temp*n.atmosphere.humidity-6.83783*Math.pow(10,-3)*Math.pow(n.item.condition.temp,2)-5.481717*Math.pow(10,-2)*Math.pow(n.atmosphere.humidity,2)+1.22874*Math.pow(10,-3)*Math.pow(n.item.condition.temp,2)*n.atmosphere.humidity+8.5282*Math.pow(10,-4)*n.item.condition.temp*Math.pow(n.atmosphere.humidity,2)-1.99*Math.pow(10,-6)*Math.pow(n.item.condition.temp,2)*Math.pow(n.atmosphere.humidity,2):n.item.condition.temp,"3200"==n.item.condition.code?(r.thumbnail=a,r.image=a):(r.thumbnail="https://s.yimg.com/zz/combo?a/i/us/nws/weather/gr/"+n.item.condition.code+"ds.png",r.image="https://s.yimg.com/zz/combo?a/i/us/nws/weather/gr/"+n.item.condition.code+"d.png"),r.alt={temp:t(i.unit,n.item.condition.temp),high:t(i.unit,n.item.forecast[0].high),low:t(i.unit,n.item.forecast[0].low)},r.alt.unit="f"===i.unit?"c":"f",r.forecast=[];for(var m=0;m<n.item.forecast.length;m++)o=n.item.forecast[m],o.alt={high:t(i.unit,n.item.forecast[m].high),low:t(i.unit,n.item.forecast[m].low)},"3200"==n.item.forecast[m].code?(o.thumbnail=a,o.image=a):(o.thumbnail="https://s.yimg.com/zz/combo?a/i/us/nws/weather/gr/"+n.item.forecast[m].code+"ds.png",o.image="https://s.yimg.com/zz/combo?a/i/us/nws/weather/gr/"+n.item.forecast[m].code+"d.png"),r.forecast.push(o);i.success(r)}else i.error({message:"There was an error retrieving the latest weather information. Please try again.",error:e.query.results.channel.item.title})}),this}})}(jQuery);
    function init_map()
    {
		
        var glencoe = new google.maps.LatLng( 56.633736, -4.827271 );
        var glenshee = new google.maps.LatLng( 56.8870227, -3.4154393, 17 );
        var cairngorm = new google.maps.LatLng( 57.1337337, -3.6701872, 10 );
		var nevis = new google.maps.LatLng( 56.851961,-5.000196,12 );
        var lecht = new google.maps.LatLng( 57.20094,-3.2476723,12 );
        var glencoe_mapoptions = {
            center: glencoe,
            zoom  : 12
        };
        var cairngorm_mapoptions = {
            center: cairngorm,
            zoom  : 12
        };
        var glenshee_mapoptions = {
            center: glenshee,
            zoom  : 12
        };
		var nevis_mapoptions = {
            center: nevis,
            zoom  : 13
        };
		var lecht_mapoptions = {
            center: lecht,
            zoom  : 12
        };
        var lecht_map = new google.maps.Map( document.getElementById( "lecht-map-container" ), lecht_mapoptions );
		var nevis_map = new google.maps.Map( document.getElementById( "nevis-map-container" ), nevis_mapoptions );
        var cairngorm_map = new google.maps.Map( document.getElementById( "Cairngorm-map-container" ), cairngorm_mapoptions );
        var glencoe_map = new google.maps.Map( document.getElementById( "Glencoe-map-container" ), glencoe_mapoptions );
        var glenshee_map = new google.maps.Map( document.getElementById( "Glenshee-map-container" ), glenshee_mapoptions );
        var lecht_contentString = '<div id="infowindow_content"><p><strong>The Lecht</strong><br>this is a' +
                'n example of a line with information<br>second line of infotext<br>third line of' +
                ' infotext</p><a href="lols" target="_blank">This is a link</a></div>';
        var nevis_contentString = '<div id="infowindow_content"><p><strong>Nevis Range</strong><br>this is a' +
                'n example of a line with information<br>second line of infotext<br>third line of' +
                ' infotext</p><a href="lols" target="_blank">This is a link</a></div>';
        var cairngorm_contentString = '<div id="infowindow_content"><p><strong>Cairngorm Mountain</strong><br>this is a' +
                'n example of a line with information<br>second line of infotext<br>third line of' +
                ' infotext</p><a href="lols" target="_blank">This is a link</a></div>';
        var glencoe_contentString = '<div id="infowindow_content"><p><strong>Glencoe Mountain</strong><br>this is an ' +
                'example of a line with information<br>second line of infotext<br>third line of i' +
                'nfotext</p><a href="lols" target="_blank">This is a link</a></div>';
        var glenshee_contentString = '<div id="infowindow_content"><p><strong>Glenshee Mountain</strong><br>this sdsds' +
                'dne with information<br>second line of infotext<br>third line of infotext</p><a ' +
                'href="lols" target="_blank">This is a link</a></div>';
        var lecht_infowindow = new google.maps.InfoWindow(
        {
            content: lecht_contentString
        });
        var nevis_infowindow = new google.maps.InfoWindow(
        {
            content: nevis_contentString
        });
        var glencoe_infowindow = new google.maps.InfoWindow(
        {
            content: glencoe_contentString
        });
        var cairngorm_infowindow = new google.maps.InfoWindow(
        {
            content: cairngorm_contentString
        });
        var glenshee_infowindow = new google.maps.InfoWindow(
        {
            content: glenshee_contentString
        });
        var lecht_marker = new google.maps.Marker(
        {
            position: lecht,
            map     : lecht_map,
            title   : "Click on marker to see info",
            maxWidth: 500
        });
        var nevis_marker = new google.maps.Marker(
        {
            position: nevis,
            map     : nevis_map,
            title   : "Click on marker to see info",
            maxWidth: 500
        });
        var glencoe_marker = new google.maps.Marker(
        {
            position: glencoe,
            map     : glencoe_map,
            title   : "Click on marker to see info",
            maxWidth: 500
        });
        var cairngorm_marker = new google.maps.Marker(
        {
            position: cairngorm,
            map     : cairngorm_map,
            title   : "Click on marker to see info",
            maxWidth: 500
        });
        var glenshee_marker = new google.maps.Marker(
        {
            position: glenshee,
            map     : glenshee_map,
            title   : "Click on marker to see info",
            maxWidth: 500
        });
        google.maps.event.addListener( lecht_marker, 'click', function()
        {
            lecht_infowindow.open( lecht_map, lecht_marker );
        });
        google.maps.event.addListener( nevis_marker, 'click', function()
        {
            nevis_infowindow.open( nevis_map, nevis_marker );
        });
        google.maps.event.addListener( cairngorm_marker, 'click', function()
        {
            cairngorm_infowindow.open( cairngorm_map, cairngorm_marker );
        });
        google.maps.event.addListener( glencoe_marker, 'click', function()
        {
            glencoe_infowindow.open( glencoe_map, glencoe_marker );
        });
        google.maps.event.addListener( glenshee_marker, 'click', function()
        {
            glenshee_infowindow.open( glenshee_map, glenshee_marker );
        });
    }
    google.maps.event.addDomListener( window, 'load', init_map );
if("geolocation" in navigator)  {
		glencoeWeather(56.635400 + ',' + -4.829665);
		glensheeWeather(56.890246  + ',' + -3.420163);
		cairngormWeather(57.131372  + ',' + -3.668164);
		nevisWeather(56.852794 + ',' + -4.998436);
		lechtWeather(57.212004 + ',' + -3.267242);
}
else {
		glencoeWeather("Kolkata, IN", "");
	}
		$(document).ready(function() {
			setInterval(glencoeWeather, 10000);
		});
		
		function glencoeWeather(location, woeid) {
			$.simpleWeather({
				location: location,
				woeid: woeid,
				unit: 'c',
				success: function(weather) {
					city = weather.city;
					temp = weather.temp+'&deg;C ';
					wcode = '<img class="weathericon" src="./images/weathericons/' + weather.code +  '.svg">';
					text = weather.text;



					$(".glencoecurrently").html(text);
					$(".glencoe-bg").html(wcode);
					$(".glencoetemperature").html(temp);

				},
				
				error:function(error) {
					$(".error").html('<p>' + error + '</p>');
				}
			});
		}
		function glensheeWeather(location, woeid) {
			$.simpleWeather({
				location: location,
				woeid: woeid,
				unit: 'c',
				success: function(weather) {
					city = weather.city;
					temp = weather.temp+'&deg;';
					wcode = '<img class="weathericon" src="./images/weathericons/' + weather.code +  '.svg">';
					currently = weather.text;

					$(".glensheecurrently").html(currently);
					$(".glenshee-bg").html(wcode);
					$(".glensheetemperature").html(temp);

				},
				
				error:function(error) {
					$(".error").html('<p>' + error + '</p>');
				}
			});
		}
		function cairngormWeather(location, woeid) {
			$.simpleWeather({
				location: location,
				woeid: woeid,
				unit: 'c',
				success: function(weather) {
					city = weather.city;
					temp = weather.temp+'&deg;';
					currently = weather.text;

					$(".cairngormcurrently").html(currently);
					
					$(".cairngormtemperature").html(temp);

				},
				
				error:function(error) {
					$(".error").html('<p>' + error + '</p>');
				}
			});
		}
		function nevisWeather(location, woeid) {
			$.simpleWeather({
				location: location,
				woeid: woeid,
				unit: 'c',
				success: function(weather) {
					city = weather.city;
					temp = weather.temp+'&deg;';
					currently = weather.currently;

					$(".neviscurrently").html(currently);
					
					$(".nevistemperature").html(temp);

				},
				
				error:function(error) {
					$(".error").html('<p>' + error + '</p>');
				}
			});
		}
		function lechtWeather(location, woeid) {
			$.simpleWeather({
				location: location,
				woeid: woeid,
				unit: 'c',
				success: function(weather) {
					city = weather.city;
					temp = weather.temp+'&deg;';
					currently = weather.currently;

					$(".lechtcurrently").html(currently);

					
					$(".lechttemperature").html(temp);

				},
				
				error:function(error) {
					$(".error").html('<p>' + error + '</p>');
				}
			});
		}

//# sourceMappingURL=all.js.map
