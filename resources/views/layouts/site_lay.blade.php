<!DOCTYPE html>
<html lang="en">
<head>
    <title>Look - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('site/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/animate.css')}}">

    <link rel="stylesheet" href="{{asset('site/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('site/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('site/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('site/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/jquery.timepicker.css')}}">


    <link rel="stylesheet" href="{{asset('site/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/style.css')}}">
</head>
<body>

<div class="page">
    <nav id="colorlib-main-nav" role="navigation">
        <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle active"><i></i></a>
        <div class="js-fullheight colorlib-table">
            <div class="img" style="background-image: url(images/bg_2.jpg);"></div>
            <div class="colorlib-table-cell js-fullheight">
                <div class="row no-gutters">
                    <div class="col-md-12 text-center">
                        <h1 class="mb-4"><a href="index.html" class="logo">Look<br><span>Model Agency</span></a></h1>
                        <ul>
                            <li class="active"><a href="index.html"><span><small>01</small>Home</span></a></li>
                            <li><a href="about.html"><span><small>02</small>About</span></a></li>
                            <li><a href="model.html"><span><small>03</small>Models</span></a></li>
                            <li><a href="blog.html"><span><small>04</small>Blog</span></a></li>
                            <li><a href="contact.html"><span><small>05</small>Contact</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div id="colorlib-page">
        <header>
            <div class="colorlib-navbar-brand">
                <a class="colorlib-logo" href="index.html">Look<br><span>Model Agency</span></a>
            </div>
            <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
        </header>


        <!-- END slider -->
    @yield('content')








            <!-- loader -->
            <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

        </div>

        <!-- Modal -->
        <div class="modal fade" id="modalRequest" tabindex="-1" role="dialog" aria-labelledby="modalRequestLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalRequestLabel">Request a Quote</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="#">
                            <div class="form-group">
                                <label for="appointment_name" class="text-black">Full Name</label>
                                <input type="text" class="form-control" id="appointment_name">
                            </div>
                            <div class="form-group">
                                <label for="appointment_email" class="text-black">Email</label>
                                <input type="text" class="form-control" id="appointment_email">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="appointment_date" class="text-black">Date</label>
                                        <input type="text" class="form-control" id="appointment_date">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="appointment_time" class="text-black">Time</label>
                                        <input type="text" class="form-control" id="appointment_time">
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="appointment_message" class="text-black">Message</label>
                                <textarea name="" id="appointment_message" class="form-control" cols="30" rows="10"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Send Message" class="btn btn-primary">
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <script src="{{asset('site/js/jquery.min.js')}}"></script>
    <script src="{{asset('site/js/jquery-migrate-3.0.1.min.js')}}"></script>
    <script src="{{asset('site/js/popper.min.js')}}"></script>
    <script src="{{asset('site/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('site/js/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('site/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('site/js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('site/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('site/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('site/js/aos.js')}}"></script>
    <script src="{{asset('site/js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{asset('site/js/scrollax.min.js')}}"></script>
    <script src="{{asset('site/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('site/js/jquery.timepicker.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{asset('site/js/google-map.js')}}"></script>
    <script src="{{asset('site/js/main.js')}}"></script>

</body>

</html>