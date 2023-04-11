<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="keywords" content="events moto">
    <meta name="author" content="cafl">
    <meta name="robots" content="">
    <link rel="apple-touch-icon" sizes="180x180" href="{{URL::asset('apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{URL::asset('favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{URL::asset('favicon-16x16.png')}}">
    <link rel="manifest" href="{{URL::asset('site.webmanifest')}}">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="Events Moto">
    <meta property="og:title" content="Events Moto">
    <meta property="og:description" content="Events Moto">
    <meta property="og:image" content="{{URL::asset('android-chrome-192x192.png')}}">
    <meta name="format-detection" content="telephone=no">
    <title>Events Moto </title>
    <!-- Favicon icon -->
    
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link href="{{URL::asset('vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/style.css')}}" rel="stylesheet">
</head>
    <body>
        <main>
            <div class="authincation h-100">
                <div class="container h-100">
                    <div class="row justify-content-center h-100 align-items-center">
                        <div class="col-md-6">
                            <div class="authincation-content">
                                <div class="row no-gutters">
                                    <div class="col-xl-12">
                                        <div class="auth-form">
                                            <div class="text-center mb-3">
                                                <img src="{{URL::asset('android-chrome-192x192.png')}}" alt="events moto">
                                            </div>
                                            <h4 class="text-center mb-4">Welcome to KOULNA MOTARD! 👋</h4>
                                            <p class="text-center">We have sent a verification code to your email. Please confirm your email address.
                                                <br>
                                                <span class="text-center" style="background-color:red;color:#fff;">If you don't find check on your Spam box!</span>
                                            </p>
                                            <form action="{{ route('validation.update', session('user_id')) }}" method="POST">
                                                @csrf
                                                {{ method_field('patch') }}
                                                <div class="form-group">
                                                    <label class="mb-1"><strong>Your OTP Code</strong></label>
                                                    <input type="number" name="otp" class="form-control" value="example 962413">
                                                </div>
                                                <div class="text-center">
                                                    <button type="submit" class="btn btn-danger btn-block">Confirm</button>
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
        </main>
        <!-- Required vendors -->
        <script src="{{URL::asset('vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
    </body>
</html>
