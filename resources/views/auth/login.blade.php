<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bootstrap 4 admin template</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet">
   <link rel="stylesheet" href="{{asset('assets/styles/css/themes/lite-purple.min.css')}}">
</head>

<body>
    <div class="auth-layout-wrap" style="background-image: url({{asset('assets/images/photo-wide-4.jpg')}})">
        <div class="auth-content">
            <div class="card o-hidden">
                <div class="row">
                    <div class="col-md-6">
                        <div class="p-4">
                            <div class="auth-logo text-center mb-4">
                                <img src="assets/images/logo-lape.png" alt="">
                            </div>
                            <h1 class="mb-3 text-18">{{ __('Đăng Nhập') }}</h1>
                            <form method="POST" action="{{ route('login') }}">
                            	@csrf
                            	
                                <div class="form-group">
                                    <label for="email">{{ __('Email') }}</label>
                                    <input id="email" class="form-control form-control-rounded" type="email">
                                    @if ($errors->has('email'))
	                                    <span class="invalid-feedback" role="alert">
	                                        <strong>{{ $errors->first('email') }}</strong>
	                                    </span>
                                	@endif
                                </div>
                                <div class="form-group">
                                    <label for="password">{{ __('Mật khẩu') }}</label>
                                    <input id="password" class="form-control form-control-rounded" type="password">
	                                @if ($errors->has('password'))
	                                    <span class="invalid-feedback" role="alert">
	                                        <strong>{{ $errors->first('password') }}</strong>
	                                    </span>
	                                @endif                                    
                                </div>
                                <button class="btn btn-rounded btn-primary btn-block mt-2">{{ __('Đăng Nhập') }}</button>

                            </form>

                            <div class="mt-3 text-center">
                                <a href="forgot.html" class="text-muted"><u>{{ __('Quên mật khẩu?') }}</u></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 text-center " style="background-size: cover;background-image: url(./assets/images/photo-long-3.jpg)">
                        <div class="pr-3 auth-right">
                            <a class="btn btn-rounded btn-outline-primary btn-outline-email btn-block btn-icon-text" href="signup.html">
                                <i class="i-Mail-with-At-Sign"></i> Sign up with Email
                            </a>
                            <a class="btn btn-rounded btn-outline-primary btn-outline-google btn-block btn-icon-text">
                                <i class="i-Google-Plus"></i> Đăng nhập với Google
                            </a>
                            <a class="btn btn-rounded btn-outline-primary btn-block btn-icon-text btn-outline-facebook">
                                <i class="i-Facebook-2"></i> Sign up with Facebook
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <script src="{{asset('assets/js/script.js')}}"></script>
</body>

</html>