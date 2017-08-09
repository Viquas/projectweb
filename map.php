<?php
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Snazzy Maps example</title>

        <style type="text/css">
            /* Set a size for our map container, the Google Map will take up 100% of this container */
            #map {
                width: 750px;
                height: 500px;
            }
        </style>

  
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB37AlTgL-QBL3DmJ7EZQNEmve3vHK19a8&callback=myMap"></script>

        <script type="text/javascript">
            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);

            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 11,
                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(51.508742,-0.120850), // New York
                    // How you would like to style the map.
                    // This is where you would paste any style found on Snazzy Maps.

                    styles: [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#46bcec"},{"visibility":"on"}]}]
                };
                // Get the HTML DOM element that will contain your map
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');
                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);
                // Let's also add a marker while we're at it
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(51.508742,-0.120850),
                    map: map,
                    title: 'Snazzy!'
                });
            }
        </script>
    </head>
    <body>
        <h2>Snazzy Maps Super Simple Example</h2>
        <h3>
            <a href="https://snazzymaps.com/style/1/pale-dawn" target="_blank">Blue Water</a>
        </h3>

        <h3>
            <a href="https://snazzymaps.com/explore" target="_blank">More Snazzy maps styles</a>
        </h3>

        <!-- The element that will contain our Google Map. -->
        <div id="map"></div>
    </body>
</html>
