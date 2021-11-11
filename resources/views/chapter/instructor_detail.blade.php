@extends('layouts.base_instructor')

@section('title') Chapter Detail @endsection

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
                <h4 class="mb-0"> Course : <a href="{{route('courseShowUpdate', $course->slug)}}"> {{$course->title}} </a></h4>

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
                        <label class="card-title col-md-0 col-form-label">
                            Update chapter: {{ $chapter->title}}
                            <i class="fas fa-edit" style="color: blue;"></i>
                        </label>
                    </div>


                    <form class="form-control"
                          method="post"
                          action="{{ route('chapterUpdate', [$course->slug, $chapter->slug])}}"
                          enctype="multipart/form-data">

                        @csrf
                        @method('PUT')

                        <div class="row row-cols-lg-auto gx-3 gy-2 align-items-center">
                            <div class="col-lg-4">
                                <label for="new_chapter">Chapter Title</label>
                                <input type="text" class="form-control" id="new_chapter" name="title" value="{{old('title', $chapter->title)}}" placeholder="Enter Title" required>
                            </div>
                        </div>

                        <br>

                        <div class="col-lg-8">
                            <label for="new_content">Content</label>
                            <textarea class="form-control" id="new_content" rows="8" name="content" required>{{old('content', $chapter->content)}}</textarea>
                        </div>

                        <br>

                        <div class="form-group">
                            <label for="video"> Video </label>
                            <input type="file" id="video" name="video" class="form-control" accept="video/*">
                        </div>

                        <div class="form-group">
                            <label for="video_url"> Video Url </label>
                            <input type="text" id="video_url" name="video_url" value="{{old('video_url', $chapter->video_url)}}" placeholder="Enter video url" class="form-control">
                        </div>

                        <br>

                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Save</button>

                            <a class="btn btn-secondary" href="{{route('chapterDetail', [$course->slug, $chapter->slug])}}">Cancel</a>
                        </div>
                    </form>


                    <div class="row" style="height: 12px;"></div>
                    <div class="row" style="height: 12px;"></div>


                    <div class="row">

                        @if($chapter->video)
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">

                                        <!-- 16:9 aspect ratio -->
                                        <div class="ratio ratio-16x9">
                                            <iframe src="{{ asset("storage/videos/$chapter->video") }}" title="{{$chapter->title}}" allowfullscreen></iframe>
                                        </div>

                                    </div>
                                </div>
                            </div> <!-- end col -->
                        @endif


                        @if($chapter->video_url)
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <!-- 16:9 aspect ratio -->
                                        <div class="ratio ratio-16x9">
                                            <iframe src="{{$chapter->video_url}}" title="{{$chapter->title}}" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        @endif

                    </div>

                    <div class="row" style="height: 12px;"></div>
                    <div class="row" style="height: 12px;"></div>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection


@section('javascript')
    <script>
    </script>

@endsection

