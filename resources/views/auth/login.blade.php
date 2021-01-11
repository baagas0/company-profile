<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highlight" content="no"/>
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Alpha - Material Design Admin Template</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <link href="{{  asset('backend/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{  asset('backend/plugins/font-awesome/css/all.min.css') }}" rel="stylesheet">
    <link href="{{  asset('backend/plugins/waves/waves.min.css') }}" rel="stylesheet">


    <!-- Theme Styles -->
    <link href="{{  asset('backend/css/alpha.min.css') }}" rel="stylesheet">
    <link href="{{  asset('backend/css/custom.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="login-page sign-in">
    <div class="loader">
        <div class="spinner-border text-primary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    <div class="alpha-app">
        <div class="container">
            <div class="login-container">
                <div class="row justify-content-center row align-items-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="card login-box">
                            <div class="card-body">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <h5 class="card-title">Sign In</h5>
                                    
                                    <div class="form-group">
                                        <label for="email">{{ __('Email') }}</label>
                                        <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="{{ old('email') }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">{{ __('Password') }}</label>
                                        <input type="password" class="form-control" id="password" placeholder="Password" name="password" required autocomplete="current-password">
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" value="" id="remember_me" name="remember">
                                        <label class="custom-control-label" for="defaultCheck1">
                                            {{ __('Remember me') }}
                                        </label>
                                    </div>
                                    <button type="submit" class="btn btn-primary float-right">Sign In</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Javascripts -->
    <script src="{{  asset('backend/plugins/jquery/jquery-3.4.1.min.js') }}"></script>
    <script src="{{  asset('backend/plugins/bootstrap/popper.min.js') }}"></script>
    <script src="{{  asset('backend/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{  asset('backend/plugins/waves/waves.min.js') }}"></script>
    <script src="{{  asset('backend/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{  asset('backend/js/alpha.min.js') }}"></script>
</body>
</html>