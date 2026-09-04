"use strict"; // Start of use strict

// 7. google map
function gMap() {
    if ($('.google-map').length) {
        $('.google-map').each(function () {
            // getting options from html
            var Self = $(this);
            var mapName = Self.attr('id');
            var mapLat = Self.data('map-lat');
            var mapLng = Self.data('map-lng');
            var iconPath = Self.data('icon-path');
            var mapZoomAttr = Self.data('map-zoom');
            var markers = Self.data('markers');

            // default styles
            var styles = [
                {
                    "featureType": "administrative",
                    "elementType": "labels.text.fill",
                    "stylers": [{ "color": "#222222" }]
                },
                {
                    "featureType": "landscape",
                    "elementType": "all",
                    "stylers": [{ "color": "#eef2f4" }]
                },
                {
                    "featureType": "poi",
                    "elementType": "all",
                    "stylers": [{ "visibility": "off" }]
                },
                {
                    "featureType": "road",
                    "elementType": "all",
                    "stylers": [
                        { "saturation": -100 },
                        { "color": "#ffffff" },
                        { "lightness": 45 }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "all",
                    "stylers": [
                        { "color": "#ffffff" },
                        { "visibility": "simplified" }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "labels.icon",
                    "stylers": [{ "visibility": "off" }]
                },
                {
                    "featureType": "transit",
                    "elementType": "all",
                    "stylers": [{ "visibility": "off" }]
                },
                {
                    "featureType": "water",
                    "elementType": "all",
                    "stylers": [
                        { "color": "#cccccc" },
                        { "visibility": "on" }
                    ]
                }
            ];

            // if zoom not defined, default value will be 15
            var mapZoom = mapZoomAttr ? parseInt(mapZoomAttr, 10) : 15;

            // check GMaps exists
            if (typeof GMaps !== 'undefined') {
                var map = new GMaps({
                    div: '#' + mapName,
                    scrollwheel: false,
                    lat: mapLat,
                    lng: mapLng,
                    styles: styles,
                    zoom: mapZoom
                });

                // Add markers
                if (markers && Array.isArray(markers)) {
                    $.each(markers, function (idx, item) {
                        var html = item[2] ? item[2] : '';
                        var markerIcon = item[3] ? item[3] : iconPath;

                        var markerOptions = {
                            lat: item[0],
                            lng: item[1]
                        };

                        if (markerIcon) {
                            markerOptions.icon = markerIcon;
                        }

                        if (html) {
                            markerOptions.infoWindow = { content: html };
                        }

                        map.addMarker(markerOptions);
                    });
                }
            } else {
                console.error("GMaps is not loaded properly.");
            }
        });
    }
}

// Instance of function while Document ready event   
jQuery(document).ready(function () {
    (function ($) {
        gMap();
    })(jQuery);
});