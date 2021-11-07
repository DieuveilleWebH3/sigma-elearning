@extends('layouts.base_visitor')

@section('title') Detail @endsection

@section('head_css')
@endsection

@section('page')
    <div class="wm-mini-title">
        <h1>Course Detail</h1>
    </div>
    <div class="wm-breadcrumb">
        <ul>
            <li><a href="{{route('courseVisitor')}}">Home</a></li>

            <li><a href="#">Single Course</a></li>

            <!--
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
                    <div class="widget widget_course-price">
                        <div class="wm-widget-heading">
                            <h4>Course Price</h4>
                        </div>
                        <span><small> <del>$59.00</del> </small>${{$course->price}}</span>
                        <a href="#">enroll this course</a>
                        <ul>
                            <li><a href="#"><i class=" wmicon-social7"></i>234 Students</a></li>
                            <li><a href="#"><i class=" wmicon-clock2"></i><time datetime="2017-02-14">Duration: {{$course->duration}} H</time></a></li>
                            <li><a href="#"><i class=" wmicon-book2"></i>{{$course->countChapters()}} Chapters</a></li>
                            <li><a href="#"><i class=" wmicon-location"></i>Campus L2</a></li>
                            <li>
                                <a href="#">
                                    <div class="wm-levelrating">
                                        <span class="rating-box" style="width:calc({{$course->getLevelId()}}*30%)"></span>
                                    </div>
                                    {{$course->getLevelName()}}
                                </a>
                            </li>
                            <li><a href="#"><i class=" wmicon-technology"></i>English Language</a></li>
                        </ul>
                    </div>

                    <div class="widget widget_categories">
                        <div class="wm-widget-title">
                            <h2>Categories</h2>
                        </div>
                        <ul>
                            <li><a href="#">Chemistry</a></li>
                            <li><a href="#">Classical Archaeology </a></li>
                            <li><a href="#">Classics & English</a></li>
                            <li><a href="#">Materials Science</a></li>
                            <li><a href="#">Mathematics</a></li>
                            <li><a href="#">Physics & Philosophy</a></li>
                            <li><a href="#">Theology & Religion</a></li>
                            <li><a href="#">Law</a></li>
                            <li><a href="#">Chemistry</a></li>
                            <li><a href="#">Classical Archaeology </a></li>
                            <li><a href="#">Classics & English</a></li>
                            <li><a href="#">Materials Science</a></li>
                            <li><a href="#">Mathematics</a></li>
                            <li><a href="#">Physics & Philosophy</a></li>
                            <li><a href="#">Theology & Religion</a></li>
                            <li><a href="#">Law</a></li>
                        </ul>
                    </div>
                    <div class="widget widget_archive">
                        <div class="wm-widget-title">
                            <h2>Archive</h2>
                        </div>
                        <div class="wm-select-two">
                            <select>
                                <option>Select Month</option>
                                <option>Select Month1</option>
                                <option>Select Month2</option>
                                <option>Select Month3</option>
                            </select>
                        </div>
                    </div>
                    <div class="widget widget_professor-info">
                        <div class="wm-widget-title">
                            <h2>About Professor</h2>
                        </div>
                        <figure>
                            <a href="#"><img src="extra-images/our-courses-author.jpg" alt=""></a>
                        </figure>
                        <div class="wm-Professor-info">
                            <h6><a href="#">{{$course->getCourseAuthor()}}</a></h6>
                            <span>15 yrs. experience</span>
                        </div>
                        <p>{{$course->getCourseAuthor()}} accompanied Dr. Stephen Harnish to SC12, an international supercomputing conference in Salt Lake City, Utah. At the conference.</p>
                        <a class="wm-read-more" href="#">Read More</a>
                    </div>

                    <div class="widget widget_tags">
                        <div class="wm-widget-title">
                            <h2>Categories</h2>
                        </div>
                        <div class="tags">
                            @foreach($course->categories as $category)
                            <a href="#">{{$category->title}}</a>
                            @endforeach
                        </div>
                    </div>
                    <div class="widget widget_add">
                        <figure>
                            <a href="blog-detail.html">
                                <img alt="" src="extra-images/widget-add.jpg">
                            </a>
                        </figure>
                    </div>

                </aside>
                <div class="col-md-9">
                    <div class="wm-blog-single wm-courses">
                        <figure class="wm-detail-thumb">
                            <img src="extra-images/our-courses1.jpg" alt="">
                        </figure>
                        <div class="wm-blog-author wm-ourcourses">
                            <div class="wm-blogauthor-left">
                                <img src="extra-images/our-courses-author.jpg" alt="">
                                <a class="wm-authorpost" href="#">{{$course->getCourseAuthor()}}</a>
                            </div>
                            <div class="wm-our-courses">
                                <ul>
                                    <li>
                                        <a href="#"><i class="wmicon-tool2"></i>328 Viewers</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="wmicon-diploma"></i>Certificate: No</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="wmicon-symbol"></i>Assesments: Yes</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="wm-courses-reviewes">
                        <div class="wm-ourcourses-left">
                            <h6>Reviews</h6>
                            <div class="wm-rating">
                                <span class="rating-box" style="width:100%"></span>
                            </div>
                            <a href="#">3 Reviews</a>
                        </div>
                        <div class="wm-ourcourses-right">
                            <a class="wm-previous-icon" href="#"><i class="fa fa-angle-left" ></i>previous Course</a>
                            <a class="wm-Next-icon" href="#">Next Course<i class="fa fa-angle-right" ></i></a>
                        </div>
                    </div>
                    <div class="wm-our-course-detail">
                        <div class="col-md-4">
                            <div>
                                <figure>
                                    <a href="{{route('courseDetailVisitor', $course->slug)}}">
                                        <img @if($course->picture) src="{{ asset("storage/images/$course->picture") }}" @else src="{{ url( 'visitor/extra-images/papular-courses-3.jpg' )}}" @endif alt="{{$course->title}}">
                                    </a>
                                </figure>
                            </div>

                            <div style="height: 12px;"></div>
                            <div style="height: 12px;"></div>
                        </div>


                        <div class="row" style="height: 12px;"></div>
                        <div style="height: 12px;"></div>

                        <div class="wm-title-full">
                            <h2>{{$course->title}}</h2>
                        </div>
                        <p class="wm-text">{{$course->description}}</p>


                        <div class="row" style="height: 12px;"></div>
                        <div style="height: 12px;"></div>
                        <div style="height: 12px;"></div>
                        <div class="row" style="height: 12px;"></div>


                        <div class="wm-courses-info">
                            <div class="wm-title-full">
                                <h2>What You’ll Study</h2>
                            </div>
                            <ul>
                                @if(count($course->chapters) > 0)
                                    @foreach($course->chapters as $chapter)
                                    <li><a href="#" class="wmicon-lock"></a>{{$chapter->title}}</li>
                                    @endforeach
                                @else
                                    <li><a class="wmicon-lock"></a> No Chapters has been added yet </li>
                                @endif
                            </ul>
                        </div>

                    </div>
                    <div class="wm-courses-getting-started">
                        <div class="wm-title-full">
                            <h2>Getting Started</h2>
                        </div>

                        @foreach($course->chapters as $chapter)
                        <div class="wm-courses-started">
                            <span>Lesson {{ $loop->iteration }}: {{$chapter->title}}</span>
                            <ul class="wm-courses-started-listing">
                                <li>
                                    <a href="#" class="wmicon-pen"></a>
                                    <div class="wm-courses-started-text">
                                        <h6><a href="#">{{$chapter->title}}</a></h6>
                                    </div>
                                    <div class="wm-courses-preview">
                                        <a href="#">Preview</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        @endforeach

                    </div>

                    <div class="wm-form">
                        <div class="wm-widgettitle">
                            <h2>Leave <span>Your Review</span></h2>
                        </div>
                        <form>
                            <ul>
                                <li><input type="text" value="Your Name" onblur="if(this.value == '') { this.value ='Your Name'; }" onfocus="if(this.value =='Your Name') { this.value = ''; }"></li>
                                <li>
                                    <div class="wm-select-two">
                                        <select>
                                            <option>1 Star Review</option>
                                            <option>1 Star Review1</option>
                                            <option>1 Star Review2</option>
                                            <option>1 Star Review3</option>
                                        </select>
                                    </div>
                                </li>
                                <li class="wm-full-form">
                                    <textarea placeholder="Your Comment" ></textarea>
                                </li>
                                <li class="wm-full-form">
                                    <input type="submit" value="Submit now">
                                </li>
                            </ul>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--// Main Section \\-->

@endsection
