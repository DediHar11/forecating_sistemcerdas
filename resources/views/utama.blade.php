<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login SMK Gajah Mada Banyuwangi</title>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
 <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
 <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
 <![endif]-->


    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="codedthemes">
    <meta name="keywords"
        content=", Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="codedthemes">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/gajahmada.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('assets/images/gajahmada.png') }}" type="image/x-icon">

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!--ico Fonts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/icofont/css/icofont.css') }}">

    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}">

    <!-- waves css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/Waves/waves.min.css') }}">

    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}">

    <!-- Responsive.css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">

    <!--color css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/color/color-1.min.css') }}" id="color" />

</head>

<body>
    <section class="login p-fixed d-flex text-center bg-primary common-img-bg">
        <!-- Container-fluid starts -->
        <div class="container-fluid">
            <div class="row">

                <div class="col-sm-12">
                    <div class="login-card card-block">
                        <form class="md-float-material" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="text-center">
                                <img src="{{ asset('assets/images/gajahmada.png') }}" style="width:20%;height:60% "
                                alt="logo"><p style="font-family: 'Times New Roman';font-size:100%;font-weight:bold;color:black">SMK GAJAH MADA BANYUWANGI</p>
                            </div>
                            <h3 class="text-center txt-primary">
                                Login
                            </h3>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="md-input-wrapper">
                                        <input class="md-form-control" id="email" type="email" name="email"
                                            :value="old('email')" required autofocus autocomplete="username" />
                                        <label>Email</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="md-input-wrapper">
                                        <input class="md-form-control" id="password" type="password" name="password"
                                            required autocomplete="current-password" />
                                        <label>Password</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class="rkmd-checkbox checkbox-rotate checkbox-ripple m-b-25">
                                        <label class="input-checkbox checkbox-primary">
                                            <input type="checkbox" id="checkbox">
                                            <span class="checkbox"></span>
                                        </label>
                                        <div class="captions">Remember Me</div>

                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12 forgot-phone text-right">
                                    @if (Route::has('password.request'))
                                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                            href="{{ route('password.request') }}">
                                            {{ __('Forgot your password?') }}
                                        </a>
                                    @endif
                                    {{-- <a href="forgot-password.html" class="text-right f-w-600"> Forget Password?</a> --}}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-10 offset-xs-1">
                                    <button type="submit"
                                        class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">LOGIN</button>
                                </div>
                            </div>
                            <!-- <div class="card-footer"> -->
                            {{-- <div class="col-sm-12 col-xs-12 text-center">
                                <span class="text-muted">Don't have an account?</span>
                                <a href="register2.html" class="f-w-600 p-l-5">Sign up Now</a>
                            </div> --}}

                            <!-- </div> -->
                        </form>
                        <!-- end of form -->
                    </div>
                    <!-- end of login-card -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>

    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 9]>
<div class="ie-warning">
 <h1>Warning!!</h1>
 <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
 <div class="iew-container">
  <ul class="iew-download">
   <li>
    <a href="http://www.google.com/chrome/">
     <img src="assets/images/browser/chrome.png" alt="Chrome">
     <div>Chrome</div>
    </a>
   </li>
   <li>
    <a href="https://www.mozilla.org/en-US/firefox/new/">
     <img src="assets/images/browser/firefox.png" alt="Firefox">
     <div>Firefox</div>
    </a>
   </li>
   <li>
    <a href="http://www.opera.com">
     <img src="assets/images/browser/opera.png" alt="Opera">
     <div>Opera</div>
    </a>
   </li>
   <li>
    <a href="https://www.apple.com/safari/">
     <img src="assets/images/browser/safari.png" alt="Safari">
     <div>Safari</div>
    </a>
   </li>
   <li>
    <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
     <img src="assets/images/browser/ie.png" alt="">
     <div>IE (9 & above)</div>
    </a>
   </li>
  </ul>
 </div>
 <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
    <!-- Warning Section Ends -->
    <!-- Required Jqurey -->
    <script src="{{ asset('assets/plugins/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/tether/dist/js/tether.min.js') }}"></script>

    <!-- Required Fremwork -->
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- waves effects.js -->
    <script src="{{ asset('assets/plugins/Waves/waves.min.js') }}"></script>
    <!-- Custom js -->
    <script type="text/javascript" src="{{ asset('assets/pages/elements.js') }}"></script>



</body>

</html>
