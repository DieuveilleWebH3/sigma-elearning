@extends('layouts.base_instructor')

@section('title') Profile @endsection

@section('head_css')

@endsection

@section('content')

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0">Profile </h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">


                    @if($errors->any())
                        @foreach($errors->all() as $error)
                            <p style="color: red">{{$error}}</p>
                        @endforeach
                    @endif


                    <h4 class="card-title">Edit your personal Info</h4>
                    <p class="card-title-desc"> </p>

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#navtabs-home" role="tab">
                                <span class="d-block d-sm-none"><i class="fas fa-user"></i></span>
                                <span class="d-none d-sm-block">Edit Profile</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#navtabs-profile" role="tab">
                                <span class="d-block d-sm-none"><i class="fas fa-user-lock"></i></span>
                                <span class="d-none d-sm-block">Edit Password</span>
                            </a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content p-3 text-muted">
                        <div class="tab-pane active" id="navtabs-home" role="tabpanel">

                            <div style="width: 95%; margin: auto;" class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Edit your account </h6>
                                </div>
                                <div class="card-body">
                                    <h1 style="text-align: center;">Edit your account</h1>
                                    <p style="text-align: center;" >You can edit your account using the following form:</p>

                                    <form style="grid-area: form; width: 60%; margin: auto;"
                                          action="{{ route('profileUpdate', $user_email)}}" method="post" enctype="multipart/form-data">

                                        @csrf
                                        @method('PUT')

                                        <div class="form-group">
                                            <label for="firstname">Firstname</label>
                                            <input type="text" class="form-control" id="firstname" name="firstname" value="{{old('title', $user->firstname)}}" required>
                                        </div>

                                        <div class="padding" style="height: 8px;"></div>

                                        <div class="form-group">
                                            <label for="lastname">Lastname</label>
                                            <input type="text" class="form-control" id="lastname" name="lastname" value="{{old('title', $user->lastname)}}" required>
                                        </div>

                                        <div class="padding" style="height: 8px;"></div>

                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" id="email" name="email" value="{{$user->email}}" readonly>
                                        </div>

                                        <div class="padding" style="height: 8px;"></div>

                                        <!--
                                        <div id="div_id_date_of_birth" class="form-group">
                                            <label for="date_of_birth" class="requiredField">
                                                Date of birth
                                            </label>
                                            <div class="">
                                                <input type="date" name="date_of_birth" class="dateinput form-control" id="date_of_birth" placeholder="" value="">
                                            </div>
                                        </div>

                                        <div class="padding" style="height: 8px;"></div>
                                        -->


                                        <div class="form-group">
                                            <label for="picture"> User's Image </label>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <img class="rounded mr-2" alt="{{\Illuminate\Support\Facades\Auth::user()->firstname}} picture" width="200" src="{{ asset("storage/images/$user->picture") }}" data-holder-rendered="true">
                                                </div>
                                            </div>

                                            <div style="height: 2px;"></div>

                                            <input type="file" id="picture" name="picture" class="form-control" accept="image/*">
                                        </div>

                                        <div class="padding" style="height: 12px;"></div>

                                        <button type='submit' class="float-right btn btn-primary btn-user">Save changes</button>
                                    </form>
                                </div>
                            </div>

                            <p class="mb-0">

                            </p>
                        </div>

                        <div class="tab-pane" id="navtabs-profile" role="tabpanel">

                            <div style="width: 95%; margin: auto;" class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Change your password </h6>
                                </div>
                                <div class="card-body">

                                    <p style="text-align: center;" >You can change your password using the following form:</p>

                                    <form style="grid-area: form; width: 60%; margin: auto;" action="#" method="post">

                                        @csrf
                                        @method('PUT')

                                        <div class="form-group">
                                            <label for="old_password">Current Password</label>
                                            <input type="password" class="form-control" id="old_password" name="old_password" required>
                                        </div>

                                        <div class="padding" style="height: 8px; margin-top: 8px;"></div>
                                        <div class="padding" style="height: 12px;"></div>

                                        <div class="form-group">
                                            <label for="password">New Password</label>
                                            <input type="password" class="form-control" id="password" name="password" required>
                                        </div>

                                        <div class="padding" style="height: 8px;"></div>

                                        <div class="form-group">
                                            <label for="password_confirmation">New Password Confirmation</label>
                                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                                        </div>

                                        <div class="padding" style="height: 8px;"></div>

                                        <div class="padding" style="height: 12px;"></div>

                                        <button type='submit' class="float-right btn btn-primary ">Save changes</button>
                                    </form>
                                </div>
                            </div>

                            <p class="mb-0">

                            </p>
                        </div>

                    </div>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

@endsection
