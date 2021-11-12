@extends('layouts.base_instructor')

@section('title') Chapters @endsection

@section('head_css')
    <style>
    </style>
@endsection

@section('content')

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0">Chapters Explorer</h4>
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


                    <div class="row" style="height: 12px;"></div>
                    <div class="row" style="height: 12px;"></div>

                    <h4 class="card-title">Chapter List</h4>

                    <p id="that"> </p>

                    <div class="table-responsive">
                        <table class="table table-editable table-nowrap align-middle table-edits">
                            <thead>
                            <tr>
                                <th>Title</th>
                                <th>Slug</th>
                                <th>Content</th>
                                <th>Course</th>
                                <th>Video</th>
                                <th>Video URL</th>
                                <th>Created at</th>
                                <th>Updated at</th>
                                <th>Edit</th>
                                <th>Open</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($chapters as $chapter)
                                <tr data-id="{{$chapter->id}}">
                                    <td data-field="title">{{$chapter->title}}</td>
                                    <td data-field="slug">{{$chapter->slug}}</td>
                                    <td data-field="content"> {!! \Illuminate\Support\Str::words($chapter->content, 5, ' ...') !!}</td>
                                    <td data-field="course">{{$chapter->getCourseTitle()}}</td>

                                    <td data-field="video"> @if($chapter->video) YES @else NO @endif</td>
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
                                        <a id="that{{$chapter->id}}" href="{{route('chapterShowUpdate', [\Illuminate\Support\Str::slug($chapter->getCourseTitle(), '-'), $chapter->slug])}}"
                                           class="btn btn-outline-secondary btn-sm edit"
                                           title="Edit">
                                            <i class="fas fa-pencil-alt" style="color: green;"></i>
                                        </a>
                                    </td>
                                    <td style="width: 100px">
                                        <a href="{{route('chapterShowUpdate', [\Illuminate\Support\Str::slug($chapter->getCourseTitle(), '-'), $chapter->slug])}}" title="Open">
                                            <i class="fas fa-eye" style="color: blue;"></i>
                                        </a>
                                    </td>
                                    <td style="width: 100px">
                                        <form method="post" action="#" style="display: inline-block;">
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

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection


