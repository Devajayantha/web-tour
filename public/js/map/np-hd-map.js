
function initialize() {
    var map;
    var bounds = new google.maps.LatLngBounds();
    var mapOptions = {
        mapTypeId: 'roadmap'
        
    };
                    
    // Display a map on the page
    map = new google.maps.Map(document.getElementById("nusapenida-hd"), mapOptions);
    map.setTilt(45);
    
        
    // Multiple Markers
    var markers = [
        ['Crystal Bay Beach, Nusa Penida', -8.7153141,115.4547143],
        ['Broken Beach, Nusa Penida', -8.7327633,115.449248],
        ['Love Tree, Nusa Penida', -8.6824984,115.5136637]
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
        '<h3>Love Tree</h3>' +
        '<p>Position Near Atuh Beach Located in Pejukutan Village.</p>' +
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