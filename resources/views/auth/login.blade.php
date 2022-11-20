<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login V1</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{ asset('image/logo-retina.png') }}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login/bootstrap/bootstrap.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login/fontawesome/css/font-awesome.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login/animate/animate.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login/css-hamburgers/hamburgers.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login/select2/select2.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login/main.css') }}">
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    {{-- <img src="image/img-01.png" alt="IMG"> --}}
                    <img src="{{ asset('image/logo-retina.png') }}" alt="IMG">
                </div>

                <form class="login100-form validate-form" action="{{ route('login') }}" method="POST">
                    @csrf
                    <span class="login100-form-title">
                        <i class="fa fa-user mr-2"></i> Login
                    </span>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100 @error('email') is-invalid @enderror" type="text" name="email" placeholder="Email">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100 @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" type="submit">
                            <i class="fa fa-sign-in mr-2"></i> Login
                        </button>
                    </div>

                    <div class="text-center p-t-136">
                        <a class="txt2" href="#">
                            © 2022 Retina Photo
                            {{-- Create your Account --}}
                            {{-- <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i> --}}
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>




    <!--===============================================================================================-->
    <script src="{{ asset('js/login/jquery/jquery-3.2.1.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('js/login/bootstrap/popper.js') }}"></script>
    <script src="{{ asset('js/login/bootstrap/bootstrap.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('js/login/select2/select2.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('js/login/tilt/tilt.jquery.min.js') }}"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
    <!--===============================================================================================-->
    <script src="{{ asset('js/login/main.js') }}"></script>

</body>

</html>
