@extends('layouts.base')

@section('title') Update Course @endsection

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
                <h4 class="mb-0">Edit Course</h4>
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
                        <label class="card-title col-md-0 col-form-label">
                            Update course: {{ $course->title}}
                            <i class="fas fa-edit" style="color: blue;"></i>
                        </label>
                    </div>

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

                            <div class="col-lg-4">
                                <label for="new_price">Price</label>
                                <input type="number" class="form-control" id="new_price" name="price" step=".01" value="{{old('price', $course->price)}}" placeholder="Enter Price" required>
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

                    <div class="row" style="height: 12px;"></div>
                    <div class="row" style="height: 12px;"></div>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection


@section('javascript')

@endsection

