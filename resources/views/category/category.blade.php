@extends('layouts.base')

@section('title') Category @endsection

@section('content')

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0">Categories Explorer</h4>

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
                        <label for="new_category" class="card-title col-md-0 col-form-label">Add a category</label>
                    </div>

                    <form class="row row-cols-lg-auto gx-3 gy-2 align-items-center" method="post" action="{{ route('categoryStore')}}">

                        @csrf

                        <div class="col-lg-4">
                            <label class="visually-hidden" for="new_category">Category</label>
                            <input type="text" class="form-control" id="new_category" name="title" value="{{old('title')}}" placeholder="Enter Name" required>
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>

                    <div class="row" style="height: 12px;"></div>
                    <div class="row" style="height: 12px;"></div>


                    <div class="row" style="height: 12px;"></div>
                    <div class="row" style="height: 12px;"></div>

                    <h4 class="card-title">Categories List</h4>
                    <p class="card-title-desc">Table Edits is a lightweight jQuery plugin for making table rows editable.</p>

                    <p id="that"> </p>

                    <div class="table-responsive">
                        <table class="table table-editable table-nowrap align-middle table-edits">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Slug</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                                <tr data-id="{{$category->id}}">
                                    <td data-field="id" style="width: 80px">{{$category->id}}</td>
                                    <td id="the{{$category->id}}" data-field="name">{{$category->title}}</td>
                                    <td data-field="age">{{$category->slug}}</td>
                                    <td style="width: 100px">
                                        <a id="that{{$category->id}}" class="btn btn-outline-secondary btn-sm edit" title="Edit" onclick="showForm({{$category->id}})">
                                            <i class="fas fa-pencil-alt" style="color: green;"></i>
                                        </a>

                                        <input id="category_id" type="hidden" value="{{$category->id}}" data-id="{{$category->id}}">

                                        <form id="form_category_update{{$category->id}}" data-id="{{$category->id}}" method="post" action="{{route('categoryUpdate', $category->slug)}}" style="display: inline-block; visibility: hidden">
                                            @csrf
                                            @method('Put')

                                            <button class="btn btn-outline-secondary btn-sm trash" type="submit">
                                                <i class="fas fa-save" style="color: blue;" aria-hidden="true"></i>
                                            </button>
                                        </form>
                                    </td>
                                    <td style="width: 100px">
                                        <form method="post" action="{{route('categoryDelete', $category->slug)}}" style="display: inline-block;">
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
                            function showForm(temp)
                            {
                                console.log(" the id is ", temp);

                                document.getElementById("form_category_update"+temp).style.visibility = "visible";
                            }
                        </script>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection


@section('javascript')
    <!-- Table Editable plugin -->
    <script src="{{ url( 'my_assets/libs/table-edits/build/table-edits.min.js') }}"></script>

    <script src="{{ url( 'my_assets/js/pages/table-editable.int.js')}}"></script>
@endsection

