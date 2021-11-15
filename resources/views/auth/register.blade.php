<!doctype html>

<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>Register Account | Sigma Elearning</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="E Learning App by Dieuveille BOUSSA ELLENGA" name="Dieuveille BOUSSA ELLENGA"/>
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ url( 'my_assets/images/favicon.ico')}}">

        <!-- Bootstrap Css -->
        <link href="{{ url( 'my_assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css"/>
        <!-- Icons Css -->
        <link href="{{ url( 'my_assets/css/icons.min.css')}}" rel="stylesheet" type="text/css"/>
        <!-- App Css-->
        <link href="{{ url( 'my_assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css"/>

    </head>

    <body class="authentication-bg">

        <div class="home-btn d-none d-sm-block">
            <a href="#" class="text-dark"><i class="mdi mdi-home-variant h2"></i></a>
        </div>
        <div class="account-pages my-5  pt-sm-5">
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-md-8 col-lg-6 col-xl-12">
                        <div>

                            <div class="card">

                                <div class="card-body p-4">

                                    <div class="text-center">
                                        <a href="#" class="mb-5 d-block auth-logo">
                                            <img src="{{ url( 'my_assets/images/logo.png')}}" alt="Logo" height="50" class="logo logo-dark">
                                            <img src="{{ url( 'my_assets/images/logo.png')}}" alt="Logo" height="50" class="logo logo-light">
                                        </a>
                                    </div>

                                    <div class="text-center mt-2">
                                        <h4 class="text-primary">Register Account</h4>
                                    </div>

                                    <div class="p-1 mt-4">
                                        <div class="alert alert-success text-center mb-4" role="alert">
                                            <br/>
                                            The registration functionality has been disabled. You can not create a new account !
                                            <br/>
                                            <br/>
                                            Talk to the Admin to allow user registration.
                                            <br/>
                                            <br/>
                                            <br/>
                                            Use Contact form <a href="{{route('contact')}}"> here </a>
                                            <br/>
                                            <br/>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="mt-5 text-center">
                                <p>© <script>document.write(new Date().getFullYear())</script> Sigma Elearning  ..  </p>
                                <P>
                                    Crafted with <i class="mdi mdi-heart text-danger"></i> by
                                    <a href="#" target="_blank" class="text-reset">D. Ell Bouss</a>
                                </P>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>

        <!-- JAVASCRIPT -->
        <script src="{{ url( 'my_assets/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{ url( 'my_assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ url( 'my_assets/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{ url( 'my_assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{ url( 'my_assets/libs/node-waves/waves.min.js')}}"></script>
        <script src="{{ url( 'my_assets/libs/waypoints/lib/jquery.waypoints.min.js')}}"></script>
        <script src="{{ url( 'my_assets/libs/jquery.counterup/jquery.counterup.min.js')}}"></script>

        <script src="{{ url( 'my_assets/js/app.js')}}"></script>

    </body>

</html>





{{--

<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- FirstName -->
            <div>
                <x-label for="firstname" :value="__('FirstName')" />

                <x-input id="firstname" class="block mt-1 w-full" type="text" name="firstname" :value="old('name')" required autofocus />
            </div>

            <!-- LastName -->
            <div>
                <x-label for="lastname" :value="__('LastName')" />

                <x-input id="lastname" class="block mt-1 w-full" type="text" name="lastname" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>

--}}
