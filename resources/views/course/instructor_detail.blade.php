@extends('layouts.base')

@section('title') Course Detail @endsection

@section('head_css')
    <style>
        .multipleSelection {
            width: 300px;
            background-color: #4e73df;
        }

        .selectBox {
            position: relative;
        }

        .selectBox select {
            width: 100%;
            font-weight: bold;
        }

        .overSelect {
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
        }

        #checkBoxes {
            display: none;
            border: 1px #4e73df solid;
            height: 180px;
            overflow-y: scroll;
        }

        #checkBoxes label {
            display: block;
            font-size: large;
            white-space: nowrap;
            padding: 8px;
        }

        #checkBoxes label:hover {
        // background-color: #4e73df;
            background-color: #60A3D9;
        }
    </style>
@endsection

@section('page')
    <div class="wm-mini-title">
        <h1>Instructor Dashboard</h1>
    </div>
    <div class="wm-breadcrumb">
        <ul>
            <li><a href="{{route('courses')}}">Home</a></li>

            <li><a href="#">Single Course</a></li>
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
                                    <a href="">
                                        <img src="@if($course->picture) {{ asset("storage/images/$course->picture") }} @else {{ url( 'visitor/extra-images/no-image.png' )}} @endif" alt="{{$course->title}}">
                                    </a>
                                </figure>
                            </div>

                            <div style="height: 12px;"></div>
                            <div style="height: 12px;"></div>
                        </div>

                        @if($errors->any())
                            @foreach($errors->all() as $error)
                                <p style="color: red">{{$error}}</p>
                            @endforeach
                        @endif


                        <div style="height: 12px;"></div>
                        <div style="height: 12px;"></div>


                            <p class="wm-text">{{$course->description}}</p>


                        <div class="row" style="height: 12px;"></div>
                        <div style="height: 12px;"></div>



                        <form class="form-control"
                              method="post"
                              action="{{ route('courseUpdate', $course->slug)}}"
                              enctype="multipart/form-data"
                              id="update_form">

                            @csrf
                            @method('PUT')

                            <div class="row row-cols-lg-auto gx-3 gy-2 align-items-center">
                                <div class="col-lg-4">
                                    <label for="new_course">Course Title</label>
                                    <input type="text" class="form-control" id="new_course" name="title" value="{{old('title', $course->title)}}" placeholder="Enter Title" required>
                                </div>

                                <div class="col-lg-4">
                                    <label for="new_duration">Duration</label>
                                    <input type="number" class="form-control" id="new_duration" name="duration" value="{{old('duration', $course->duration)}}" placeholder="Enter Duration" required>
                                </div>
                            </div>

                            <br>

                            <div class="col-lg-6">
                                <label for="new_description">Description</label>
                                <textarea class="form-control" id="new_description" rows="6" name="description" required>{{old('description', $course->description)}}</textarea>
                            </div>

                            <br>

                            <div class="form-group">
                                <label for="picture"> Image </label>

                                <div class="row">
                                    <div class="col-md-6">
                                        <img class="rounded mr-2" alt="{{$course->title}} picture" width="200" src="{{ asset("storage/images/$course->picture") }}" data-holder-rendered="true">
                                    </div>
                                </div>

                                <div style="height: 2px;"></div>
                                <div class="row" style="height: 12px;"></div>
                                <div style="height: 12px;"></div>

                                <input type="file" id="picture" name="picture" class="form-control" accept="image/*">
                            </div>

                            <br>

                            <div class="mb-3 row">
                                <label for="levels" class="col-md-0 col-form-label">Choose the level</label>
                                <div class="col-md-6">
                                    <select id="levels" class="form-select" name="level" required>
                                        @foreach($levels as $level)
                                            <option id="{{$level->id}}" value="{{$level->id}}" name="level" @if($course->level === $level->id) selected @endif>{{$level->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <br>

                            <div class="form-group multiple-form-group">
                                <div class="selectBox" onclick="showCheckboxes()">
                                    <label for="categories">Categories</label>
                                    <select id="categories" class="form-control" required>
                                        <option> Choose the Category(ies)*</option>
                                    </select>

                                    <div style="height: 2px;"></div>

                                    <div class="overSelect">

                                    </div>
                                </div>

                                <div id="checkBoxes">
                                    @foreach($categories as $category)
                                        <label for="{{$category->title}}">
                                            <input type="checkbox"
                                                   value="{{$category->id}}" id="{{$category->title}}"
                                                   name="category_list[{{$category->id}}]"
                                                   @if($course->categories->contains('id', $category->id)) checked @endif
                                            >
                                            {{$category->title}}
                                        </label>
                                    @endforeach
                                </div>
                            </div>

                            <br>

                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Update</button>

                                <a class="btn btn-secondary" href="{{route('courses')}}">Cancel</a>
                            </div>
                        </form>

                        <script>
                            var show = true;

                            function showCheckboxes() {
                                var checkboxes =
                                    document.getElementById("checkBoxes");

                                if (show)
                                {
                                    checkboxes.style.display = "block";
                                    show = false;
                                }
                                else
                                {
                                    checkboxes.style.display = "none";
                                    show = true;
                                }
                            }
                        </script>



                        <div style="height: 12px;"></div>
                        <div class="row" style="height: 12px;"></div>


                        @if(count($course->chapters) > 0)
                            <div class="wm-courses-info">
                                <div class="wm-title-full">
                                    <h2>What You’ll Study</h2>
                                </div>

                                <ul>
                                @foreach($course->chapters as $chapter)
                                    <li><a href="#" class="wmicon-lock"></a>{{$chapter->title}}</li>
                                @endforeach
                                </ul>
                            </div>
                        @else
                            <div class="wm-courses-info">
                                <div class="wm-title-full">
                                    <h2> No Chapters Added for this course </h2>
                                </div>
                            </div>

                        @endif

                    </div>

                    @if(count($course->chapters) > 0)
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
                    @endif

                </div>

            </div>
        </div>
    </div>
    <!--// Main Section \\-->

@endsection

