@extends('layouts.base')

@section('title') Categories @endsection

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
                                    <td data-field="title">{{$category->title}}</td>
                                    <td data-field="slug">{{$category->slug}}</td>

                                    <td style="width: 100px">
                                        <a id="that{{$category->id}}"
                                           class="btn btn-outline-secondary btn-sm edit"
                                           data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg"
                                           title="Edit" onclick="showForm({{$category->id}}, '{{$category->title}}', '{{$category->slug}}')">
                                            <i class="fas fa-pencil-alt" style="color: green;"></i>
                                        </a>
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
                        function showForm(temp, title, slug)
                        {
                            console.log(" the id is ", temp, " and the title is ", title, " and the slug is ", slug);

                            // document.getElementById("form_category_update"+temp).style.visibility = "visible";

                            document.getElementById("edit_category").value = title;

                            var form_url = "{{route('categoryUpdate', '123321123321')}}";

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
                                    <h5 class="modal-title mt-0" id="myLargeModalLabel">Update Category</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <div class="mt-4">

                                                <div class="mb-3 row">
                                                    <label for="edit_category" class="card-title col-md-0 col-form-label">Update category title</label>
                                                </div>

                                                <form id="update_form" class="row row-cols-lg-auto gx-3 gy-2 align-items-center"
                                                      method="post">

                                                    @csrf
                                                    @method('Put')

                                                    <div class="col-lg-8">
                                                        <label class="visually-hidden"></label>
                                                        <input type="text" class="form-control" id="edit_category" name="title" value="" required>
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

@endsection

