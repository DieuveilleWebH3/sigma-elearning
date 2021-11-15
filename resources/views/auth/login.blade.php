<!doctype html>

<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>Log In | Sigma Elearning</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="E Learning App by Dieuveille BOUSSA ELLENGA" name="Dieuveille BOUSSA ELLENGA"/>
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ url( 'my_assets/images/favicon.ico') }}">

        <!-- Bootstrap Css -->
        <link href="{{ url( 'my_assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ url( 'my_assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ url( 'my_assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />


        <!-- Bootstrap Alert -->

        <style>
            .invalid { border-color: red; }
            #error { color: red }
        </style>

    </head>

    <body class="authentication-bg">

        <div class="home-btn d-none d-sm-block">
            <a href="" class="text-dark"><i class="mdi mdi-home-variant h2"></i></a>
        </div>
        <div class="account-pages my-5 pt-sm-5">
            <div class="container">


                <div class="row align-items-center justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card">

                            <div class="card-body p-4">

                                <div class="text-center">
                                    <a href="#" class="mb-5 d-block auth-logo">
                                        <img src="{{ url( 'my_assets/images/logo.png')}}" alt="Logo" height="50" class="logo logo-dark">
                                        <img src="{{ url( 'my_assets/images/logo.png')}}" alt="Logo" height="50" class="logo logo-light">
                                    </a>
                                </div>


                                <div class="text-center mt-2">
                                    <h5 class="text-primary">Welcome Back !</h5>
                                    <p class="text-muted">Sign in to continue to Sigma E Learning App.</p>
                                </div>


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


                            <div class="p-2 mt-4">

                                <form method="post" action="{{ route('login') }}" class="needs-validation" novalidate>

                                    @csrf

                                    <div class="mb-3">
                                        <label class="form-label" for="email">Email *</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                                        <div class="invalid-feedback">
                                            This field is required.
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <div class="float-end">
                                            <a href="#" class="text-muted">Forgot password?</a>
                                        </div>
                                        <label class="form-label" for="password">Password *</label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
                                        <div class="invalid-feedback">
                                            This field is required.
                                        </div>
                                    </div>

                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="auth-remember-check">
                                        <label class="form-check-label" for="auth-remember-check">Remember me</label>
                                    </div>

                                    <div class="mt-3 text-end">
                                        <button class="btn btn-primary w-sm waves-effect waves-light" type="submit">Log In</button>
                                    </div>
                                </form>

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

        <script type="text/javascript">

            // Example starter JavaScript for disabling form submissions if there are invalid fields
            (function () {
                'use strict'

                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.querySelectorAll('.needs-validation')

                // Loop over them and prevent submission
                Array.prototype.slice.call(forms)
                    .forEach(function (form) {
                        form.addEventListener('submit', function (event) {
                            if (!form.checkValidity()) {
                                event.preventDefault()
                                event.stopPropagation()
                            }

                            form.classList.add('was-validated')
                        }, false)
                    })
            })()

        </script>

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

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>

--}}
