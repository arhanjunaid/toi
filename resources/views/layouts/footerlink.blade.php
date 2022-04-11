<!-- Vendor -->
    <script src="public/js/jquery.min.js"></script>
    <script src="public/js/jquery.appear.min.js"></script>
    <script src="public/js/jquery.easing.min.js"></script>
    <script src="public/js/jquery.cookie.min.js"></script>
    <script src="public/js/bootstrap.bundle.min.js"></script>
    <script src="public/js/jquery.validate.min.js"></script>
    <script src="public/js/jquery.easypiechart.min.js"></script>
    <script src="public/js/jquery.gmap.min.js"></script>
    <script src="public/js/lazysizes.min.js"></script>
    <script src="public/js/jquery.isotope.min.js"></script>
    <script src="public/js/owl.carousel.min.js"></script>
    <script src="public/js/jquery.magnific-popup.min.js"></script>
    <script src="public/js/jquery.vide.min.js"></script>
    <script src="public/js/vivus.min.js"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="public/js/theme.js"></script>

    <script src="public/js/view.contact.js"></script>

    <!-- Theme Initialization Files -->
    <script src="public/js/theme.init.js"></script>

  <!-- Examples -->
    <script src="public/js/examples.portfolio.js"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAhpYHdYRY2U6V_VfyyNtkPHhywLjDkhfg"></script>
    <script>

      /*
      Map Settings

        Find the Latitude and Longitude of your address:
          - https://www.latlong.net/
          - http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/

      */

      function initializeGoogleMaps() {
        // Map Markers
        var mapMarkers = [{
          address: "New York, NY 10017",
          html: "<strong>New York Office</strong><br>New York, NY 10017<br><br><a href='#' onclick='mapCenterAt({latitude: 40.75198, longitude: -73.96978, zoom: 16}, event)'>[+] zoom here</a>",
          icon: {
            image: "img/pin.png",
            iconsize: [26, 46],
            iconanchor: [12, 46]
          }
        }];

        // Map Initial Location
        var initLatitude = 40.75198;
        var initLongitude = -73.96978;

        // Map Extended Settings
        var mapSettings = {
          controls: {
            draggable: (($.browser.mobile) ? false : true),
            panControl: true,
            zoomControl: true,
            mapTypeControl: true,
            scaleControl: true,
            streetViewControl: true,
            overviewMapControl: true
          },
          scrollwheel: false,
          markers: mapMarkers,
          latitude: initLatitude,
          longitude: initLongitude,
          zoom: 5
        };

        var map = $('#googlemaps').gMap(mapSettings),
          mapRef = $('#googlemaps').data('gMap.reference');

        // Styles from https://snazzymaps.com/
        var styles = [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}];

        var styledMap = new google.maps.StyledMapType(styles, {
          name: 'Styled Map'
        });

        mapRef.mapTypes.set('map_style', styledMap);
        mapRef.setMapTypeId('map_style');
      }

      // Initialize Google Maps when element enter on browser view
      theme.fn.intObs( '.google-map', 'initializeGoogleMaps()', {} );

      // Map text-center At
      var mapCenterAt = function(options, e) {
        e.preventDefault();
        $('#googlemaps').gMap("centerAt", options);
      }

    </script>



  <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"6d6a8b38bc594a08","version":"2021.12.0","r":1,"token":"03fa3b9eb60b49789931c4694c153f9b","si":100}' crossorigin="anonymous"></script>