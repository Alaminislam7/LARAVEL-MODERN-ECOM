<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
   <meta charset="utf-8" />
   <title>Login</title>
   <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" />
   <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap-responsive.min.css') }}" />
   <link rel="stylesheet" href="{{ asset('assets/font-awesome/css/font-awesome.css') }}" />
   <link rel="stylesheet" href="{{ asset('css/backend_css/style.css') }}" />
   <link rel="stylesheet" href="{{ asset('css/backend_css/matrix-login.css') }}" />
   <link rel="stylesheet"  href="{{ asset('css/backend_css/style-responsive.css') }}"/>
   <link rel="stylesheet" href="{{ asset('css/backend_css/style-default.css') }}" id="style_color" />

</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="lock">
    <div class="lock-header">
        <!-- BEGIN LOGO -->
        <a class="center" id="logo" href="index.html">
            <img class="center" alt="logo" src="{{ asset('images/backend_images/logo.png')}}">
        </a>
        <!-- END LOGO -->
    </div>
    @if(Session::has('flash_message_error')) 
        <div class="alert alert-error alert-block login-form text-center">
            <button type="button" class="close" data-dismiss="alert">×</button> 
                <strong>{!! session('flash_message_error') !!}</strong>
        </div>
    @endif
    @if(Session::has('flash_message_success')) 
        <div class="alert alert-success login-form text-center alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button> 
                <strong>{!! session('flash_message_success') !!}</strong>
        </div>
    @endif
    <div class="login-wrap">
        <div class="metro single-size red">
            <div class="locked">
                <i class="icon-lock"></i>
                <span>Login</span>
            </div>
        </div>
        <form method="post" action="{{ url('admin-panel') }}">{{ csrf_field() }}
            <div class="metro double-size green">
                <div class="input-append lock-input">
                    <input type="text" name="email" class="" placeholder="Username">
                </div>
            </div>
            <div class="metro double-size yellow">
                <div class="input-append lock-input">
                    <input type="password" name="password" class="" placeholder="Password">
                </div>
            </div>
            <div class="metro single-size terques login">
                <button type="submit" value="login" class="btn login-btn">
                    Login
                    <i class=" icon-long-arrow-right"></i>
                </button>
            </div>
        </form>
        <div class="metro double-size navy-blue ">
            <a href="index.html" class="social-link">
                <i class="icon-facebook-sign"></i>
                <span>Facebook Login</span>
            </a>
        </div>
        <div class="metro single-size deep-red">
            <a href="index.html" class="social-link">
                <i class="icon-google-plus-sign"></i>
                <span>Google Login</span>
            </a>
        </div>
        <div class="metro double-size blue">
            <a href="index.html" class="social-link">
                <i class="icon-twitter-sign"></i>
                <span>Twitter Login</span>
            </a>
        </div>
        <div class="metro single-size purple">
            <a href="index.html" class="social-link">
                <i class="icon-skype"></i>
                <span>Skype Login</span>
            </a>
        </div>
        <div class="login-footer">
            <div class="remember-hint pull-left">
                <input type="checkbox" id=""> Remember Me
            </div>
            <div class="forgot-hint pull-right">
                <a id="forget-password" class="" href="javascript:;">Forgot Password?</a>
            </div>
        </div>
    </div>
</body>
<!-- END BODY -->
</html>