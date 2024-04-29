<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login V1</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('assests/images/icons/favicon.ico') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assests/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assests/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assests/vendor/animate/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assests/vendor/css-hamburgers/hamburgers.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assests/vendor/select2/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assests/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assests/css/main.css') }}">
</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="{{ asset('assests/images/login.jpg') }}" alt="IMG">
                </div>

                <form class="login100-form validate-form" action="{{ route('login.submit') }}" method="post">
                    @csrf
                    <span class="login100-form-title">
                        Member Login
                    </span>

                    <div class="wrap-input100 validate-input" data-validate = "Valid username is required">
                        <input type="text" class="input100" placeholder="your Username" id="username"
                            name="username">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Password is required">
                        <input type="password" class="input100" placeholder="your Password" id="password"
                            name="password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn">
                            Login
                        </button>
                    </div>

                    <div class="text-center p-t-12">
                        <span class="txt1">
                            Forgot
                        </span>
                        <a class="txt2" href="#">
                            Username / Password?
                        </a>
                    </div>

                    <div class="text-center p-t-136">
                        <a class="txt2" href="/register">
                            Create your Account
                            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>




    <script src="{{ asset('assests/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('assests/vendor/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('assests/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assests/vendor/select2/select2.min.js') }}"></script>
    <script src="{{ asset('assests/vendor/tilt/tilt.jquery.min.js') }}"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
    <script src="{{ asset('assests/js/index.js') }}"></script>

</body>

</html>
