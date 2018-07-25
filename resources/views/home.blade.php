<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Bat dong san</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="admin_asset/assets/images/favicon.ico">


        <link href="admin_asset/plugins/jquery-circliful/css/jquery.circliful.css" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="admin_asset/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="admin_asset/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="admin_asset/assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="admin_asset/assets/js/modernizr.min.js"></script>

    </head>

    <body>

        @include('admin.layout.header')


        <div class="wrapper">
            
            <h1> Bat dong san</h1>

        </div>
        <!-- end wrapper -->


        <!-- Footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        2016 - 2018 © Minton - Coderthemes.com
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->


        <!-- jQuery  -->
        <script src="admin_asset/assets/js/jquery.min.js"></script>
        <script src="admin_asset/assets/js/popper.min.js"></script><!-- Popper for Bootstrap --><!-- Tether for Bootstrap -->
        <script src="admin_asset/assets/js/bootstrap.min.js"></script>
        <script src="admin_asset/assets/js/waves.js"></script>
        <script src="admin_asset/assets/js/jquery.slimscroll.js"></script>
        <script src="admin_asset/assets/js/jquery.scrollTo.min.js"></script>

        <!-- Counter Up  -->
        <script src="admin_asset//plugins/waypoints/lib/jquery.waypoints.min.js"></script>
        <script src="../plugins/counterup/jquery.counterup.min.js"></script>

        <!-- circliful Chart -->
        <script src="admin_asset/plugins/jquery-circliful/js/jquery.circliful.min.js"></script>
        <script src="admin_asset/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

        <!-- skycons -->
        <script src="admin_asset/plugins/skyicons/skycons.min.js" type="text/javascript"></script>

        <!-- Page js  -->
        <script src="admin_asset/assets/pages/jquery.dashboard.js"></script>

        <!-- Custom main Js -->
        <script src="admin_asset/assets/js/jquery.core.js"></script>
        <script src="admin_asset/assets/js/jquery.app.js"></script>


        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
                $('.circliful-chart').circliful();
            });

            // BEGIN SVG WEATHER ICON
            if (typeof Skycons !== 'undefined'){
                var icons = new Skycons(
                        {"color": "#3bafda"},
                        {"resizeClear": true}
                        ),
                        list  = [
                            "clear-day", "clear-night", "partly-cloudy-day",
                            "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                            "fog"
                        ],
                        i;

                for(i = list.length; i--; )
                    icons.set(list[i], list[i]);
                icons.play();
            };

        </script>

        @yield('script')

    </body>
</html>