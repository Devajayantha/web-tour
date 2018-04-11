jQuery(function($) {
    // Asynchronously Load the map API 
    var script = document.createElement('script');
    script.src = "https://maps.googleapis.com/maps/api/js?key=AIzaSyCK4p58C2JCyvZdHbY14R8yF7Rybpeu3UM&callback=initialize";
    document.body.appendChild(script);
});

function initialize() {
    var map;
    var bounds = new google.maps.LatLngBounds();
    var mapOptions = {
        mapTypeId: 'roadmap'
    };
                    
    // Display a map on the page
    map = new google.maps.Map(document.getElementById("lembongan-3d2n"), mapOptions);
    map.setTilt(45);
        
    // Multiple Markers
    var markers = [
        ['Mushroom Bay Beach, Nusa Lembongan', -8.6821941,115.4314241],
        ['Yellow Bridge, Nusa Lembongan', -8.6941269,115.4487418],
        ['Devil Tears, Nusa Lembongan', -8.690743,115.4271795],
        ['Bakau Forest Lembongan, Nusa Lembongan', -8.6671404,115.465806],
        ['Blue Lagoon, Nusa Lembongan', -8.7076739,115.4364864],
        ['Secret Beach, Nusa Ceningan', -8.7079528,115.4399747],
        ['Ceningan Snorkling, Nusa Ceningan', -8.6989283,115.4471067]

    ];
                        
    // Info Window Content
    var infoWindowContent = [
        ['<div class="info_content">' +
        '<h3>Mushroom Bay Beach</h3>' +
        '<p> Harbour Nusa Lembongan. Located in Jungut Batu Village. That Famous Village in Lembongan.</p>' +        '</div>'],
        ['<div class="info_content">' +
        '<h3>Yellow Bridge</h3>' +
        '<p>Relation Nusa Lembongan and Nusa Ceningan</p>' +
        '</div>'],
        ['<div class="info_content">' +
        '<h3>Devil Tears</h3>' +
        '<p>Position Near Atuh Beach Located in Pejukutan Village.</p>' +
        '</div>'],
        ['<div class="info_content">' +
        '<h3>Bakau Forest Lembongan </h3>' +
        '<p>Position Near Atuh Beach Located in Pejukutan Village.</p>' +
        '</div>'],
        ['<div class="info_content">' +
        '<h3>Blue Lagoon</h3>' +
        '<p>Position Near Atuh Beach Located in Pejukutan Village.</p>' +
        '</div>'],
        ['<div class="info_content">' +
        '<h3>Secret Beach</h3>' +
        '<p>Position Near Atuh Beach Located in Pejukutan Village.</p>' +
        '</div>'],
        ['<div class="info_content">' +
        '<h3>Ceningan Snorkling</h3>' +
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