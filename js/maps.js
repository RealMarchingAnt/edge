$(document).ready(function(){/* google maps -----------------------------------------------------*/
    google.maps.event.addDomListener(window, 'load', initialize);

    function initialize() {

        /* position Weda */
        var latlng = new google.maps.LatLng(59.2050246,17.6430644);

        var mapOptions = {
            center: latlng,
            scrollWheel: false,
            zoom: 13
        };

        var marker = new google.maps.Marker({
            position: latlng,
            url: '/',
            animation: google.maps.Animation.DROP
        });

        var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
        marker.setMap(map);

    };
    /* end google maps -----------------------------------------------------*/
});