<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
    	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    	<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Codedthemes" />
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    <!-- Font Awesome -->
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"> -->

    <!-- fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">

    <!-- animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />

    <!-- prism css -->
    <link rel="stylesheet" href="{{ url('template/dist/assets/css/plugins/prism-coy.css') }}">

    <!-- vendor css -->
    <link rel="stylesheet" href="{{ url('template/dist/assets/css/style.css') }}">

    <style>
        /* animate css */
        @media (min-width: 992px) {
            .animate {
                animation-duration: 0.3s;
                -webkit-animation-duration: 0.3s;
                animation-fill-mode: both;
                -webkit-animation-fill-mode: both;
            }
        }

        @keyframes slideIn {
            0% {
                transform: translateY(1rem);
                opacity: 0;
            }

            100% {
                transform: translateY(0rem);
                opacity: 1;
            }

            0% {
                transform: translateY(1rem);
                opacity: 0;
            }
        }

        @-webkit-keyframes slideIn {
            0% {
                -webkit-transform: transform;
                -webkit-opacity: 0;
            }

            100% {
                -webkit-transform: translateY(0);
                -webkit-opacity: 1;
            }

            0% {
                -webkit-transform: translateY(1rem);
                -webkit-opacity: 0;
            }
        }

        .slideIn {
            -webkit-animation-name: slideIn;
            animation-name: slideIn;
        }


        * {
            font-family: 'Ubuntu', sans-serif;
        }

        .page-header,
        .page-block {
            background: none !important;
            box-shadow: none !important;
        }

        .page-header-title .page-title {
            font-weight: 300 !important;
        }

        .btn {
            border-radius: 0.4em;
        }

        ul.timeline {
            list-style-type: none;
            position: relative;
        }

        ul.timeline:before {
            content: ' ';
            background: rgba(0, 0, 0, .3);
            display: inline-block;
            position: absolute;
            left: 29px;
            width: 2px;
            height: 110%;
            z-index: 400;
        }

        ul.timeline>li {
            margin: 20px 0;
            padding-left: 20px;
        }

        ul.timeline>li:before {
            content: ' ';
            background: white;
            display: inline-block;
            position: absolute;
            border-radius: 50%;
            border: 3px solid rgba(0, 0, 0, .4);
            left: 20px;
            width: 20px;
            height: 20px;
            z-index: 400;
        }

        .timeline a {
            color: rgba(0, 0, 0, .6);
            font-size: 16px;
            transition: .3s;
        }

        .timeline a:hover {
            border-bottom: 1px solid rgba(0, 0, 0, .6);
        }
    </style>



</head>

