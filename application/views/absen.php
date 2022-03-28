<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABSEN PEGAWAI</title>
    <link rel="apple-touch-icon" href="<?php echo base_url(); ?>assets/images/favicon.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/images/favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">
    <!-- leaflet css  -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
    <!-- bootstrap cdn  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            background-color: #000000;
        }

        .absen {
            margin-top: 25%;
        }

        @media only screen and (max-width: 600px) {
            .absen {
                margin-top: 50%;
            }
        }

        .tombol {
            background-color: crimson;
            border: none;
            border-radius: 50%;
            padding: 14px 18px 14px 18px;
            color: white;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php echo $this->session->flashdata('profile'); ?>
            </div>
            <div class="col-md-12 absen align-content-center">
                <center>
                    <form id="register" class="my-5">
                        <div class="form-group">
                            <input type="hidden" class="form-control" name="longitude" id="longitude">
                            <input type="hidden" class="form-control" name="latitude" id="latitude">
                        </div>
                        <div id="my_camera"></div>
                        <button type="submit" class="tombol">
                            <i class="fas fa-camera"></i>
                        </button>
                    </form>
                </center>
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
        <script language="JavaScript">
            Webcam.set({
                width: 320,
                height: 320,
                dest_weight: 320,
                dest_height: 320,
                image_format: 'jpeg',
                jpeg_quality: 90
            });
            Webcam.attach('#my_camera');
        </script>
        <!-- Code to handle taking the snapshot and displaying it locally -->
        <script type="text/javascript">
            $('#register').on('submit', function(event) {
                event.preventDefault();
                var image = '';
                var longitude = $('#longitude').val();
                var latitude = $('#latitude').val();
                console.log(longitude);
                Webcam.snap(function(data_uri) {
                    image = data_uri;
                });
                <?php if ($this->session->userdata('role_id') == 1) {
                    $url = 'admin/pegawai/submit_absen';
                } else {
                    $url = 'pegawai/submit_absen';
                } ?>
                $.ajax({
                    url: '<?php echo site_url($url); ?>',
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        longitude: longitude,
                        latitude: latitude,
                        image: image
                    },
                    success: function(data) {
                        location.reload();
                    }
                })
            });

            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(successFunction, errorFunction);
            } else {
                console.log('It seems like Geolocation, which is required for this page, is not enabled in your browser. Please use a browser which supports it.');
            }

            function successFunction(position) {
                var lat = position.coords.latitude;
                var long = position.coords.longitude;
                console.log('Your latitude is :' + lat + ' and longitude is ' + long);
                document.getElementById("longitude").value = long;
                document.getElementById("latitude").value = lat;
            }

            function errorFunction(position) {
                console.log(position)
            }
        </script>
</body>

</html>