@extends('layouts.base_visitor')

@section('title') Courses @endsection

@section('head_css')
@endsection

@section('page')
    <div class="wm-mini-title">
        <h1>Dashboard</h1>
    </div>
    <div class="wm-breadcrumb">
        <ul>
            <li><a href="#">Home</a></li>
            <!--
            <li><a href="#">Courses</a></li>
            <li></li>
            -->
        </ul>
    </div>

@endsection

@section('content')

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
                                            <h6><a href="#">{{$course->getCourseAuthor()}}</a></h6>
                                        </figcaption>
                                    </figure>
                                    <div class="wm-popular-courses-text">
                                        <h6><a href="#">{{$course->title}}</a></h6>
                                        <div class="wm-courses-price"> <span>${{$course->price}}</span> </div>
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

@endsection

