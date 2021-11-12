@extends('layouts.base')

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
                <h4 class="mb-0">Chapter Explorer: <a href="{{route('courseDetail', $course->slug)}}"> {{$course->title}} </a></h4>

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


                    <h4 class="card-title"> {{$chapter->title}} </h4>


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

                    <div class="col-lg-6">
                        <label for="chapter_content">Content</label>
                        <textarea class="form-control" id="chapter_content" rows="8" name="chapter_content" readonly>{{$chapter->content}}</textarea>
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

