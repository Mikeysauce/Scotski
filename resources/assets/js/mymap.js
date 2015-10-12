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