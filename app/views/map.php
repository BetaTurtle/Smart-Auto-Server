

<script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<div id="map" style="width: 500px; height: 400px;"></div>

<script type="text/javascript">
	
    $.get("/location",function(data,status){
        console.log(data[0]);

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 10,
            center: new google.maps.LatLng(data[0].lat, data[0].lng),
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });

        var infowindow = new google.maps.InfoWindow();
        var marker, i;

        for(i=0; i<data.length; i++){
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(data[i].lat, data[i].lng),
                map: map
            });

            google.maps.event.addListener(marker, 'click', (function (marker, i) {
                return function () {
                    infowindow.setContent(data[i].deviceid);
                    infowindow.open(map, marker);
                }
            })(marker, i));
        }
  });


	

</script>