@extends('layouts.base_visitor')

@section('title') Contact @endsection

@section('head_css')
@endsection

@section('page')
    <div class="wm-mini-title">
        <h1>Course Detail</h1>
    </div>
    <div class="wm-breadcrumb">
        <ul>
            <li><a href="{{route('courseVisitor')}}">Home</a></li>

            <li><a href="{{route('contact')}}">Contact</a></li>
        </ul>
    </div>

@endsection

@section('content')

    <!--// Main Section \\-->
    <div class="wm-main-section wm-contact-full wm-contact-full-inner">
        <div class="container">
            <div class="row">

                <div class="col-md-12">

                    <div class="wm-contact-tab">

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#home" aria-controls="home" data-toggle="tab">Contact Us</a></li>
                            <li><a href="#profile" aria-controls="profile" data-toggle="tab">Information Details</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="home">
                                <div class="row">
                                    <div class="col-md-4"> <div class="wm-map"> <div id="map"></div> </div> </div>
                                    <div class="col-md-8">
                                        <div class="wm-contact-form">
                                            <span>Talk To Us Today</span>

                                            <form style="grid-area: form;"
                                                  action="{{route('sendMail')}}"
                                                  method="post" enctype="multipart/form-data">

                                                @csrf

                                                <div class="form-group">
                                                    <label for="firstname" style="display: flex; text-align: left"> First Name </label>

                                                    <i class="wmicon-black"></i>
                                                    <input type="text" id="firstname" name="firstname" class="form-control" value="{{old('firstname')}}" required>
                                                </div>

                                                <div class="form-group">
                                                    <label for="lastname" style="text-align: left"> Last Name </label>

                                                    <i class="wmicon-black"></i>
                                                    <input type="text" id="lastname" name="lastname" class="form-control" value="{{old('lastname')}}" required>
                                                </div>

                                                <div class="form-group">
                                                    <label for="subject" style=" text-align: left"> Subject </label>

                                                    <i class="wmicon-black"></i>
                                                    <input type="text" id="subject" name="subject" class="form-control" value="{{old('subject')}}" required>
                                                </div>

                                                <div class="form-group">
                                                    <label for="email" style="text-align: left"> Email </label>

                                                    <i class="wmicon-symbol3"></i>
                                                    <input type="email" id="email" name="email" class="form-control" value="{{old('email')}}" required>
                                                </div>

                                                <div class="form-group">
                                                    <label for="content" style="text-align: left">Message</label>
                                                    <i class="wmicon-web2"></i>
                                                    <textarea id="content" name="content" class="form-control" rows="6" required>{{old('content')}}</textarea>
                                                </div>

                                                <div style="margin-top: 10px;"></div>
                                                <div style="height: 10px;"></div>
                                                <di style="padding-top: 10px;"></di>

                                                <div class="form-group">
                                                    <div style="margin-top: 10px;"></div>
                                                    <div style="height: 10px;"></div>

                                                    <label for="be_instructor" style=" text-align: left"> Want to be an instructor ?</label>

                                                    <select id="be_instructor" name="be_instructor" class="form-control">
                                                        <option value="NO" selected> No </option>
                                                        <option value="Yes"> Yes </option>
                                                    </select>
                                                    <i class="wmicon-black"></i>
                                                    <!-- <input type="checkbox" id="be_instructor" name="be_instructor" class="form-control" value="be_instructor"> -->
                                                </div>

                                                <div style="margin-top: 10px;"></div>
                                                <div style="height: 10px;"></div>

                                                <input type='submit' class="btn btn-primary btn-user" value="Send Message">

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="profile">
                                <span class="wm-contact-title">Contact Info</span>
                                <div class="wm-contact-service">
                                    <ul class="row">
                                        <li class="col-md-4">
                                            <span class="wm-service-icon"><i class="wmicon-pin"></i></span>
                                            <h5 class="wm-color">Address</h5>
                                            <p>195 Cooks Mine Road Espanola, NM 87532</p>
                                        </li>
                                        <li class="col-md-4">
                                            <span class="wm-service-icon"><i class="wmicon-phone"></i></span>
                                            <h5 class="wm-color">Phone & Fax</h5>
                                            <p>+1 505-753-5656 +1 505-753-4437</p>
                                        </li>
                                        <li class="col-md-4">
                                            <span class="wm-service-icon"><i class="wmicon-letter"></i></span>
                                            <h5 class="wm-color">E-mail</h5>
                                            <p><a href="mailto:name@email.com">Info@university.com</a> <a href="mailto:name@email.com">support@university.com</a></p>
                                        </li>
                                    </ul>
                                </div>
                                <ul class="contact-social-icon">
                                    <li><a href="#"><i class="wm-color wmicon-social5"></i> Facebook</a></li>
                                    <li><a href="#"><i class="wm-color wmicon-social4"></i> Twitter</a></li>
                                    <li><a href="#"><i class="wm-color wmicon-social3"></i> Linkedin</a></li>
                                    <li><a href="#"><i class="wm-color wmicon-vimeo"></i> Vimeo</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>
    <!--// Main Section \\-->

@endsection