<body>
    <!-- [ Pre-loader ] start -->
    <!-- <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div> -->
    <!-- [ Pre-loader ] End -->
    <!-- [ navigation menu ] start -->
    <nav class="pcoded-navbar theme-horizontal menu-light brand-blue">
        <div class="navbar-wrapper container">
            <div class="navbar-content sidenav-horizontal" id="layout-sidenav">
                <ul class="nav pcoded-inner-navbar sidenav-inner">
                    <li class="nav-item pcoded-menu-caption">
                        <label>Navigation</label>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/') }}" class="nav-link"><span class="pcoded-micon"><i
                                    class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/archive') }}" class="nav-link"><span class="pcoded-micon"><i
                                    class="feather icon-layout"></i></span><span class="pcoded-mtext">Arsip</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/create') }}" class="nav-link"><span class="pcoded-micon"><i
                                    class="feather icon-file-text"></i></span><span class=" pcoded-mtext">Buat
                                sertifikat</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- [ navigation menu ] end -->
    <!-- [ Header ] start -->
    <header class="navbar pcoded-header navbar-expand-lg navbar-light header-blue">
        <div class="container">
            <div class="m-header">
                <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
                <a href="#!" class="b-brand">
                    <!-- ========   change your logo hear   ============ -->
                    <!-- <img src="assets/images/logo.png" alt="" class="logo">
                    <img src="assets/images/logo-icon.png" alt="" class="logo-thumb"> -->
                </a>
                <a href="#!" class="mob-toggler">
                    <i class="feather icon-more-vertical"></i>
                </a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a href="#!" class="pop-search"><i class="feather icon-search"></i></a>
                        <div class="search-bar">
                            <input type="text" class="form-control border-0 shadow-none" placeholder="Search here">
                            <button type="button" class="close" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="#!" class="full-screen" onclick="javascript:toggleFullScreen()"><i
                                class="feather icon-maximize"></i></a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li>
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i
                                    class="icon feather icon-bell"></i><span class="badge bg-danger"><span
                                        class="sr-only"></span></span></a>
                            <div class="dropdown-menu dropdown-menu-right notification animate slideIn">
                                <div class="noti-head bg-light">
                                    <h6 class="d-inline-block m-b-0 text-dark">Notifications</h6>
                                    <div class="float-right">
                                        <a href="#!" class="m-r-10 text-dark">mark as read</a>
                                        <a href="#!" class=" text-dark">clear all</a>
                                    </div>
                                </div>
                                <ul class="noti-body">
                                    <li class="n-title">
                                        <p class="m-b-0">NEW</p>
                                    </li>
                                    <li class="notification">
                                        <div class="media">
                                            <img class="img-radius" src="assets/images/user/avatar-1.jpg"
                                                alt="Generic placeholder image">
                                            <div class="media-body">
                                                <p><strong>John Doe</strong><span class="n-time text-muted"><i
                                                            class="icon feather icon-clock m-r-10"></i>5 min</span></p>
                                                <p>New ticket Added</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="n-title">
                                        <p class="m-b-0">EARLIER</p>
                                    </li>
                                    <li class="notification">
                                        <div class="media">
                                            <img class="img-radius" src="assets/images/user/avatar-2.jpg"
                                                alt="Generic placeholder image">
                                            <div class="media-body">
                                                <p><strong>Joseph William</strong><span class="n-time text-muted"><i
                                                            class="icon feather icon-clock m-r-10"></i>10 min</span></p>
                                                <p>Prchace New Theme and make payment</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="notification">
                                        <div class="media">
                                            <img class="img-radius" src="assets/images/user/avatar-1.jpg"
                                                alt="Generic placeholder image">
                                            <div class="media-body">
                                                <p><strong>Sara Soudein</strong><span class="n-time text-muted"><i
                                                            class="icon feather icon-clock m-r-10"></i>12 min</span></p>
                                                <p>currently login</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="notification">
                                        <div class="media">
                                            <img class="img-radius" src="assets/images/user/avatar-2.jpg"
                                                alt="Generic placeholder image">
                                            <div class="media-body">
                                                <p><strong>Joseph William</strong><span class="n-time text-muted"><i
                                                            class="icon feather icon-clock m-r-10"></i>30 min</span></p>
                                                <p>Prchace New Theme and make payment</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="noti-footer">
                                    <a href="#!">show all</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="dropdown drp-user">
                            <a href="#!" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="assets/images/user/avatar-1.jpg" class="img-radius wid-40"
                                    alt="User-Profile-Image">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-notification animate slideIn shadow">
                                <div class="pro-head bg-light">
                                    <img src="assets/images/user/avatar-1.jpg" class="img-radius"
                                        alt="User-Profile-Image">
                                    <span class="text-dark">John Doe</span>
                                    <!-- <a href="auth-signin.html" class="dud-logout" title="Logout">
                                        <i class="feather icon-log-out"></i>
                                    </a> -->
                                </div>
                                <ul class="pro-body">
                                    <li><a href="user-profile.html" class="dropdown-item"><i
                                                class="feather icon-user"></i> Profile</a></li>
                                    <li><a href="email_inbox.html" class="dropdown-item"><i
                                                class="feather icon-mail"></i> My Messages</a></li>
                                    <li><a href="auth-signin.html" class="dropdown-item"><i
                                                class="feather icon-lock"></i> Lock Screen</a></li>
                                    <li><a href="auth-signin.html" class="dropdown-item"><i
                                                class="feather icon-log-out"></i> Sign out</a></li>

                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <!-- [ Header ] end -->
    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper container">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <div class="main-body">
                        <div class="page-wrapper">


                            @yield('container')

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ Main Content ] end -->


    <!-- Required Js -->
    <script src="{{ url('template/dist/assets/js/vendor-all.min.js') }}"></script>
    <script src="{{ url('template/dist/assets/js/plugins/bootstrap.min.js') }}"></script>
    <script src="{{ url('template/dist/assets/js/pcoded.min.js') }}"></script>


    <!-- prism Js -->
    <script src="{{ url('template/dist/assets/js/plugins/prism.js') }}"></script>


    <script src="{{ url('template/dist/assets/js/horizontal-menu.js') }}"></script>
    <script>
        (function() {
            if ($('#layout-sidenav').hasClass('sidenav-horizontal') || window.layoutHelpers.isSmallScreen()) {
                return;
            }
            try {
                window.layoutHelpers._getSetting("Rtl")
                window.layoutHelpers.setCollapsed(
                    localStorage.getItem('layoutCollapsed') === 'true',
                    false
                );
            } catch (e) {}
        })();
        $(function() {
            $('#layout-sidenav').each(function() {
                new SideNav(this, {
                    orientation: $(this).hasClass('sidenav-horizontal') ? 'horizontal' : 'vertical'
                });
            });
            $('body').on('click', '.layout-sidenav-toggle', function(e) {
                e.preventDefault();
                window.layoutHelpers.toggleCollapsed();
                if (!window.layoutHelpers.isSmallScreen()) {
                    try {
                        localStorage.setItem('layoutCollapsed', String(window.layoutHelpers
                            .isCollapsed()));
                    } catch (e) {}
                }
            });
        });
        $(document).ready(function() {
            $("#pcoded").pcodedmenu({
                themelayout: 'horizontal',
                MenuTrigger: 'hover',
                SubMenuTrigger: 'hover',
            });
        });
    </script>

    <script src="{{ url('template/dist/assets/js/analytics.js') }}"></script>
    <script src="{{ url('template/dist/assets/js/plugins/apexcharts.min.js') }}"></script>
    <script src="{{ url('template/dist/assets/js/pages/chart-apex.js') }}"></script>
    <!-- <script src="assets/js/feather.min.js"></script> -->

</body>

</html>