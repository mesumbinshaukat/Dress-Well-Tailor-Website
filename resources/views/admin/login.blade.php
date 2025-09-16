<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <!-- title -->
	<title>DressWell Tailors</title>
	<!-- favicon -->
	<link rel="icon" type="image/png" sizes="18x18" href="{{asset('admintheme/css/logo.png')}}">
    <link href="{{asset('admintheme//css/style.css')}}" rel="stylesheet">
    <!---sweet alert----->

</head>
@include('sweetalert::alert')
<body class="h-100">
    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h3 class="text-center mb-4">Login</h3>
                                    <form method="POST" action="{{route('admin.make_login')}}">
                                        @csrf
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                @foreach ($errors->all() as $error)
                                                   <li>{{$error}}</li>
                                                @endforeach
                                            </div>
                                        @endif
                                        <div class="form-group">
                                            <label><strong>Email</strong></label>
                                            <input type="email" class="form-control" name="email" placeholder="Enter Email" value="{{old('email')}}" required autocomplete="email" autofocus>
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Password</strong></label>
                                            <input type="password" name="password" class="form-control" placeholder="Enter Password" required autocomplete="current-password" minlength="6">
                                        </div>
                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            <div class="form-group">
                                                <div class="form-check ml-2">
                                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" value="1">
                                                    <label class="form-check-label" for="remember">Remember me</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{asset('admintheme/vendor/global/global.min.js')}}"></script>
    <script src="{{asset('admintheme/js/quixnav-init.js')}}"></script>
    <script src="{{asset('admintheme/js/custom.min.js')}}"></script>

</body>

</html>