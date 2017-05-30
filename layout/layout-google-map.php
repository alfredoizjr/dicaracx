<section>
    <div id="map"></div>
  <script>
      function initMap() {
        var uluru = {lat: <?=get_theme_mod('dicaracx_google_set_lat')?>, lng: <?=get_theme_mod('dicaracx_google_set_lon')?>};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });

      }
    </script>
<script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD7mPKL15CnVvvlgXcX_lYJthBNQFdsPjg&callback=initMap">
</script>
</section>