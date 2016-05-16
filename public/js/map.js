    function init_map()
    {
        var glencoe = new google.maps.LatLng(56.633736, -4.827271);
        var glenshee = new google.maps.LatLng(56.8870227, -3.4154393, 17);
        var cairngorm = new google.maps.LatLng(57.1337337, -3.6701872, 10);
		var nevis = new google.maps.LatLng(56.851961,-5.000196,12);
        var lecht = new google.maps.LatLng(57.20094,-3.2476723,12);
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
        var lecht_contentString =
         '<div id="infowindow_content"><p><strong>The Lecht</strong><br>' +
         'Follow the A939.<br>' +
         'Feel free to contact us for more in-depth directions.<br>' +
         '<i class="fa fa-phone fa-fw"></i>01975 651440</p></div>';
        var nevis_contentString =
         '<div id="infowindow_content"><p><strong>Nevis Range</strong><br>' +
         'Follow the A82.<br>' +
         'Feel free to contact us for more in-depth directions.<br>' +
         '<i class="fa fa-phone fa-fw"></i>01397 705825</p></div>';
        var cairngorm_contentString =
         '<div id="infowindow_content"><p><strong>Cairngorm</strong><br>' +
         'At the roundabout, take the 3rd exit onto B970.<br>' +
         'Feel free to contact us for more in-depth directions.<br>' +
         '<i class="fa fa-phone fa-fw"></i>01479 861261</p></div>';
        var glencoe_contentString =
         '<div id="infowindow_content"><p><strong>Glencoe</strong><br>' +
         'Follow the A82.<br>' +
         'Feel free to contact us for more in-depth directions.<br>' +
         '<i class="fa fa-phone fa-fw"></i>01855 851226</p></div>';
        var glenshee_contentString =
         '<div id="infowindow_content"><p><strong>Glenshee</strong><br>' +
         'Follow the A93.<br>' +
         'Feel free to contact us for more in-depth directions.<br>' +
         '<i class="fa fa-phone fa-fw"></i>01339 741320</p></div>';
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
/*! simpleWeather v3.1.0 - http://simpleweatherjs.com */
(function($) {
    'use strict';

    function getAltTemp(unit, temp) {
        if (unit === 'f') {
            return Math.round((5.0 / 9.0) * (temp - 32.0));
        } else {
            return Math.round((9.0 / 5.0) * temp + 32.0);
        }
    }

    $.extend({
        simpleWeather: function(options) {
            options = $.extend({
                location: '',
                woeid: '',
                unit: 'f',
                success: function(weather) {},
                error: function(message) {}
            }, options);

            var now = new Date();
            var weatherUrl = 'https://query.yahooapis.com/v1/public/yql?format=json&rnd=' + now.getFullYear() + now.getMonth() + now.getDay() + now.getHours() + '&diagnostics=true&callback=?&q=';

            if (options.location !== '') {
                /* If latitude/longitude coordinates, need to format a little different. */
                var location = '';
                if (/^(\-?\d+(\.\d+)?),\s*(\-?\d+(\.\d+)?)$/.test(options.location)) {
                    location = '(' + options.location + ')';
                } else {
                    location = options.location;
                }

                weatherUrl += 'select * from weather.forecast where woeid in (select woeid from geo.places(1) where text="' + location + '") and u="' + options.unit + '"';
            } else if (options.woeid !== '') {
                weatherUrl += 'select * from weather.forecast where woeid=' + options.woeid + ' and u="' + options.unit + '"';
            } else {
                options.error('Could not retrieve weather due to an invalid location.');
                return false;
            }

            $.getJSON(
                encodeURI(weatherUrl),
                function(data) {
                    if (data !== null && data.query !== null && data.query.results !== null && data.query.results.channel.description !== 'Yahoo! Weather Error') {
                        var result = data.query.results.channel,
                            weather = {},
                            forecast,
                            compass = ['N', 'NNE', 'NE', 'ENE', 'E', 'ESE', 'SE', 'SSE', 'S', 'SSW', 'SW', 'WSW', 'W', 'WNW', 'NW', 'NNW', 'N'],
                            image404 = 'https://s.yimg.com/os/mit/media/m/weather/images/icons/l/44d-100567.png';

                        weather.title = result.item.title;
                        weather.temp = result.item.condition.temp;
                        weather.code = result.item.condition.code;
                        weather.todayCode = result.item.forecast[0].code;
                        weather.currently = result.item.condition.text;
                        weather.high = result.item.forecast[0].high;
                        weather.low = result.item.forecast[0].low;
                        weather.text = result.item.forecast[0].text;
                        weather.humidity = result.atmosphere.humidity;
                        weather.pressure = result.atmosphere.pressure;
                        weather.rising = result.atmosphere.rising;
                        weather.visibility = result.atmosphere.visibility;
                        weather.sunrise = result.astronomy.sunrise;
                        weather.sunset = result.astronomy.sunset;
                        weather.description = result.item.description;
                        weather.city = result.location.city;
                        weather.country = result.location.country;
                        weather.region = result.location.region;
                        weather.updated = result.item.pubDate;
                        weather.link = result.item.link;
                        weather.units = {
                            temp: result.units.temperature,
                            distance: result.units.distance,
                            pressure: result.units.pressure,
                            speed: result.units.speed
                        };
                        weather.wind = {
                            chill: result.wind.chill,
                            direction: compass[Math.round(result.wind.direction / 22.5)],
                            speed: result.wind.speed
                        };

                        if (result.item.condition.temp < 80 && result.atmosphere.humidity < 40) {
                            weather.heatindex = -42.379 + 2.04901523 * result.item.condition.temp + 10.14333127 * result.atmosphere.humidity - 0.22475541 * result.item.condition.temp * result.atmosphere.humidity - 6.83783 * (Math.pow(10, -3)) * (Math.pow(result.item.condition.temp, 2)) - 5.481717 * (Math.pow(10, -2)) * (Math.pow(result.atmosphere.humidity, 2)) + 1.22874 * (Math.pow(10, -3)) * (Math.pow(result.item.condition.temp, 2)) * result.atmosphere.humidity + 8.5282 * (Math.pow(10, -4)) * result.item.condition.temp * (Math.pow(result.atmosphere.humidity, 2)) - 1.99 * (Math.pow(10, -6)) * (Math.pow(result.item.condition.temp, 2)) * (Math.pow(result.atmosphere.humidity, 2));
                        } else {
                            weather.heatindex = result.item.condition.temp;
                        }

                        if (result.item.condition.code == '3200') {
                            weather.thumbnail = image404;
                            weather.image = image404;
                        } else {
                            weather.thumbnail = 'https://s.yimg.com/zz/combo?a/i/us/nws/weather/gr/' + result.item.condition.code + 'ds.png';
                            weather.image = 'https://s.yimg.com/zz/combo?a/i/us/nws/weather/gr/' + result.item.condition.code + 'd.png';
                        }

                        weather.alt = {
                            temp: getAltTemp(options.unit, result.item.condition.temp),
                            high: getAltTemp(options.unit, result.item.forecast[0].high),
                            low: getAltTemp(options.unit, result.item.forecast[0].low)
                        };
                        if (options.unit === 'f') {
                            weather.alt.unit = 'c';
                        } else {
                            weather.alt.unit = 'f';
                        }

                        weather.forecast = [];
                        for (var i = 0; i < result.item.forecast.length; i++) {
                            forecast = result.item.forecast[i];
                            forecast.alt = {
                                high: getAltTemp(options.unit, result.item.forecast[i].high),
                                low: getAltTemp(options.unit, result.item.forecast[i].low)
                            };

                            if (result.item.forecast[i].code == "3200") {
                                forecast.thumbnail = image404;
                                forecast.image = image404;
                            } else {
                                forecast.thumbnail = 'https://s.yimg.com/zz/combo?a/i/us/nws/weather/gr/' + result.item.forecast[i].code + 'ds.png';
                                forecast.image = 'https://s.yimg.com/zz/combo?a/i/us/nws/weather/gr/' + result.item.forecast[i].code + 'd.png';
                            }

                            weather.forecast.push(forecast);
                        }

                        options.success(weather);
                    } else {
                        options.error('There was a problem retrieving the latest weather information.');
                    }
                }
            );
            return this;
        }
    });
})(jQuery);

glencoeWeather(56.635400 + ',' + -4.829665);
glensheeWeather(56.890246 + ',' + -3.420163);
cairngormWeather(57.131372 + ',' + -3.668164);
nevisWeather(56.852794 + ',' + -4.998436);
lechtWeather(57.212004 + ',' + -3.267242);


function glencoeWeather(location, woeid) {
    $.simpleWeather({
        location: location,
        woeid: woeid,
        unit: 'c',
        success: function(weather) {
            city = weather.city;
            temp = weather.temp + '&deg;C ';
            wcode = '<img class="weathericon" src="./images/weathericons/' + weather.code + '.svg">';
            text = weather.text;



            $(".glencoecurrently").html(text);
            $(".glencoe-bg").html(wcode);
            $(".glencoetemperature").html(temp);

        },

        error: function(error) {
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
            temp = weather.temp + '&deg;C ';
            wcode = '<img class="weathericon" src="./images/weathericons/' + weather.code + '.svg">';
            currently = weather.text;

            $(".glensheecurrently").html(currently);
            $(".glenshee-bg").html(wcode);
            $(".glensheetemperature").html(temp);

        },

        error: function(error) {
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
            temp = weather.temp + '&deg;C ';
            currently = weather.text;

            $(".cairngormcurrently").html(currently);

            $(".cairngormtemperature").html(temp);

        },

        error: function(error) {
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
            temp = weather.temp + '&deg;C ';
            currently = weather.currently;

            $(".neviscurrently").html(currently);

            $(".nevistemperature").html(temp);

        },

        error: function(error) {
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
            temp = weather.temp + '&deg;C ';
            currently = weather.currently;

            $(".lechtcurrently").html(currently);


            $(".lechttemperature").html(temp);

        },

        error: function(error) {
            $(".error").html('<p>' + error + '</p>');
        }
    });
}
