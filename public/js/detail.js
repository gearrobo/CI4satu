function initMap() {
    var  data2 = [{"location":"Jakarta,-6.121435,106.774124","id":1},{"location":"Tangerang,-6.178306,106.631889","id":2}];
    var locations = [];
    $.each(data2, function( index, value ) {
        locations.push({
            loc : value.location.split(','), 
            id : value.id, 
            temperature : value.temperature, 
            humidity : value.humidity, 
            flow : value.flow,
            voltage : value.voltage,
            current : value.current,
            status : value.status === 1 ? 'Online' : 'Offline',
            badge : value.status === 1 ? 'badge-success' : 'badge-danger',
        });
    }); 
    
    var map = new google.maps.Map(document.getElementById('gmaps-markers'), {
        zoom: 12,
        center: new google.maps.LatLng(-6.121435, 106.774124),
        mapTypeId: google.maps.MapTypeId.HYBRID
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    var iconp = {
        url: 'img/server.png',
        scaledSize: new google.maps.Size(70, 70),
        origin: new google.maps.Point(0, 0),
        anchor: new google.maps.Point(0, 0)
    };

    console.log(locations);
    for (i = 0; i < locations.length; i++) {
        marker = new google.maps.Marker({
            position: new google.maps.LatLng(locations[i].loc[1], locations[i].loc[2]),
            map: map,
            icon: iconp,
            animation: google.maps.Animation.BOUNCE,
        });

        google.maps.event.addListener(marker, 'click', (function(marker, i) {
            var contentString = '<div id="content">' +
                '<h3 id="firstHeading" class="firstHeading">' + locations[i].loc[0] + '</h3>' +
                '<div id="bodyContent">' +
                '<table class="table" style="border: none">' +
                '<tr>' +
                '<th>Suhu</th>' +
                '<th>Lembab</th>' +
                '<th>Tim Ups</th>' +
                '<th>Power Available</th>' +
                '<th>Solar</th>' +
                '<th>Status</th>' +
                '</tr>' +

                '<tr>' + 
                '<td>' + + '</td>'+
                '<td>' + + '</td>'+
                '<td>' + + '</td>'+
                '<td>' + + '</td>'+
                '<td>' + + '</td>'+
                '<td>' + + '</td>'+
                '</tr>' +
                '</table>'
            '</div>' +
            '</div>';
            return function() {
                infowindow.setContent(contentString);
                infowindow.open(map, marker);
            }
        })(marker, i));
    }
}


    