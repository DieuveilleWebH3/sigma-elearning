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

@section('content')

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0">Courses Explorer</h4>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    @if($errors->any())
                        @foreach($errors->all() as $error)
                            <div style="text-align: center;" class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{$error}}

                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endforeach
                    @endif

                    <div class="mb-3 row">
                        <a onclick="myFunction()">
                            <label class="card-title col-md-0 col-form-label">
                                Add a chapter
                                <i class="fas fa-plus-circle" style="color: blue;"></i>
                            </label>
                        </a>
                    </div>

                    <form class="form-control"
                          method="post"
                          action="{{ route('chapterStore', $course->slug)}}"
                          enctype="multipart/form-data"
                          style="display: none;"
                          id="create_form">

                        @csrf

                        <div class="row row-cols-lg-auto gx-3 gy-2 align-items-center">
                            <div class="col-lg-4">
                                <label for="new_chapter">Chapter Title</label>
                                <input type="text" class="form-control" id="new_chapter" name="title" value="{{old('title')}}" placeholder="Enter Title" required>
                            </div>
                        </div>

                        <br>

                        <div class="col-lg-8">
                            <label for="new_content">Content</label>
                            <textarea class="form-control" id="new_content" rows="8" name="content" required>{{old('content')}}</textarea>
                        </div>

                        <br>

                        <div class="form-group">
                            <label for="video"> Video </label>
                            <input type="file" id="video" name="video" class="form-control" accept="video/*">
                        </div>

                        <div class="form-group">
                            <label for="video_url"> Video Url </label>
                            <input type="text" id="video_url" name="video_url" value="{{old('video_url')}}" placeholder="Enter video url" class="form-control">
                        </div>

                        <br>

                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>


                    <div class="row" style="height: 12px;"></div>
                    <div class="row" style="height: 12px;"></div>

                    <div class="form-group">
                        <label for="course_picture"> Course Image </label>

                        <div class="row">
                            <div class="col-md-6">
                                <img id="course_picture" class="rounded mr-2" alt="{{$course->title}} picture" width="200" src="{{ asset("storage/images/$course->picture") }}" data-holder-rendered="true">
                            </div>
                        </div>
                    </div>

                    <br>

                    <div class="row row-cols-lg-auto gx-3 gy-2 align-items-center">

                        <div class="col-lg-4">
                            <label for="course_title">Course Title</label>
                            <input type="text" class="form-control" id="course_title" name="title" value="{{$course->title}}" readonly>
                        </div>

                        <div class="col-lg-3">
                            <label for="course_duration">Duration</label>
                            <input type="number" class="form-control" id="course_duration" name="duration" value="{{$course->duration}}" readonly>
                        </div>

                        <div class="col-lg-3">
                            <label for="course_price">Price</label>
                            <input type="number" class="form-control" id="course_price" name="price" step=".01" value="{{$course->price}}" readonly>
                        </div>

                        <div class="col-lg-3">
                            <label for="course_level">Level</label>
                            <input type="text" class="form-control" id="course_level" name="level" value="{{$course->getLevelName()}}" readonly>
                        </div>
                    </div>

                    <br>

                    <div class="col-lg-6">
                        <label for="course_categories">Category(ies)</label>
                        <input type="text" class="form-control" id="course_categories" name="categories" value="@foreach($course->categories as $category) {{$category->title}}, @endforeach" readonly>
                    </div>

                    <br>

                    <div class="col-lg-6">
                        <label for="course_description">Description</label>
                        <textarea class="form-control" id="course_description" rows="6" name="description" readonly>{{$course->description}}</textarea>
                    </div>

                    <div class="row" style="height: 12px;"></div>
                    <div class="row" style="height: 12px;"></div>

                    <h4 class="card-title">Chatper List</h4>

                    <p id="that"> </p>

                    <div class="table-responsive">
                        <table class="table table-editable table-nowrap align-middle table-edits">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Slug</th>
                                <th>Content</th>
                                <th>Video URL</th>
                                <th>Created at</th>
                                <th>Updated at</th>
                                <th>Edit</th>
                                <th>Open</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($course->chapters as $chapter)
                                <tr data-id="{{$chapter->id}}">
                                    <td data-field="id" style="width: 80px">{{$chapter->id}}</td>
                                    <td data-field="title">{{$chapter->title}}</td>
                                    <td data-field="slug">{{$chapter->slug}}</td>
                                    {{-- <td data-field="content">{!! \Illuminate\Support\Str::limit($chapter->content, 30, ' ...') !!}</td> --}}
                                    <td data-field="content">{!! \Illuminate\Support\Str::words($chapter->content, 5, ' ...') !!}</td>
                                    <td data-field="video_url">{{$chapter->video_url}}</td>
                                    <td>
                                        @if($chapter -> created_at)
                                            <p>{{$chapter -> created_at ->format('d/m/y')}}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if($chapter -> updated_at)
                                            <p>{{$chapter -> updated_at ->format('d/m/y')}}</p>
                                        @endif
                                    </td>
                                    <td style="width: 100px">
                                        <a id="that{{$chapter->id}}" href="{{route('chapterShowUpdate', [$course->slug, $chapter->slug])}}"
                                           class="btn btn-outline-secondary btn-sm edit"
                                           title="Edit">
                                            <i class="fas fa-pencil-alt" style="color: green;"></i>
                                        </a>
                                    </td>
                                    <td style="width: 100px">
                                        <a id="that{{$chapter->id}}" href="{{route('chapterDetail', [$course->slug, $chapter->slug])}}"
                                           class="btn btn-outline-secondary btn-sm edit"
                                           title="Open">
                                            <i class="fas fa-eye" style="color: blue;"></i>
                                        </a>
                                    </td>
                                    <td style="width: 100px">
                                        <form method="post" action="{{route('chapterDelete', [$course->slug, $chapter->slug])}}" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')

                                            <button class="btn btn-outline-secondary btn-sm trash" type="submit">
                                                <i class="fas fa-trash-alt" style="color: red;" aria-hidden="true"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                    <script>
                        function showForm(temp, title, slug)
                        {
                            console.log(" the id is ", temp, " and the title is ", title, " and the slug is ", slug);

                            // document.getElementById("form_course_update"+temp).style.visibility = "visible";

                            document.getElementById("edit_course").value = title;

                            var form_url = "{{route('courseUpdate', '123321123321')}}";

                            console.log("url before replace", form_url);

                            form_url = form_url.replace('123321123321', slug);

                            console.log("url after replace", form_url);

                            document.getElementById("update_form").action = form_url;
                        }
                    </script>

                    <!--  Large modal example -->
                    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title mt-0" id="myLargeModalLabel">Update Chapter</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <div class="mt-4">

                                                <div class="mb-3 row">
                                                    <label for="edit_course" class="card-title col-md-0 col-form-label">Update course title</label>
                                                </div>

                                                <form id="update_form" class="row row-cols-lg-auto gx-3 gy-2 align-items-center"
                                                      method="post">

                                                    @csrf
                                                    @method('Put')

                                                    <div class="col-lg-8">
                                                        <label class="visually-hidden"></label>
                                                        <input type="text" class="form-control" id="edit_course" name="title" value="" required>
                                                    </div>

                                                    <div class="col-12">
                                                        <button type="submit" class="btn btn-primary">Update</button>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection


@section('javascript')
    <script>
        function myFunction()
        {
            var x = document.getElementById("create_form");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
    </script>

@endsection

