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
            <li><a href="{{route('courseVisitor')}}" style="color: white;">Home</a></li>

            <li><a href="{{route('courseDetailVisitor', $course->slug)}}" style="color: whitesmoke">{{$course->title}}</a></li>

            <li><a href="#" class="active">{{$my_chapter->title}}</a></li>
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

                        <div>
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

                        <div class="wm-widget-heading">
                            <h4> {{$course->title}} </h4>
                        </div>



                        <br> <br>


                        <ul>
                            @foreach($course->chapters as $chapter)
                                <li><a href="{{route('chapterDetail', [$course->slug, $chapter->slug])}}" @if($chapter->id === $my_chapter->id) class="active" style="color: darkblue;" @endif><i class=" wmicon-book2"></i>{{$chapter->title}}</a></li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="widget widget_professor-info">
                        <div class="wm-widget-title">
                            <h2>About Professor</h2>
                        </div>
                        <figure>
                            <a href="#"><img src="{{ url( 'visitor/extra-images/user-profile.png' ) }}" alt=""></a>
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
                            <a href="#">
                                <img alt="" src="{{ url( 'visitor/extra-images/widget-add.jpg' ) }}">
                            </a>
                        </figure>
                    </div>

                </aside>
                <div class="col-md-9">
                    <div class="wm-blog-single wm-courses">
                        <figure class="wm-detail-thumb">
                            <img src="{{ url( 'visitor/extra-images/our-courses1.jpg' ) }}" alt="">
                        </figure>
                        <div class="wm-blog-author wm-ourcourses">
                            <div class="wm-blogauthor-left">
                                <img src="{{ url( 'visitor/extra-images/user-profile.png' ) }}" alt="">
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
                            <a class="wm-previous-icon" href="#"><i class="fa fa-angle-left" ></i>previous Chapter</a>
                            <a class="wm-Next-icon" href="#">Next Chapter<i class="fa fa-angle-right" ></i></a>
                        </div>
                    </div>
                    <div class="wm-our-course-detail">
                        <div class="col-md-4">
                            <div style="height: 12px;"></div>
                            <div style="height: 12px;"></div>
                        </div>


                        <div class="row" style="height: 12px;"></div>
                        <div style="height: 12px;"></div>

                        <div class="wm-title-full">
                            <h2>{{$my_chapter->title}}</h2>
                        </div>


                        @if($my_chapter->video)
                        <div class="col-md-4">

                            <div class="card">
                                <div class="card-body">

                                    <!-- 16:9 aspect ratio -->
                                    <div class="ratio ratio-16x9">
                                        <iframe src="{{ asset("storage/videos/$my_chapter->video") }}" title="{{$my_chapter->title}}" allowfullscreen></iframe>
                                    </div>

                                </div>
                            </div>

                            <div style="height: 12px;"></div>
                            <div style="height: 12px;"></div>
                        </div>
                        @endif


                        @if($my_chapter->video_url)
                            <div class="col-md-4">

                                <div class="card">
                                    <div class="card-body">

                                        <!-- 16:9 aspect ratio -->
                                        <div class="ratio ratio-16x9">
                                            <iframe src="{{$my_chapter->video_url}}" title="{{$my_chapter->title}}" allowfullscreen></iframe>
                                        </div>

                                    </div>
                                </div>

                                <div style="height: 12px;"></div>
                                <div style="height: 12px;"></div>
                            </div>
                        @endif


                        @foreach(explode('/\r\n|\n|\r/', $my_chapter->content) as $paragraph)
                            <p class="wm-text">{{$paragraph}}</p>
                        @endforeach



                        <div class="row" style="height: 12px;"></div>
                        <div style="height: 12px;"></div>
                        <div style="height: 12px;"></div>
                        <div class="row" style="height: 12px;"></div>

                    </div>
                    <div class="wm-courses-getting-started">
                        <div class="wm-title-full">
                            <h2></h2>
                        </div>
                    </div>

                    <div class="wm-form">

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--// Main Section \\-->

@endsection
