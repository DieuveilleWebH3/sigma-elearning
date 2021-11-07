<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Courses Grid</title>

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
                                                <a href="#">Home</a>
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
                            <div class="wm-mini-title">
                                <h1>Our Courses</h1>
                            </div>
                            <div class="wm-breadcrumb">
                                <ul>
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Courses</a></li>
                                    <li>Grid</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Mini Header \\-->

            <!--// Main Content \\-->
            <div class="wm-main-content">

                <!--// Main Section \\-->
                <div class="wm-main-section">
                    <div class="container">
                        <div class="row">

                            <aside class="col-md-3">
                                <div class="widget wm-search-course">
                                    <h3 class="wm-short-title wm-color">Find Your Course</h3>
                                    <p>Find your course here:</p>
                                    <form>
                                        <ul>
                                            <li>
                                                <div class="wm-radio">
                                                    <div class="wm-radio-partition">
                                                        <input id="male" type="radio" name="gender" value="male">
                                                        <label for="male">by ID</label>
                                                    </div>
                                                    <div class="wm-radio-partition">
                                                        <input id="female" type="radio" name="gender" value="female">
                                                        <label for="female">by name</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li> <input type="text" value="Course Name" onblur="if(this.value == '') { this.value ='Course Name'; }" onfocus="if(this.value =='Course Name') { this.value = ''; }"> <i class="wmicon-search"></i> </li>
                                            <li>
                                                <div class="wm-apply-select">
                                                    <select>
                                                        <option>Category</option>
                                                        @foreach($categories as $category)
                                                            <option>{{$category->title}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </li>
                                            <li> <input type="submit" value="Search course"> </li>
                                        </ul>
                                    </form>
                                </div>
                                <div class="widget widget_check-box widget_scroll-box">
                                    <h5>Search By Type</h5>
                                    <ul>
                                        <li>
                                            <input id="type1" type="checkbox">
                                            <label for="type1">
                                                <span></span>
                                                All Courses
                                            </label>
                                        </li>
                                        <li>
                                            <input id="type2" type="checkbox">
                                            <label for="type2">
                                                <span></span>
                                                Chemistry
                                            </label>
                                        </li>
                                        <li>
                                            <input id="type3" type="checkbox">
                                            <label for="type3">
                                                <span></span>
                                                Classical Archaeology
                                            </label>
                                        </li>
                                        <li>
                                            <input id="type4" type="checkbox">
                                            <label for="type4">
                                                <span></span>
                                                Classics & English
                                            </label>
                                        </li>
                                        <li>
                                            <input id="type9" type="checkbox">
                                            <label for="type9">
                                                <span></span>
                                                Classics & English
                                            </label>
                                        </li>
                                        <li>
                                            <input id="type10" type="checkbox">
                                            <label for="type10">
                                                <span></span>
                                                Materials Science

                                            </label>
                                        </li>
                                        <li>
                                            <input id="type11" type="checkbox">
                                            <label for="type11">
                                                <span></span>
                                                Mathematics
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="widget widget_check-box">
                                    <h5>Search By Price</h5>
                                    <div class="wm-range-slider">
                                        <div id="slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                            <div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 0%; width: 60%;"></div>
                                            <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 0%;"></span>
                                            <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 60%;"></span>
                                        </div>
                                        <form>
                                            <input id="amount" type="text" readonly="" value="$59">
                                            <input type="submit" value="Clear Filters">
                                        </form>
                                    </div>
                                </div>
                                <div class="widget widget_check-box">
                                    <h5>Search By Availability</h5>
                                    <ul>
                                        <li>
                                            <input id="avail1" type="checkbox">
                                            <label for="avail1">
                                                <span></span>
                                                Current
                                            </label>
                                        </li>
                                        <li>
                                            <input id="avail2" type="checkbox">
                                            <label for="avail2">
                                                <span></span>
                                                Upcoming
                                            </label>
                                        </li>
                                        <li>
                                            <input id="avail3" type="checkbox">
                                            <label for="avail3">
                                                <span></span>
                                                Self-Placed
                                            </label>
                                        </li>
                                        <li>
                                            <input id="avail4" type="checkbox">
                                            <label for="avail4">
                                                <span></span>
                                                Arhived
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="widget widget_check-box">
                                    <h5>Search By Level</h5>
                                    <ul>
                                        @foreach($levels as $level)
                                            <li>
                                                <div class="wm-level-checkbox">
                                                    <input id="{{$level->id}}" name="{{$level->name}}" type="checkbox">
                                                    <label for="{{$level->id}}">
                                                        <span></span>
                                                        {{$level->name}}
                                                    </label>
                                                </div>
                                                <div class="wm-levelrating">
                                                    <span class="rating-box" style="width:calc({{$level->id}}*30%);"></span>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>

                                <div class="widget widget_check-box">
                                    <h5>Search By Duration</h5>
                                    <ul>
                                        <li>
                                            <input id="duration1" type="checkbox">
                                            <label for="duration1">
                                                <span></span>
                                                Under 1 hr
                                            </label>
                                        </li>
                                        <li>
                                            <input id="duration2" type="checkbox">
                                            <label for="duration2">
                                                <span></span>
                                                1hr - 1hr 30mins
                                            </label>
                                        </li>
                                        <li>
                                            <input id="duration3" type="checkbox">
                                            <label for="duration3">
                                                <span></span>
                                                2 hrs
                                            </label>
                                        </li>
                                        <li>
                                            <input id="duration4" type="checkbox">
                                            <label for="duration4">
                                                <span></span>
                                                2 hrs - 3hrs
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </aside>

                            <div class="col-md-9">
                                <div class="wm-filter-box">
                                    <div class="wm-apply-select">
                                        <select>
                                            <option>By Category</option>
                                            <option>By Category</option>
                                            <option>By Category</option>
                                            <option>By Category</option>
                                        </select>
                                    </div>
                                    <div class="wm-apply-select">
                                        <select>
                                            <option>Search By</option>
                                            <option>Search By</option>
                                            <option>Search By</option>
                                            <option>Search By</option>
                                        </select>
                                    </div>
                                    <div class="wm-normal-btn">
                                        <a href="#" class="active">Free</a>
                                        <a href="#">Paid</a>
                                    </div>
                                    <div class="wm-view-btn">
                                        <a href="#" class="wmicon-squares active"></a>
                                        <a href="#" class="wmicon-signs"></a>
                                    </div>
                                </div>

                                <div class="wm-courses wm-courses-popular">
                                    <ul class="row">

                                        @foreach($courses as $course)

                                        <li class="col-md-4">
                                            <div class="wm-courses-popular-wrap">
                                                <figure> <a href="#"><img src="{{ url( 'visitor/extra-images/papular-courses-1.jpg' )}}" alt=""> <span class="wm-popular-hover"> <small>see course</small> </span> </a>
                                                    <figcaption>
                                                        <img src="{{ url( 'visitor/extra-images/papular-courses-thumb-1.jpg' )}}" alt="">
                                                        <h6><a href="#">Shelly T. Forrester</a></h6>
                                                    </figcaption>
                                                </figure>
                                                <div class="wm-popular-courses-text">
                                                    <h6><a href="#">{{$course->title}}</a></h6>
                                                    <div class="wm-courses-price"> <span>$32</span> </div>
                                                    <ul>
                                                        <li><a href="#" class="wm-color"><i class="wmicon-social7"></i> 342</a></li>
                                                        <li><a href="#" class="wm-color"><i class="wmicon-social6"></i> 10</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>

                                        @endforeach

                                    </ul>
                                </div>
                                <div class="wm-pagination">
                                    <ul>
                                        <li><a href="#" aria-label="Previous"> <i class="wmicon-arrows4"></i> Previous</a></li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li>...</li>
                                        <li><a href="#">18</a></li>
                                        <li><a href="#" aria-label="Next"> <i class="wmicon-arrows4"></i> Next</a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!--// Main Section \\-->

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
                                    <input type="text" value="Enter your e-mail address" onblur="if(this.value == '') { this.value ='Enter your e-mail address'; }" onfocus="if(this.value =='Enter your e-mail address') { this.value = ''; }">
                                    <input type="submit" value="Subscribe to our newsletter">
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
                            <div class="col-md-6"> <span><i class="wmicon-nature"></i> Barcelona, Spain 2°F / -17°C</span> </div>
                            <div class="col-md-6"> <p><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p> </div>
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
