<div class="container-fluid">
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">Dashboard</h3>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Info box -->
    <!-- ============================================================== -->
    <div class="row">
        <!-- Column -->
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div id="gmaps-markers" class="gmaps" style="height: 500px;"></div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Lokasi</th>
                                <th>Lokal IP</th>
                                <th>Rack Server Tersedia</th>
                                <th>Kelas DC</th>
                                <th>Status</th>
                                <th>Status Alert</th>
                            </tr>
                        </thead>
                        <?php   
                            foreach ($data as $result) :
                                $location   = $result['lokasi'];
                                $ip       = $result['IP'];
                                $rack       = $result['rack_available'];
                                $class_dc       = $result['class_dc'];
                                $status       = $result['status'];
                                $alert       = $result['alert'];
                        ?> 
                        <tbody class="rack-table">
                            <tr>
                                <td><?= $location; ?></td>
                                <td><?= $ip; ?></td>
                                <td><?= $rack." Unit - 1000 Unit"; ?></td>
                                <td><?= "Type DC ".$class_dc; ?></td>
                                <td><?= $status; ?></td>
                                <td><?= $alert." Alarm"; ?></td>
                            </tr>
                        </tbody>
                        <?php
                         endforeach
                        ?>
                    </table>
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div>
    </div>
</div>

<script>
    function initMap() {
        var  data2 = [{"location":"Jakarta,-6.121435,106.774124","temperature":25,"voltage":203.9,"humidity":50,"flow":18,"current":1.3,"status":0,"id":1},{"location":"Tangerang,-6.178306,106.631889","temperature":26.2,"voltage":23,"humidity":60,"flow":19.23,"current":34,"status":0,"id":2}];
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
            url: "<?= base_url();?>/assets/images/server.png",
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
                <?php  
                    foreach ($data as $result) :
                ?>
                    '<tr>' + 
                    '<td>' +<?= $result['suhu']; ?>+ '</td>'+
                    '<td>' + + '</td>'+
                    '<td>' + + '</td>'+
                    '<td>' + + '</td>'+
                    '<td>' + + '</td>'+
                    '<td>' + + '</td>'+
                    '</tr>' +
                <?php
                endforeach
                ?>
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

    setInterval(function(){
        initMap() // this will run after every 5 seconds
    }, 5000);
</script>
