<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package corporates
 */

?>

</div><!-- #content -->


<?php wp_footer(); ?>

<script type="text/javascript">

    function initMap() {

        if($('.gmap').length){

            var lat = 38.8114035;
            var lng = -98.3142106;
              if($(window).width() <= 680){
                var zoom = 2.75;
            }

            else{
                var zoom = 3.75;
            }
            ;
            var map
            locations,
            url = $('.gmap').attr('data-url');


            var myOptions = {
                zoom: zoom,
                center: {"lat": lat, "lng": lng},
                center:  $('.gmap').data('coords'),
                disableDefaultUI: true,
            }   
            
            var locations = [
            {   
                "markerId": 1,
                "markerType": "main",
                "markerPos": {"lat": 33.6330323, "lng":-117.914241},
                'title':"Hello World!" ,    
                "contentString":"<div>ул. Жмеринская 11/1</div><div>м. Святошино</div>"
            },
            ];

            function loadMarkers(url){
                $.ajax({
                    url: url
                }).done(function(data) {
                    locations = data; 
                    addMarkers(data);
                });

            }

            function addMarkers(data){ 
                for (var i = 0; i <= locations.length - 1; i++){

                    var infowindow = new google.maps.InfoWindow({
                        content: locations[i].contentString,
                    });
                    locations[i].infowindow = infowindow;

                    var marker = new google.maps.Marker({
                        position: locations[i].markerPos,
                        map: map,
                        id: i,
                        idMarker: locations[i].markerId,
                        title: locations[i].title,
                        icon: {
                            url: locations[i].markerIcon,                    
                        },
                    });
                    if(locations[i].markerType == 'metro'){
                        marker.setVisible(false);
                    }
                    locations[i].marker = marker;

                    marker.addListener('click', function() {
                        var $id = this.id;
                        
                        $('.gm-style-iw').children('button').trigger('click');
                        locations[$id].infowindow.open(map, locations[$id].marker);
                    });
                }
            }
            var mapBig = document.querySelectorAll('.gmap'); 
            var coordinates = {"lat": 34.1000999, "lng": -117.9999999};
            mapBig.forEach(function(item) {
              var map = new google.maps.Map(item, myOptions);
              var marker = new google.maps.Marker({
                position: coordinates,
                map: map,
                title: "Los  Angeles",
                snippet:"<div>Los  Angeles</div>"
            });
              var marker = new google.maps.Marker({
                position: {"lat": 42.5907993, "lng": -78.8000000},
                map: map,
                title: "New Yorck",
                snippet:"<div>New Yorck</div>"
            });
          });
            

            addMarkers(locations);

        }


    }




</script>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAfb5zjZrMY-38hJL-rB3HX1OVWev_cwK8&amp;callback=initMap&amp;ver=5.1.1"></script>
</body>
</html>
