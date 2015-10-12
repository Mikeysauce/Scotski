		glencoeWeather(56.635400 + ',' + -4.829665);
		glensheeWeather(56.890246  + ',' + -3.420163);
		cairngormWeather(57.131372  + ',' + -3.668164);
		nevisWeather(56.852794 + ',' + -4.998436);
		lechtWeather(57.212004 + ',' + -3.267242);

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
					temp = weather.temp+'&deg;C ';
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
					temp = weather.temp+'&deg;C ';
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
					temp = weather.temp+'&deg;C ';
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
					temp = weather.temp+'&deg;C ';
					currently = weather.currently;

					$(".lechtcurrently").html(currently);


					$(".lechttemperature").html(temp);

				},

				error:function(error) {
					$(".error").html('<p>' + error + '</p>');
				}
			});
		}
