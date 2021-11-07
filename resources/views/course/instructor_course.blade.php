@extends('layouts.base_visitor')

@section('title') Courses @endsection

@section('head_css')
@endsection

@section('page')
    <div class="wm-mini-title">
        <h1>Instructor Dashboard</h1>
    </div>
    <div class="wm-breadcrumb">
        <ul>
            <li><a href="#">Home</a></li>
        </ul>
    </div>
@endsection

@section('content')

    <!--// Main Section \\-->
    <div class="wm-main-section">
        <div class="container">
            <div class="row">

                <aside class="col-md-4">
                    <div class="wm-student-dashboard-nav">
                        <div class="wm-student-nav">
                            <figure>
                                <a href="#"><img src="extra-images/students-setting-1.jpg" alt=""></a>
                            </figure>
                            <div class="wm-student-nav-text">
                                <h6>Kevin Nickols</h6>
                                <a href="#">update image</a>
                            </div>
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="wmicon-avatar"></i>
                                        Profile Details
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="#">
                                        <i class="wmicon-book"></i>
                                        My Courses
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="wmicon-favorite"></i>
                                        Favorites
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="wmicon-paper"></i>
                                        Statement
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="wmicon-three"></i>
                                        Settings
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="wmicon-arrow"></i>
                                        Logout
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </aside>



                <div class="col-md-8">
                    <div class="wm-plane-title"> <h2>My Courses</h2> </div>
                    <div class="wm-courses wm-courses-popular wm-courses-mediumsec">
                        <ul class="row">
                            <li class="col-md-12">
                                <div class="wm-courses-popular-wrap">
                                    <figure> <a href="#"><img src="extra-images/papular-courses-1.jpg" alt=""> <span class="wm-popular-hover"> <small>see course</small> </span> </a>
                                        <figcaption>
                                            <img src="extra-images/papular-courses-thumb-1.jpg" alt="">
                                            <h6><a href="#">Shelly T. Forrester</a></h6>
                                        </figcaption>
                                    </figure>
                                    <div class="wm-popular-courses-text">
                                        <h6><a href="#">Advanced Architectural Research</a></h6>
                                        <p>The course combines study of the history, archaeology and art of all these classical world. It looks at the societies and cultures of the ancient Greek.</p>
                                        <div class="wm-courses-price"> <span>$32</span> </div>
                                        <ul>
                                            <li><a href="#" class="wm-color"><i class="wmicon-social7"></i> 342</a></li>
                                            <li><a href="#" class="wm-color"><i class="wmicon-clock2"></i> 1hr 30</a></li>
                                            <li><a href="#" class="wm-color"><i class="wmicon-location"></i> Campus L2</a></li>
                                            <li><div class="wm-rating"><span style="width:70%" class="rating-box"></span></div> Intermediate</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="col-md-12">
                                <div class="wm-courses-popular-wrap">
                                    <figure> <a href="#"><img src="extra-images/papular-courses-2.jpg" alt=""> <span class="wm-popular-hover"> <small>see course</small> </span> </a>
                                        <figcaption>
                                            <img src="extra-images/papular-courses-thumb-2.jpg" alt="">
                                            <h6><a href="#">Sam K. Harrington</a></h6>
                                        </figcaption>
                                    </figure>
                                    <div class="wm-popular-courses-text">
                                        <h6><a href="#">Advanced Landscape & Urbanism</a></h6>
                                        <p>Fine Art is the making and study of visual art. It educates and prepares students to become artists and to follow other practices that are aligned to the making of art.</p>
                                        <div class="wm-courses-price"> <span>Free</span> </div>
                                        <ul>
                                            <li><a href="#" class="wm-color"><i class="wmicon-social7"></i> 438</a></li>
                                            <li><a href="#" class="wm-color"><i class="wmicon-clock2"></i> 1hr 15</a></li>
                                            <li><a href="#" class="wm-color"><i class="wmicon-location"></i> Campus L2</a></li>
                                            <li><div class="wm-rating"><span style="width:100%" class="rating-box"></span></div> Advanced</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="col-md-12">
                                <div class="wm-courses-popular-wrap">
                                    <figure> <a href="#"><img src="extra-images/papular-courses-3.jpg" alt=""> <span class="wm-popular-hover"> <small>see course</small> </span> </a>
                                        <figcaption>
                                            <img src="extra-images/papular-courses-thumb-3.jpg" alt="">
                                            <h6><a href="#">Sara A. Shirley</a></h6>
                                        </figcaption>
                                    </figure>
                                    <div class="wm-popular-courses-text">
                                        <h6><a href="#">Transdisciplinary Design</a></h6>
                                        <p>The Ruskin School of Art offers a three-year studio-based BFA course in which students work alongside each other in collaboratively organised studios.</p>
                                        <div class="wm-courses-price"> <span>$79</span> </div>
                                        <ul>
                                            <li><a href="#" class="wm-color"><i class="wmicon-social7"></i> 309</a></li>
                                            <li><a href="#" class="wm-color"><i class="wmicon-clock2"></i> 2hr 00</a></li>
                                            <li><a href="#" class="wm-color"><i class="wmicon-location"></i> Campus L3</a></li>
                                            <li><div class="wm-rating"><span style="width:25%" class="rating-box"></span></div> Introductory</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="col-md-12">
                                <div class="wm-courses-popular-wrap">
                                    <figure> <a href="#"><img src="extra-images/papular-courses-5.jpg" alt=""> <span class="wm-popular-hover"> <small>see course</small> </span> </a>
                                        <figcaption>
                                            <img src="extra-images/papular-courses-thumb-4.jpg" alt="">
                                            <h6><a href="#">Julius M. Lepage</a></h6>
                                        </figcaption>
                                    </figure>
                                    <div class="wm-popular-courses-text">
                                        <h6><a href="#">Economics & Quality Management</a></h6>
                                        <p>Whereas many fine art courses run in an environment devoted exclusively to art and design, Ruskin students, as members of a collegiate university, have the advantage of.</p>
                                        <div class="wm-courses-price"> <span>$50</span> </div>
                                        <ul>
                                            <li><a href="#" class="wm-color"><i class="wmicon-social7"></i> 298</a></li>
                                            <li><a href="#" class="wm-color"><i class="wmicon-clock2"></i> 1hr 45</a></li>
                                            <li><a href="#" class="wm-color"><i class="wmicon-location"></i> Campus L3</a></li>
                                            <li><div class="wm-rating"><span style="width:100%" class="rating-box"></span></div> Intermediate</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="col-md-12">
                                <div class="wm-courses-popular-wrap">
                                    <figure> <a href="#"><img src="extra-images/papular-courses-6.jpg" alt=""> <span class="wm-popular-hover"> <small>see course</small> </span> </a>
                                        <figcaption>
                                            <img src="extra-images/papular-courses-thumb-5.jpg" alt="">
                                            <h6><a href="#">Kayla A. McCrea</a></h6>
                                        </figcaption>
                                    </figure>
                                    <div class="wm-popular-courses-text">
                                        <h6><a href="#">Philosophy, Politics and Economics (PPE)</a></h6>
                                        <p>Jack Stanton, who graduated in 2013 and now works as a professional artist, recalls: ‘I think the most important element of the Ruskin is the seriousness with which your.</p>
                                        <div class="wm-courses-price"> <span>$99</span> </div>
                                        <ul>
                                            <li><a href="#" class="wm-color"><i class="wmicon-social7"></i> 222</a></li>
                                            <li><a href="#" class="wm-color"><i class="wmicon-clock2"></i> 1hr 15</a></li>
                                            <li><a href="#" class="wm-color"><i class="wmicon-location"></i> Campus L3</a></li>
                                            <li><div class="wm-rating"><span style="width:70%" class="rating-box"></span></div> Intermediate</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="col-md-12">
                                <div class="wm-courses-popular-wrap">
                                    <figure> <a href="#"><img src="extra-images/papular-courses-7.jpg" alt=""> <span class="wm-popular-hover"> <small>see course</small> </span> </a>
                                        <figcaption>
                                            <img src="extra-images/papular-courses-thumb-6.jpg" alt="">
                                            <h6><a href="#">Allan L. Oakes</a></h6>
                                        </figcaption>
                                    </figure>
                                    <div class="wm-popular-courses-text">
                                        <h6><a href="#">Modern Languages and Linguistics</a></h6>
                                        <p>The first year of the course is structured to introduce students to each other, to the resources of the school and to the staff involved in teaching and running the Ruskin.</p>
                                        <div class="wm-courses-price"> <span>$49</span> </div>
                                        <ul>
                                            <li><a href="#" class="wm-color"><i class="wmicon-social7"></i> 248</a></li>
                                            <li><a href="#" class="wm-color"><i class="wmicon-clock2"></i> 1hr 15</a></li>
                                            <li><a href="#" class="wm-color"><i class="wmicon-location"></i> Campus L2</a></li>
                                            <li><div class="wm-rating"><span style="width:70%" class="rating-box"></span></div> Advanced</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="col-md-12">
                                <div class="wm-courses-popular-wrap">
                                    <figure> <a href="#"><img src="extra-images/papular-courses-8.jpg" alt=""> <span class="wm-popular-hover"> <small>see course</small> </span> </a>
                                        <figcaption>
                                            <img src="extra-images/papular-courses-thumb-7.jpg" alt="">
                                            <h6><a href="#">Virginia R. Cruz</a></h6>
                                        </figcaption>
                                    </figure>
                                    <div class="wm-popular-courses-text">
                                        <h6><a href="#">History (Ancient and Modern)</a></h6>
                                        <p>The intimate working environment of the school, arranged in two buildings, allows art history, theory and criticism to be treated as integral to the development of studio work. </p>
                                        <div class="wm-courses-price"> <span>$79</span> </div>
                                        <ul>
                                            <li><a href="#" class="wm-color"><i class="wmicon-social7"></i> 188</a></li>
                                            <li><a href="#" class="wm-color"><i class="wmicon-clock2"></i> 1hr 15</a></li>
                                            <li><a href="#" class="wm-color"><i class="wmicon-location"></i> Campus L2</a></li>
                                            <li><div class="wm-rating"><span style="width:80%" class="rating-box"></span></div> Intermediate</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="col-md-12">
                                <div class="wm-courses-popular-wrap">
                                    <figure> <a href="#"><img src="extra-images/papular-courses-9.jpg" alt=""> <span class="wm-popular-hover"> <small>see course</small> </span> </a>
                                        <figcaption>
                                            <img src="extra-images/papular-courses-thumb-8.jpg" alt="">
                                            <h6><a href="#">Roslyn W. Beavers</a></h6>
                                        </figcaption>
                                    </figure>
                                    <div class="wm-popular-courses-text">
                                        <h6><a href="#">Classical Archaeology & Ancient History</a></h6>
                                        <p>After graduation, most students go on to work in fine art as practising artists, teachers and art writers, or as curators in public and private galleries and for arts councils.</p>
                                        <div class="wm-courses-price"> <span>$89</span> </div>
                                        <ul>
                                            <li><a href="#" class="wm-color"><i class="wmicon-social7"></i> 176</a></li>
                                            <li><a href="#" class="wm-color"><i class="wmicon-clock2"></i> 1hr 15</a></li>
                                            <li><a href="#" class="wm-color"><i class="wmicon-location"></i> Campus L2</a></li>
                                            <li><div class="wm-rating"><span style="width:100%" class="rating-box"></span></div> Advanced</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--// Main Section \\-->

@endsection

