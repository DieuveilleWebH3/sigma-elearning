@extends('layouts.base_instructor')

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
                                <h6>{{ucfirst(\Illuminate\Support\Facades\Auth::user()->firstname)}} {{ucfirst(\Illuminate\Support\Facades\Auth::user()->lastname)}}</h6>
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
                                    <a>
                                        <i class="wmicon-arrow"></i>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button type="submit">Logout</button>
                                        </form>
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

                            @foreach($courses as $course)
                                <li class="col-md-12">
                                    <div class="wm-courses-popular-wrap">
                                        <figure> <a href="{{route('courseShowUpdate', $course->slug)}}"><img @if($course->picture) src="{{ asset("storage/images/$course->picture") }}" @else src="{{ url( 'visitor/extra-images/papular-courses-3.jpg' )}}" @endif  alt="{{$course->title}}"> <span class="wm-popular-hover"> <small>see course</small> </span> </a>
                                            <figcaption>
                                                <img src="extra-images/papular-courses-thumb-1.jpg" alt="">
                                                <h6><a href="{{route('courseShowUpdate', $course->slug)}}">{{$course->getcourseAuthor()}}</a></h6>
                                            </figcaption>
                                        </figure>
                                        <div class="wm-popular-courses-text">
                                            <h6><a href="{{route('courseShowUpdate', $course->slug)}}">{{$course->title}}</a></h6>
                                            <p>{{$course->description}}</p>
                                            <div class="wm-courses-price"> <span>${{$course->price}}</span> </div>
                                            <ul>
                                                <li><a href="#" class="wm-color"><i class="wmicon-social7"></i> 342</a></li>
                                                <li><a href="#" class="wm-color"><i class="wmicon-clock2"></i>{{$course->duration}}</a></li>
                                                <li><a href="#" class="wm-color"><i class="wmicon-location"></i> Campus L2</a></li>
                                                <li><div class="wm-rating"><span style="width:calc({{$course->getLevelId()}}*30%);" class="rating-box"></span></div> {{$course->getLevelName()}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            @endforeach

                        </ul>
                    </div>


                    <div class="wm-pagination">
                        <ul>
                            {!! $courses->links() !!}
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--// Main Section \\-->

@endsection

