<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>@yield('title') | Sigma Elearning</title>

        <!-- Css Files -->
        <link href="{{ url( 'visitor/css/bootstrap.css' )}}" rel="stylesheet">
        <link href="{{ url( 'visitor/css/font-awesome.css' )}}" rel="stylesheet">
        <link href="{{ url( 'visitor/css/flaticon.css' )}}" rel="stylesheet">
        <link href="{{ url( 'visitor/css/slick-slider.css' )}}" rel="stylesheet">
        <link href="{{ url( 'visitor/css/prettyphoto.css' )}}" rel="stylesheet">
        <link href="{{ url( 'visitor/build/mediaelementplayer.css' )}}" rel="stylesheet">
        <link href="{{ url( 'visitor/style.css' )}}" rel="stylesheet">
        <link href="{{ url( 'visitor/css/color.css' )}}" rel="stylesheet">
        <link href="{{ url( 'visitor/css/color-two.css' )}}" rel="stylesheet">
        <link href="{{ url( 'visitor/css/color-three.css' )}}" rel="stylesheet">
        <link href="{{ url( 'visitor/css/color-four.css' )}}" rel="stylesheet">
        <link href="{{ url( 'visitor/css/responsive.css' )}}" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        <!--// Main Wrapper \\-->
        <div class="wm-main-wrapper">

            <!--// Header \\-->
            <header id="wm-header" class="wm-header-one">

                <!--// TopStrip \\-->
                <div class="wm-topstrip">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="wm-language">
                                    <ul>
                                    </ul>
                                </div>

                                <ul class="wm-stripinfo">
                                </ul>
                                <ul class="wm-adminuser-section">
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--// TopStrip \\-->

                <!--// MainHeader \\-->
                <div class="wm-main-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <a href="#" class="wm-logo">
                                    <img src="{{ url( 'visitor/images/logo-1.png' )}}" alt="">
                                </a>
                            </div>
                            <div class="col-md-8">
                                <!--// Navigation \\-->
                                <nav class="navbar navbar-default">
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="true">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>

                                    <div class="collapse navbar-collapse" id="navbar-collapse-1">
                                        <ul class="nav navbar-nav">
                                            <li class="active">
                                                <a href="{{route('courseVisitor')}}">Home</a>
                                            </li>
                                            <li><a href="#">courses</a>
                                                <ul class="wm-dropdown-menu">
                                                    <li><a href="#">Courses Grid</a></li>
                                                    <li><a href="#">Courses List</a></li>
                                                    <li><a href="#">Courses Detail</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">event</a>
                                                <ul class="wm-dropdown-menu">
                                                    <li><a href="#">Event Grid</a></li>
                                                    <li><a href="#">Event Detail</a></li>
                                                </ul>
                                            </li>
                                            <li ><a href="#">Dashboard</a>
                                                <ul class="wm-dropdown-menu">
                                                    <li><a href="#">Courses</a></li>
                                                    <li><a href="#">Favourite</a></li>
                                                    <li><a href="#">My Courses</a></li>
                                                    <li><a href="#">Profile Settings</a></li>
                                                    <li><a href="#">Settings</a></li>
                                                    <li><a href="#">Statement</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="{{route('contact')}}">Contact</a>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>
                                <!--// Navigation \\-->
                                <a href="#" class="wm-header-btn">get started</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--// MainHeader \\-->

            </header>
            <!--// Header \\-->

            <!--// Mini Header \\-->
            <div class="wm-mini-header">
                <span class="wm-blue-transparent"></span>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">

                            <h1>@yield('page')

                        </div>
                    </div>
                </div>
            </div>
            <!--// Mini Header \\-->

            <!--// Main Content \\-->
            <div class="wm-main-content">

                @yield('content')

            </div>
            <!--// Main Content \\-->

            <!--// Footer \\-->
            <footer id="wm-footer" class="wm-footer-one">

                <!--// FooterNewsLatter \\-->
                <div class="wm-footer-newslatter">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <form>
                                    <i class="wmicon-interface2"></i>
                                    <input type="text" name="email" value="Enter your e-mail address" onblur="if(this.value == '') { this.value ='Enter your e-mail address'; }" onfocus="if(this.value =='Enter your e-mail address') { this.value = ''; }">
                                    <input type="text" name="firstname" value="Enter your firstname" onblur="if(this.value == '') { this.value ='Enter your firstname'; }" onfocus="if(this.value =='Enter your firstname') { this.value = ''; }">
                                    <input type="text" name="lastname" value="Enter your lastname" onblur="if(this.value == '') { this.value ='Enter your lastname'; }" onfocus="if(this.value =='Enter your lastname') { this.value = ''; }">
                                    <input type="submit" value="Become an Instructor">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!--// FooterNewsLatter \\-->

                <!--// FooterWidgets \\-->
                <div class="wm-footer-widget">
                    <div class="container">
                        <div class="row">
                            <aside class="widget widget_contact_info col-md-3">
                                <a href="#" class="wm-footer-logo"><img src="{{ url( 'visitor/images/logo-1.png' )}}" alt=""></a>
                                <ul>
                                    <li><i class="wm-color wmicon-pin"></i> 195 Cooks Mine Road Espanola, NM 87532</li>
                                    <li><i class="wm-color wmicon-phone"></i> +1 505-753-5656 <br> +1 505-753-4437</li>
                                    <li><i class="wm-color wmicon-letter"></i> <a href="#">info@university.com</a> <a href="#">support@university.com</a></li>
                                </ul>
                                <div class="wm-footer-icons">
                                    <a href="#" class="wmicon-social5"></a>
                                    <a href="#" class="wmicon-social4"></a>
                                    <a href="#" class="wmicon-social3"></a>
                                    <a href="#" class="wmicon-vimeo"></a>
                                </div>
                            </aside>
                            <aside class="widget widget_archive col-md-2">
                                <div class="wm-footer-widget-title"> <h5>Quick Links</h5> </div>
                                <ul>
                                    <li><a href="#">Our Latest Events</a></li>
                                    <li><a href="#">Our Courses</a></li>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">FAQ</a></li>
                                    <li><a href="#">404 Page</a></li>
                                    <li><a href="#">Gallery</a></li>
                                    <li><a href="#">All Instructors</a></li>
                                </ul>
                            </aside>
                            <aside class="widget widget_twitter col-md-4">
                                <div class="wm-footer-widget-title"> <h5><i class="wmicon-social2"></i> @enrollcampus</h5> </div>
                                <ul>
                                    <li>
                                        <p>Check Youniverse - Multipurpose PSD Template @ThemeForest: <a href="#">pic.twitter.com/xcVlqJySjq</a></p>
                                        <time datetime="2008-02-14 20:00" class="wm-color">2 hrs ago</time>
                                    </li>
                                    <li>
                                        <p>Check out my New PSD:  FashionPlus - Fashion eCommerce: <a href="#">pic.twitter.com/xc445Ghyt</a></p>
                                        <time datetime="2008-02-14 20:00" class="wm-color">4 hrs ago</time>
                                    </li>
                                    <li>
                                        <p>MedicAid - Medical Template @ThemeForest: <a href="#">pic.twitter.com/xcVlq542wfER</a></p>
                                        <time datetime="2008-02-14 20:00" class="wm-color">1 day ago</time>
                                    </li>
                                </ul>
                            </aside>
                            <aside class="widget widget_gallery col-md-3">
                                <div class="wm-footer-widget-title"> <h5>Our Instructors</h5> </div>
                                <ul class="gallery">
                                    <li><a title="" data-rel="prettyPhoto[gallery1]" href="#"><img src="{{ url( 'visitor/extra-images/widget-gallery-1.jpg' )}}" alt=""></a></li>
                                    <li><a title="" data-rel="prettyPhoto[gallery1]" href="#"><img src="{{ url( 'visitor/extra-images/widget-gallery-2.jpg' )}}" alt=""></a></li>
                                    <li><a title="" data-rel="prettyPhoto[gallery1]" href="#"><img src="{{ url( 'visitor/extra-images/widget-gallery-3.jpg' )}}" alt=""></a></li>
                                    <li><a title="" data-rel="prettyPhoto[gallery1]" href="#"><img src="{{ url( 'visitor/extra-images/widget-gallery-4.jpg' )}}" alt=""></a></li>
                                    <li><a title="" data-rel="prettyPhoto[gallery1]" href="#"><img src="{{ url( 'visitor/extra-images/widget-gallery-5.jpg' )}}" alt=""></a></li>
                                    <li><a title="" data-rel="prettyPhoto[gallery1]" href="#"><img src="{{ url( 'visitor/extra-images/widget-gallery-6.jpg' )}}" alt=""></a></li>
                                    <li><a title="" data-rel="prettyPhoto[gallery1]" href="#"><img src="{{ url( 'visitor/extra-images/widget-gallery-7.jpg' )}}" alt=""></a></li>
                                    <li><a title="" data-rel="prettyPhoto[gallery1]" href="#"><img src="{{ url( 'visitor/extra-images/widget-gallery-8.jpg' )}}" alt=""></a></li>
                                    <li><a title="" data-rel="prettyPhoto[gallery1]" href="#"><img src="{{ url( 'visitor/extra-images/widget-gallery-9.jpg' )}}" alt=""></a></li>
                                </ul>
                            </aside>
                        </div>
                    </div>
                </div>
                <!--// FooterWidgets \\-->

                <!--// FooterCopyRight \\-->
                <div class="wm-copyright">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6"> <span><script>document.write(new Date().getFullYear())</script> © Sigma Elearning ..</span> </div>
                            <div class="col-md-6"> <p><a target="_blank" href="https://www.templateshub.net">By D. Ell Bouss</a></p> </div>
                        </div>
                    </div>
                </div>
                <!--// FooterCopyRight \\-->

            </footer>
            <!--// Footer \\-->

            <div class="clearfix"></div>
        </div>
        <!--// Main Wrapper \\-->

        <!-- ModalLogin Box -->
        <div class="modal fade" id="ModalLogin" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">

                        <div class="wm-modallogin-form wm-login-popup">
                            <span class="wm-color">Login to Your Account</span>
                            <form>
                                <ul>
                                    <li> <input type="text" value="Your Username" onblur="if(this.value == '') { this.value ='Your Username'; }" onfocus="if(this.value =='Your Username') { this.value = ''; }"> </li>
                                    <li> <input type="password" value="password" onblur="if(this.value == '') { this.value ='password'; }" onfocus="if(this.value =='password') { this.value = ''; }"> </li>
                                    <li> <a href="#" class="wm-forgot-btn">Forgot Password?</a> </li>
                                    <li> <input type="submit" value="Sign In"> </li>
                                </ul>
                            </form>
                            <span class="wm-color">or try our socials</span>
                            <ul class="wm-login-social-media">
                                <li><a href="#"><i class="wmicon-social5"></i> Facebook</a></li>
                                <li class="wm-twitter-color"><a href="#"><i class="wmicon-social4"></i> twitter</a></li>
                                <li class="wm-googleplus-color"><a href="#"><i class="fa fa-google-plus-square"></i> Google+</a></li>
                            </ul>
                            <p>Not a member yet? <a href="#">Sign-up Now!</a></p>
                        </div>
                        <div class="wm-modallogin-form wm-register-popup">
                            <span class="wm-color">create Your Account today</span>
                            <form>
                                <ul>
                                    <li> <input type="text" value="Your Username" onblur="if(this.value == '') { this.value ='Your Username'; }" onfocus="if(this.value =='Your Username') { this.value = ''; }"> </li>
                                    <li> <input type="text" value="Your E-mail" onblur="if(this.value == '') { this.value ='Your E-mail'; }" onfocus="if(this.value =='Your E-mail') { this.value = ''; }"> </li>
                                    <li> <input type="password" value="password" onblur="if(this.value == '') { this.value ='password'; }" onfocus="if(this.value =='password') { this.value = ''; }"> </li>
                                    <li> <input type="text" value="Confirm Password" onblur="if(this.value == '') { this.value ='Confirm Password'; }" onfocus="if(this.value =='Confirm Password') { this.value = ''; }"> </li>
                                    <li> <input type="submit" value="Create Account"> </li>
                                </ul>
                            </form>
                            <span class="wm-color">or signup with your socials:</span>
                            <ul class="wm-login-social-media">
                                <li><a href="#"><i class="wmicon-social5"></i> Facebook</a></li>
                                <li class="wm-twitter-color"><a href="#"><i class="wmicon-social4"></i> twitter</a></li>
                                <li class="wm-googleplus-color"><a href="#"><i class="fa fa-google-plus-square"></i> Google+</a></li>
                            </ul>
                            <p>Already a member? <a href="#">Sign-in Here!</a></p>
                        </div>

                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- ModalLogin Box -->

        <!-- ModalSearch Box -->
        <div class="modal fade" id="ModalSearch" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">

                        <div class="wm-modallogin-form">
                            <span class="wm-color">Search Your KeyWord</span>
                            <form>
                                <ul>
                                    <li> <input type="text" value="Keywords..." onblur="if(this.value == '') { this.value ='Keywords...'; }" onfocus="if(this.value =='Keywords...') { this.value = ''; }"> </li>
                                    <li> <input type="submit" value="Search"> </li>
                                </ul>
                            </form>
                        </div>

                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- ModalSearch Box -->

        <!-- jQuery (necessary for JavaScript plugins) -->
        <script type="text/javascript" src="{{ url( 'visitor/script/jquery.js')}}"></script>
        <script type="text/javascript" src="{{ url( 'visitor/script/modernizr.js')}}"></script>
        <script type="text/javascript" src="{{ url( 'visitor/script/bootstrap.min.js')}}"></script>
        <script type="text/javascript" src="{{ url( 'visitor/script/jquery.prettyphoto.js')}}"></script>
        <script type="text/javascript" src="{{ url( 'visitor/script/jquery.countdown.min.js')}}"></script>
        <script type="text/javascript" src="{{ url( 'visitor/script/fitvideo.js')}}"></script>
        <script type="text/javascript" src="{{ url( 'visitor/script/skills.js')}}"></script>
        <script type="text/javascript" src="{{ url( 'visitor/script/slick.slider.min.js')}}"></script>
        <script type="text/javascript" src="{{ url( 'visitor/script/waypoints-min.js')}}"></script>
        <script type="text/javascript" src="{{ url( 'visitor/build/mediaelement-and-player.min.js')}}"></script>
        <script type="text/javascript" src="{{ url( 'visitor/script/isotope.min.js')}}"></script>
        <script type="text/javascript" src="{{ url( 'visitor/script/jquery.nicescroll.min.js')}}"></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
        <script type="text/javascript" src="{{ url( 'visitor/script/functions.js')}}"></script>

    </body>

</html>
