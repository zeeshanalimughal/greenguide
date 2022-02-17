<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="LGG" />
    <meta name="description" content="Green Guide">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ url('front/img/green-guide-logo.png')}}">
  <link rel="icon" sizes="180x180" href="{{ url('front/img/green-guide-logo.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Document title -->
    <title>Green Guide</title>
    <!-- Stylesheets & Fonts -->

    <link href="{{ url('front/css/plugins.css')}}" rel="stylesheet">
    <link href="{{ url('front/css/style.css')}}" rel="stylesheet">
    <link href="{{ url('front/css/new-pages.css')}}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.2/css/swiper.min.css" rel="stylesheet">

    <script src="{{ url('front/js/jquery.js')}}"></script>

    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>

    @stack('home-css')
    <!-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> -->
    <style type="text/css">
        .error > p{
            color: red !important;
        }
        .account-nav{
            margin-left: -20px;
            list-style: none;
        }
        .account-nav > li{
            padding: 10px 0px;
            border-bottom: 2px solid grey !important;
        }
        .account-nav > li > a{
            color: #000;
        }
        .active{
            color: #2250fc !important;
        }

    </style>
</head>

<body>

    <div class="body-inner">
        <header id="header" data-fullwidth="true" class="header-mini">
            <div class="header-inner">
                <div class="container d-flex justify-content-center">
                    <!--Logo-->
                    <div id="logo"> <a href="/"><span class="logo-default"><img class="img-fluid" width="100px" height="60px" src="{{ url('front/img/green-guide-logo.png')}}"></span></a> </div>
                    <!--End: Logo-->
                    <!-- Search -->
                    <div id="search"><a id="btn-search-close" class="btn-search-close" aria-label="Close search form"><i class="icon-x"></i></a>
                        <form class="search-form" action="search-results-page.html" method="get">
                            <input class="form-control" name="q" type="text" placeholder="Type & Search..." />
                            <span class="text-muted">Start typing & press "Enter" or "ESC" to close</span>
                        </form>
                    </div>
                    <!-- end: search -->
                    <!--Header Extras-->
                    <!-- <div class="header-extras">
                        <ul>
                            <li>
                                <a id="btn-search" href="#"> <i class="icon-search"></i></a>
                            </li>
                            <li>
                                <div class="p-dropdown"> <a href="#"><i class="icon-globe"></i><span>EN</span></a>
                                    <ul class="p-dropdown-content">
                                        <li><a href="#">French</a></li>
                                        <li><a href="#">Spanish</a></li>
                                        <li><a href="#">English</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div> -->
                    <!--end: Header Extras-->
                    <!--Navigation Resposnive Trigger-->
                    <div id="mainMenu-trigger"> <a class="lines-button x"><span class="lines"></span></a> </div>
                    <!--end: Navigation Resposnive Trigger-->
                    <!--Navigation-->
                    <div id="mainMenu" class="d-sm-flex flex-grow-1 justify-content-sm-center">
                        <div class="container d-sm-flex justify-content-sm-center align-items-sm-center">
                            <nav>
                                <ul>
                                    <li><a href="/">Home</a></li>
                                    <li><a href="/about">About</a></li>
                                    <!-- <li><a href="/advertise">Advertise</a></li> -->
                                    <li>
                                <div class="p-dropdown"><a href="#" class="py-2 px-3 font-weight-600">Advertise</a>
                                    <ul class="p-dropdown-content">
                                        <li><a href="/advertise">Magazine Advert</a></li>
                                        <li><a href="/advertise">Advert Design</a></li>
                                        <li><a href="/advertise">Upcoming Issues</a></li>
                                        <li><a href="/advertise">Archives</a></li>
                                    </ul>
                                </div>
                            </li>
                                    <li><a href="/localevents">Local Events</a></li>
                                    <li><a href="/businessdirectory">Business Directory</a></li>
                                    <li><a href="/greeninitiative">Green Initiative</a></li>
                                    <li><a href="/communitygrowth">Comunity Growth</a></li>
                                    <li><a href="/jobs">Jobs</a></li>
                                    <li><a href="/contact">Contact</a></li>
                                    <?php if(isset($user_data) && !empty($user_data)){ ?>
                                        <li><a href="/account">Account</a></li>
                                    <?php }else{ ?>
                                        <li><a href="/login">Login</a></li>
                                    <?php } ?>

                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!--end: Navigation-->
                </div>
            </div>
        </header>
        <!-- end: Header -->
