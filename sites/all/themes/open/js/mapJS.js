;( function( window ) {

    function initialize() {
        var mapCanvas = document.getElementById('map_canvas');
        var mapOptions = {
            center: new google.maps.LatLng(48.4705052,31.2268153),
            zoom: 6,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            disableDefaultUI: true
        }

        // Get the HTML DOM element that will contain your map
        // We are using a div with id="map" seen below in the <body>
        var mapElement = document.getElementById('map');

        // Create the Google Map using out element and options defined above
        var map = new google.maps.Map(mapElement, mapOptions);

        setMarkers(map, places);
    }
    google.maps.event.addDomListener(window, 'load', initialize);

    function setMarkers(map, locations) {
        // Display area markers
        var latlngbounds = new google.maps.LatLngBounds();

        var image = new google.maps.MarkerImage( '../images/pointer.png',
            new google.maps.Size(76,77), // icon sizes
            new google.maps.Point(0,0),
            new google.maps.Point(7,36)
        );

        for (var i = 0; i < places.length; i++) {
            var myLatLng = new google.maps.LatLng(locations[i][1], locations[i][2]);
            // Add coordinates of the marker in the area
            latlngbounds.extend(myLatLng);
            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                icon: image,
                title: locations[i][0]
            });
        }
    }
    var places = [
        ['Ukraine',50.433394,30.5218614]
    ];

} )( window );