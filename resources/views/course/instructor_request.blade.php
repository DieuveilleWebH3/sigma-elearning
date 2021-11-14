@extends('layouts.base')

@section('title') Instructor Requests @endsection

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
                <h4 class="mb-0">Instructor Requests Explorer</h4>

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


                    @if ($message = session()->get('success'))
                        <div style="text-align: center;" class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ $message }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif


                    <div class="row" style="height: 12px;"></div>
                    <div class="row" style="height: 12px;"></div>

                    <h4 class="card-title">Instructor Requests List</h4>

                    <p id="that"> </p>

                    <div class="table-responsive">
                        <table class="table table-editable table-nowrap align-middle table-edits">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Firstname</th>
                                <th>LastName</th>
                                <th>Email</th>
                                <th>Created at</th>
                                <th>Updated at</th>
                                <th>Authorization</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($requests as $request)
                                <tr data-id="{{$request->id}}">
                                    <td data-field="id" style="width: 80px">{{$request->id}}</td>
                                    <td data-field="firstname">{{$request->firstname}}</td>
                                    <td data-field="lastname">{{$request->lastname}}</td>
                                    <td data-field="email">{{$request->email}}</td>

                                    <td data-field="created_at">
                                        @if($request -> created_at)
                                            <p>{{$request -> created_at ->format('d/m/y')}}</p>
                                        @endif
                                    </td>
                                    <td data-field="updated_at">
                                        @if($request -> updated_at)
                                            <p>{{$request -> updated_at ->format('d/m/y')}}</p>
                                        @endif
                                    </td>

                                    <td data-field="authorization" style="width: 100px">
                                        @if( ! ($request -> authorization))
                                            No
                                            <form method="post" action="{{ route('generate_user') }}" style="display: inline-block;">
                                                @csrf

                                                <input type="hidden" id="firstname" name="firstname" value="{{$request -> firstname}}">
                                                <input type="hidden" id="lastname" name="lastname" value="{{$request -> lastname}}">
                                                <input type="hidden" id="email" name="email" value="{{$request -> email}}">

                                                <button class="btn btn-outline-secondary btn-sm trash" type="submit">
                                                    <i class="fas fa-vote-yea" style="color: green;" aria-hidden="true"></i>
                                                </button>
                                            </form>
                                             ?
                                        @else
                                            Yes
                                        @endif
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


@section('javascript')
@endsection

