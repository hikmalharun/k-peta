<html>

<head>
    <title>Javascript geo sample</title>
    <script src="<?php echo base_url() ?>assets/js/geolocation/geo.js" type="text/javascript" charset="utf-8"></script>
</head>

<body>
    <b>Javascript geo.js sample that retrieves your location and opens the map of the location</b>
    <script>
        if (geo_position_js.init()) {
            geo_position_js.getCurrentPosition(success_callback, error_callback, {
                enableHighAccuracy: true
            });
        } else {
            alert("Functionality not available");
        }

        function success_callback(p) {
            geo_position_js.showMap(p.coords.latitude, p.coords.longitude);
        }

        function error_callback(p) {
            alert('error=' + p.message);
        }
    </script>
</body>

</html>