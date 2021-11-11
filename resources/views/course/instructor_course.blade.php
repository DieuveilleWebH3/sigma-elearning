@extends('layouts.base_instructor')

@section('title') Courses @endsection

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
                            <p style="color: red">{{$error}}</p>
                        @endforeach
                    @endif

                    <div class="mb-3 row">
                        <a onclick="myFunction()">
                            <label class="card-title col-md-0 col-form-label">
                                Add a course
                                <i class="fas fa-plus-circle" style="color: blue;"></i>
                            </label>
                        </a>
                    </div>

                    <form class="form-control"
                          method="post"
                          action="{{ route('courseStore')}}"
                          enctype="multipart/form-data"
                          style="display: none;"
                          id="create_form">

                        @csrf

                        <div class="row row-cols-lg-auto gx-3 gy-2 align-items-center">
                            <div class="col-lg-4">
                                <label for="new_course">Course Title</label>
                                <input type="text" class="form-control" id="new_course" name="title" value="{{old('title')}}" placeholder="Enter Title" required>
                            </div>

                            <div class="col-lg-4">
                                <label for="new_duration">Duration</label>
                                <input type="number" class="form-control" id="new_duration" name="duration" value="{{old('duration')}}" placeholder="Enter Duration" required>
                            </div>

                            <div class="col-lg-4">
                                <label for="new_price">Price</label>
                                <input type="number" class="form-control" id="new_price" name="price" step=".01" value="{{old('price')}}" placeholder="Enter Price" required>
                            </div>
                        </div>

                        <br>

                        <div class="col-lg-4">
                            <label for="new_description">Description</label>
                            <textarea class="form-control" id="new_description" rows="5" name="description" required>{{old('description')}}</textarea>
                        </div>

                        <br>

                        <div class="form-group">
                            <label for="picture"> Image </label>
                            <input type="file" id="picture" name="picture" class="form-control" accept="image/*" required>
                        </div>

                        <br>

                        <div class="mb-3 row">
                            <label for="levels" class="col-md-0 col-form-label">Choose the level</label>
                            <div class="col-md-6">
                                <select id="levels" class="form-select" name="level" required>
                                    @foreach($levels as $level)
                                        <option id="{{$level->id}}" value="{{$level->id}}" name="level">{{$level->name}}</option>
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
                                               value="{{$category->id}}"
                                               id="{{$category->title}}"
                                               name="category_list[{{$category->id}}]">
                                        {{$category->title}}
                                    </label>
                                @endforeach
                            </div>
                        </div>

                        <br>

                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Save</button>
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


                    <div class="row" style="height: 12px;"></div>
                    <div class="row" style="height: 12px;"></div>


                    <div class="row" style="height: 12px;"></div>
                    <div class="row" style="height: 12px;"></div>

                    <h4 class="card-title">Courses List</h4>

                    <p id="that"> </p>

                    <div class="table-responsive">
                        <table class="table table-editable table-nowrap align-middle table-edits">
                            <thead>
                            <tr>
                                <th>Title</th>
                                <th>Slug</th>
                                <th>Description</th>
                                <th>Duration</th>
                                <th>Level</th>
                                <th>Categories</th>
                                <th>Created at</th>
                                <th>Updated at</th>
                                <th>Edit</th>
                                <th>Open</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($courses as $course)
                                <tr data-id="{{$course->id}}">
                                    <td data-field="title">{{$course->title}}</td>
                                    <td data-field="slug">{{$course->slug}}</td>
                                    <td data-field="description"> {!! \Illuminate\Support\Str::words($course->description, 5, ' ...') !!}</td>
                                    <td data-field="duration">{{$course->duration}} H</td>
                                    <td data-field="level">{{$course->getLevelName()}}</td>
                                    <td data-field="categories">
                                        @foreach($course->categories as $category)
                                            {{$category->title}},
                                        @endforeach
                                    </td>
                                    <td>
                                        @if($course -> created_at)
                                            <p>{{$course -> created_at ->format('d/m/y')}}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if($course -> updated_at)
                                            <p>{{$course -> updated_at ->format('d/m/y')}}</p>
                                        @endif
                                    </td>
                                    <td style="width: 100px">
                                        <a id="that{{$course->id}}" href="{{route('courseShowUpdate', $course->slug)}}"
                                           class="btn btn-outline-secondary btn-sm edit"
                                           title="Edit">
                                            <i class="fas fa-pencil-alt" style="color: green;"></i>
                                        </a>
                                    </td>
                                    <td style="width: 100px">
                                        <a href="{{route('courseShowUpdate', $course->slug)}}" title="Open">
                                            <i class="fas fa-eye" style="color: blue;"></i>
                                        </a>
                                    </td>
                                    <td style="width: 100px">
                                        <form method="post" action="{{route('courseDelete', $course->slug)}}" style="display: inline-block;">
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
                                    <h5 class="modal-title mt-0" id="myLargeModalLabel">Update Course</h5>
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

