jQuery(function($) {
    // Asynchronously Load the map API 
    var script = document.createElement('script');
    script.src = "https://maps.googleapis.com/maps/api/js?key=AIzaSyCyZ0-Zb8oMUelQQv9q77aEJ0jeyXiaMY0&callback=initialize";
    document.body.appendChild(script);
});

function initialize() {
    var map;
    var bounds = new google.maps.LatLngBounds();
    var mapOptions = {
        mapTypeId: 'roadmap'
    };
                    
    // Display a map on the page
    map = new google.maps.Map(document.getElementById("nusapenida-2d1n"), mapOptions);
    map.setTilt(45);
    // Multiple Markers
    var markers = [
        ['Crystal Bay Beach, Nusa Penida', -8.7153141,115.4547143],
        ['Broken Beach, Nusa Penida', -8.7327633,115.449248],
        ['Atuh Beach, Nusa Penida', -8.7734116,115.61963],
        ['Tree House, Nusa Penida', -8.7785426,115.6146517],
        ['Teletubis Hills, Nusa Penida', -8.776585,115.5790007],
        ['Kelingking Beach, Nusa Penida', -8.7527242,115.4697092]
    ];
                        
    // Info Window Content
    var infoWindowContent = [
        ['<div class="info_content">' +
        '<h3>Crystal Bay Beach</h3>' +
        '<p>Position Near Pakeh Harbour. Located in Penida Village</p>' +        '</div>'],
        ['<div class="info_content">' +
        '<h3>Broken Beach</h3>' +
        '<p>Position Near Angel Billabong. Located in Mekartaji Village .</p>' +
        '</div>'],
        ['<div class="info_content">' +
        '<h3>Atuh Beach </h3>' +
        '<p>Position Near Tree House. Located in Pejukutan Village .</p>' +
        '</div>'],
        ['<div class="info_content">' +
        '<h3>Tree House </h3>' +
        '<p>Position Near Atuh Beach. Located in Pejukutan Village.</p>' +
        '</div>'],
        ['<div class="info_content">' +
        '<h3>Teletubis Hills</h3>' +
        '<p>Located in Tanglad Village.</p>' +
        '</div>'],
        ['<div class="info_content">' +
        '<h3>Kelingking Beach</h3>' +
        '<p>Located in Dawan Village.</p>' +
        '</div>']
    ];
        
    // Display multiple markers on a map
    var infoWindow = new google.maps.InfoWindow(), marker, i;
    
    // Loop through our array of markers & place each one on the map  
    for( i = 0; i < markers.length; i++ ) {
        var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
        bounds.extend(position);
        marker = new google.maps.Marker({
            position: position,
            map: map,
            title: markers[i][0]
        });
        
        // Allow each marker to have an info window    
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
                infoWindow.setContent(infoWindowContent[i][0]);
                infoWindow.open(map, marker);
            }
        })(marker, i));

        // Automatically center the map fitting all markers on the screen
        map.fitBounds(bounds);
    }

    // Override our map zoom level once our fitBounds function runs (Make sure it only runs once)
    var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
        this.setZoom(14);
        google.maps.event.removeListener(boundsListener);
    });
    
}