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
	<link href="{{URL::asset('vendor/chartist/css/chartist.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('vendor/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('vendor/dropzone/dist/dropzone.css')}}" rel="stylesheet">
	<link href="{{URL::asset('vendor/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
	<link href="{{URL::asset('vendor/lightgallery/css/lightgallery.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/style.css')}}" rel="stylesheet">
</head>
    <body>
       <main>
            <!--*******************
                Preloader start
            ********************-->
            <div id="preloader">
                <div class="sk-three-bounce">
                    <div class="sk-child sk-bounce1">Events Moto</div>
                    <div class="sk-child sk-bounce2">Road To Marrakech</div>
                    <div class="sk-child sk-bounce3">Edition 3</div>
                </div>
            </div>
            <!--*******************
                Preloader end
            ********************-->

            <!--**********************************
                Main wrapper start
            ***********************************-->
            <div id="main-wrapper">

                <!--**********************************
                    Nav header start
                ***********************************-->
                <div class="nav-header">
                    <a href="{{URL::route('dashboard.index')}}" class="brand-logo">
                    <img src="{{URL::asset('favicon-32x32.png')}}" alt="events moto">
                    <svg class="brand-title" width="413.281" height="57.92" fill="none" viewBox="0 0 413.281 57.92" xmlns="http://www.w3.org/2000/svg">
                        <g id="svgGroup" stroke-linecap="round" fill-rule="evenodd" font-size="9pt" stroke="#000" stroke-width="0.25mm" fill="#000" style="stroke:#000;stroke-width:0.25mm">
                            <path class="svg-logo-path" d="M 255.84 56.72 L 245.92 56.72 L 245.92 0 L 246.72 0 L 269.28 26.6 L 291.68 0 L 292.56 0 L 292.56 56.72 L 282.64 56.72 L 282.64 32.8 L 283 23.36 L 280.16 27.68 L 269.2 40.56 L 258.24 27.68 L 255.4 23.36 L 255.84 32.8 L 255.84 56.72 Z M 30.72 56.72 L 0 56.72 L 0 0.96 L 29.12 0.96 L 29.12 9.68 L 10 9.68 L 10 22.72 L 25.2 22.72 L 25.2 31.2 L 10 31.2 L 10 47.68 L 30.72 47.68 L 30.72 56.72 Z M 129.36 56.72 L 119.12 56.72 L 119.12 16.88 L 128.4 16.88 L 128.6 22.12 A 13.969 13.969 0 0 1 130.962 19.381 A 18.217 18.217 0 0 1 132.96 17.82 A 10.273 10.273 0 0 1 136.143 16.41 Q 137.51 16.05 139.122 15.955 A 20.249 20.249 0 0 1 140.32 15.92 Q 146.4 15.92 149.36 19.76 Q 151.779 22.899 152.221 28.015 A 27.737 27.737 0 0 1 152.32 30.4 L 152.32 56.72 L 142.08 56.72 L 142.08 31.28 Q 142.08 27.96 140.68 25.9 A 4.557 4.557 0 0 0 137.428 23.912 A 7.002 7.002 0 0 0 136.4 23.84 A 6.82 6.82 0 0 0 131.58 25.805 A 8.856 8.856 0 0 0 131.48 25.9 A 6.901 6.901 0 0 0 129.417 30.225 A 9.504 9.504 0 0 0 129.36 31.28 L 129.36 56.72 Z M 192.24 52.96 L 195.2 45.36 A 19.494 19.494 0 0 0 196.893 46.59 Q 198.137 47.402 199.7 48.2 Q 202.44 49.6 206.08 49.6 Q 208.535 49.6 209.72 48.733 A 2.765 2.765 0 0 0 210.06 48.44 Q 211.2 47.28 211.2 45.92 A 2.874 2.874 0 0 0 210.6 44.197 Q 210.255 43.725 209.712 43.282 A 8.671 8.671 0 0 0 208.6 42.52 A 46.988 46.988 0 0 0 205.793 41.011 Q 204.329 40.284 202.667 39.566 A 75.504 75.504 0 0 0 202.56 39.52 Q 200.52 38.64 198.24 37.28 Q 195.96 35.92 194.34 33.68 A 8.183 8.183 0 0 1 193.03 30.755 Q 192.759 29.622 192.725 28.301 A 14.848 14.848 0 0 1 192.72 27.92 Q 192.72 22.52 196.66 19.3 A 13.019 13.019 0 0 1 201.079 16.989 Q 202.969 16.399 205.251 16.192 A 28.657 28.657 0 0 1 207.84 16.08 A 25.996 25.996 0 0 1 211.312 16.299 Q 213.112 16.542 214.635 17.054 A 14.181 14.181 0 0 1 215.7 17.46 Q 218.09 18.484 219.301 19.343 A 5.451 5.451 0 0 1 220 19.92 L 217.28 27.12 A 15.538 15.538 0 0 0 215.754 26.093 Q 214.941 25.609 213.978 25.146 A 28.789 28.789 0 0 0 213.32 24.84 Q 210.92 23.76 208.16 23.76 Q 205.12 23.76 203.92 24.56 A 2.592 2.592 0 0 0 202.805 26.253 A 4.186 4.186 0 0 0 202.72 27.12 A 3.264 3.264 0 0 0 203.777 29.529 Q 204.21 29.952 204.82 30.317 A 7.232 7.232 0 0 0 204.86 30.34 A 30.38 30.38 0 0 0 206.897 31.431 Q 207.959 31.952 209.173 32.461 A 52.895 52.895 0 0 0 210 32.8 Q 214.458 34.548 217.374 37.011 A 18.278 18.278 0 0 1 218.06 37.62 A 9.436 9.436 0 0 1 221.113 44.471 A 12.35 12.35 0 0 1 221.12 44.88 Q 221.12 48.16 219.6 51.02 A 10.438 10.438 0 0 1 216.646 54.438 A 13.964 13.964 0 0 1 214.72 55.66 Q 212.139 57.027 208.284 57.344 A 29.849 29.849 0 0 1 205.84 57.44 A 38.27 38.27 0 0 1 203.029 57.343 Q 201.659 57.242 200.493 57.035 A 16.575 16.575 0 0 1 198.7 56.62 A 24.007 24.007 0 0 1 197.084 56.084 Q 195.439 55.469 194.38 54.74 A 22.605 22.605 0 0 1 193.669 54.231 Q 192.939 53.686 192.504 53.247 A 4.494 4.494 0 0 1 192.24 52.96 Z M 109.52 40.08 L 85.52 40.08 A 15.886 15.886 0 0 0 85.958 43.147 Q 86.417 44.972 87.329 46.373 A 8.87 8.87 0 0 0 88.18 47.48 A 7.635 7.635 0 0 0 91.668 49.647 Q 92.909 50.032 94.41 50.128 A 16.111 16.111 0 0 0 95.44 50.16 A 12.856 12.856 0 0 0 98.26 49.831 A 17.647 17.647 0 0 0 100.76 49.06 A 15.675 15.675 0 0 0 102.519 48.259 Q 103.375 47.799 104.032 47.277 A 6.99 6.99 0 0 0 104.96 46.4 L 108.16 54 Q 106.83 54.898 104.213 55.976 A 56.465 56.465 0 0 1 103.1 56.42 A 16.634 16.634 0 0 1 100.435 57.183 Q 97.619 57.76 93.76 57.76 Q 88.625 57.76 85.008 56.113 A 13.841 13.841 0 0 1 82.92 54.94 Q 78.8 52.12 76.92 47.46 A 26.184 26.184 0 0 1 75.112 39.403 A 31.019 31.019 0 0 1 75.04 37.28 A 27.453 27.453 0 0 1 75.962 30.072 A 24.366 24.366 0 0 1 77.18 26.62 Q 79.32 21.76 83.46 18.84 A 15.727 15.727 0 0 1 89.863 16.234 A 21.338 21.338 0 0 1 93.6 15.92 Q 99 15.92 102.438 17.801 A 10.518 10.518 0 0 1 106.12 21.1 Q 108.755 24.934 109.44 31.125 A 42.245 42.245 0 0 1 109.68 35.76 Q 109.68 36.6 109.64 37.88 Q 109.609 38.86 109.555 39.629 A 27.397 27.397 0 0 1 109.52 40.08 Z M 165.44 43.76 L 165.44 25.28 L 160.24 25.28 L 160.24 16.88 L 165.84 16.88 L 166.4 8.48 L 175.12 4.72 L 175.12 16.88 L 184.96 16.88 L 184.96 25.28 L 175.12 25.28 L 175.12 43.52 A 19.461 19.461 0 0 0 175.181 45.126 Q 175.311 46.69 175.717 47.65 A 3.426 3.426 0 0 0 176.1 48.34 A 3.108 3.108 0 0 0 178.356 49.656 A 4.067 4.067 0 0 0 178.8 49.68 A 7.653 7.653 0 0 0 180.836 49.391 A 10.592 10.592 0 0 0 182.52 48.76 A 19.724 19.724 0 0 0 183.82 48.094 Q 184.418 47.757 184.906 47.415 A 8.969 8.969 0 0 0 185.6 46.88 L 187.52 54.96 A 9.307 9.307 0 0 1 186.342 55.663 Q 185.445 56.118 184.3 56.5 Q 182.32 57.16 180.3 57.54 Q 178.943 57.795 177.902 57.879 A 11.797 11.797 0 0 1 176.96 57.92 Q 170.2 57.92 167.82 54.4 Q 165.44 50.88 165.44 43.76 Z M 350.32 43.76 L 350.32 25.28 L 345.12 25.28 L 345.12 16.88 L 350.72 16.88 L 351.28 8.48 L 360 4.72 L 360 16.88 L 369.84 16.88 L 369.84 25.28 L 360 25.28 L 360 43.52 A 19.461 19.461 0 0 0 360.061 45.126 Q 360.191 46.69 360.597 47.65 A 3.426 3.426 0 0 0 360.98 48.34 A 3.108 3.108 0 0 0 363.236 49.656 A 4.067 4.067 0 0 0 363.68 49.68 A 7.653 7.653 0 0 0 365.716 49.391 A 10.592 10.592 0 0 0 367.4 48.76 A 19.724 19.724 0 0 0 368.7 48.094 Q 369.298 47.757 369.786 47.415 A 8.969 8.969 0 0 0 370.48 46.88 L 372.4 54.96 A 9.307 9.307 0 0 1 371.222 55.663 Q 370.325 56.118 369.18 56.5 Q 367.2 57.16 365.18 57.54 Q 363.823 57.795 362.782 57.879 A 11.797 11.797 0 0 1 361.84 57.92 Q 355.08 57.92 352.7 54.4 Q 350.32 50.88 350.32 43.76 Z M 56.8 56.72 L 49.68 56.72 L 33.52 16.88 L 44.72 16.88 L 51.6 36.8 L 53.36 43.36 L 54.96 36.8 L 61.6 16.88 L 72.16 16.88 L 56.8 56.72 Z M 315.463 56.868 A 22.495 22.495 0 0 0 321.04 57.52 Q 329.88 57.52 334.66 51.86 Q 337.722 48.234 338.823 43.04 A 30.49 30.49 0 0 0 339.44 36.72 Q 339.44 32.535 338.54 29.095 A 19.525 19.525 0 0 0 334.82 21.58 A 14.751 14.751 0 0 0 326.823 16.559 A 21.989 21.989 0 0 0 321.36 15.92 A 23.936 23.936 0 0 0 316.956 16.307 A 16.265 16.265 0 0 0 307.6 21.4 A 16.799 16.799 0 0 0 305.515 24.264 Q 302.64 29.228 302.64 36.72 A 36.787 36.787 0 0 0 302.706 38.949 Q 302.904 42.206 303.695 44.938 A 18.385 18.385 0 0 0 307.44 52 A 15.411 15.411 0 0 0 315.463 56.868 Z M 389.303 56.868 A 22.495 22.495 0 0 0 394.88 57.52 Q 403.72 57.52 408.5 51.86 Q 411.562 48.234 412.663 43.04 A 30.49 30.49 0 0 0 413.28 36.72 Q 413.28 32.535 412.38 29.095 A 19.525 19.525 0 0 0 408.66 21.58 A 14.751 14.751 0 0 0 400.663 16.559 A 21.989 21.989 0 0 0 395.2 15.92 A 23.936 23.936 0 0 0 390.796 16.307 A 16.265 16.265 0 0 0 381.44 21.4 A 16.799 16.799 0 0 0 379.355 24.264 Q 376.48 29.228 376.48 36.72 A 36.787 36.787 0 0 0 376.546 38.949 Q 376.744 42.206 377.535 44.938 A 18.385 18.385 0 0 0 381.28 52 A 15.411 15.411 0 0 0 389.303 56.868 Z M 321.2 49.52 A 6.291 6.291 0 0 0 327.213 45.746 Q 328.8 42.57 328.8 36.72 A 32.631 32.631 0 0 0 328.533 32.343 Q 327.877 27.527 325.612 25.439 A 6.255 6.255 0 0 0 321.2 23.84 A 7.555 7.555 0 0 0 318.47 24.313 Q 316.669 25.005 315.439 26.709 A 8.47 8.47 0 0 0 315.36 26.82 A 8.99 8.99 0 0 0 314.241 29.133 Q 313.28 32.017 313.28 36.72 A 36.008 36.008 0 0 0 313.427 40.098 Q 313.833 44.386 315.36 46.56 A 6.6 6.6 0 0 0 320.121 49.455 A 8.687 8.687 0 0 0 321.2 49.52 Z M 395.04 49.52 A 6.291 6.291 0 0 0 401.053 45.746 Q 402.64 42.57 402.64 36.72 A 32.631 32.631 0 0 0 402.373 32.343 Q 401.717 27.527 399.452 25.439 A 6.255 6.255 0 0 0 395.04 23.84 A 7.555 7.555 0 0 0 392.31 24.313 Q 390.509 25.005 389.279 26.709 A 8.47 8.47 0 0 0 389.2 26.82 A 8.99 8.99 0 0 0 388.081 29.133 Q 387.12 32.017 387.12 36.72 A 36.008 36.008 0 0 0 387.267 40.098 Q 387.672 44.386 389.2 46.56 A 6.6 6.6 0 0 0 393.961 49.455 A 8.687 8.687 0 0 0 395.04 49.52 Z M 85.44 33.84 L 99.52 33.84 A 38.352 38.352 0 0 0 99.455 31.521 Q 99.323 29.348 98.923 27.892 A 9.171 9.171 0 0 0 98.78 27.42 A 9.277 9.277 0 0 0 98.293 26.224 Q 97.66 24.951 96.76 24.36 A 5.151 5.151 0 0 0 94.069 23.524 A 6.26 6.26 0 0 0 93.84 23.52 A 8.702 8.702 0 0 0 91.276 23.877 A 6.491 6.491 0 0 0 87.72 26.54 A 13.041 13.041 0 0 0 85.818 31.046 A 17.243 17.243 0 0 0 85.44 33.84 Z"/>
                        </g>
                    </svg>
                    </a>

                    <div class="nav-control">
                        <div class="hamburger">
                            <span class="line"></span><span class="line"></span><span class="line"></span>
                        </div>
                    </div>
                </div>
                <!--**********************************
                    Nav header end
                ***********************************-->
                
                <!--**********************************
                    Header start
                ***********************************-->
                <div class="header">
                    <div class="header-content">
                        <nav class="navbar navbar-expand">
                            <div class="collapse navbar-collapse justify-content-between">
                                <div class="header-left">
                                    <div class="input-group search-area right d-lg-inline-flex d-none">
                                        <input type="text" class="form-control" placeholder="Find something here...">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <a href="javascript:void(0)">
                                                    <i class="flaticon-381-search-2"></i>
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <ul class="navbar-nav header-right main-notification">
                                    <li class="nav-item dropdown notification_dropdown">
                                        <a class="nav-link bell dz-theme-mode" href="#">
                                            <i id="icon-light" class="fa fa-sun-o"></i>
                                            <i id="icon-dark" class="fa fa-moon-o"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item dropdown notification_dropdown">
                                        <a class="nav-link bell dz-fullscreen" href="#">
                                            <svg id="icon-full" viewbox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3" style="stroke-dasharray: 37, 57; stroke-dashoffset: 0;"></path></svg>
                                            <svg id="icon-minimize" width="20" height="20" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minimize"><path d="M8 3v3a2 2 0 0 1-2 2H3m18 0h-3a2 2 0 0 1-2-2V3m0 18v-3a2 2 0 0 1 2-2h3M3 16h3a2 2 0 0 1 2 2v3" style="stroke-dasharray: 37, 57; stroke-dashoffset: 0;"></path></svg>
                                        </a>
                                    </li>
                                    <li class="nav-item dropdown notification_dropdown">
                                        <a class="nav-link  ai-icon" href="javascript:void(0)" role="button" data-toggle="dropdown">
                                        <svg class="bell-icon" width="24" height="24" viewbox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M22.75 15.8385V13.0463C22.7471 10.8855 21.9385 8.80353 20.4821 7.20735C19.0258 5.61116 17.0264 4.61555 14.875 4.41516V2.625C14.875 2.39294 14.7828 2.17038 14.6187 2.00628C14.4546 1.84219 14.2321 1.75 14 1.75C13.7679 1.75 13.5454 1.84219 13.3813 2.00628C13.2172 2.17038 13.125 2.39294 13.125 2.625V4.41534C10.9736 4.61572 8.97429 5.61131 7.51794 7.20746C6.06159 8.80361 5.25291 10.8855 5.25 13.0463V15.8383C4.26257 16.0412 3.37529 16.5784 2.73774 17.3593C2.10019 18.1401 1.75134 19.1169 1.75 20.125C1.75076 20.821 2.02757 21.4882 2.51969 21.9803C3.01181 22.4724 3.67904 22.7492 4.375 22.75H9.71346C9.91521 23.738 10.452 24.6259 11.2331 25.2636C12.0142 25.9013 12.9916 26.2497 14 26.2497C15.0084 26.2497 15.9858 25.9013 16.7669 25.2636C17.548 24.6259 18.0848 23.738 18.2865 22.75H23.625C24.321 22.7492 24.9882 22.4724 25.4803 21.9803C25.9724 21.4882 26.2492 20.821 26.25 20.125C26.2486 19.117 25.8998 18.1402 25.2622 17.3594C24.6247 16.5786 23.7374 16.0414 22.75 15.8385ZM7 13.0463C7.00232 11.2113 7.73226 9.45223 9.02974 8.15474C10.3272 6.85726 12.0863 6.12732 13.9212 6.125H14.0788C15.9137 6.12732 17.6728 6.85726 18.9703 8.15474C20.2677 9.45223 20.9977 11.2113 21 13.0463V15.75H7V13.0463ZM14 24.5C13.4589 24.4983 12.9316 24.3292 12.4905 24.0159C12.0493 23.7026 11.716 23.2604 11.5363 22.75H16.4637C16.284 23.2604 15.9507 23.7026 15.5095 24.0159C15.0684 24.3292 14.5411 24.4983 14 24.5ZM23.625 21H4.375C4.14298 20.9999 3.9205 20.9076 3.75644 20.7436C3.59237 20.5795 3.50014 20.357 3.5 20.125C3.50076 19.429 3.77757 18.7618 4.26969 18.2697C4.76181 17.7776 5.42904 17.5008 6.125 17.5H21.875C22.571 17.5008 23.2382 17.7776 23.7303 18.2697C24.2224 18.7618 24.4992 19.429 24.5 20.125C24.4999 20.357 24.4076 20.5795 24.2436 20.7436C24.0795 20.9076 23.857 20.9999 23.625 21Z" fill="#EB8153"></path>
                                            </svg>
                                            <div class="pulse-css"></div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <div id="dlab_W_Notification1" class="widget-media dz-scroll p-3 height380">
                                                <ul class="timeline">
                                                    <li>
                                                        <div class="timeline-panel">
                                                            <div class="media mr-2 media-primary">
                                                                <i class="fa fa-home"></i>
                                                            </div>
                                                            <div class="media-body">
                                                                <h6 class="mb-1">Road To Marrakech</h6>
                                                                <small class="d-block">29 April 2023 - 02:26 PM</small>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <a class="all-notification" href="javascript:void(0)">See all notifications <i class="ti-arrow-right"></i></a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown header-profile">
                                        <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                            <img src="{{URL::asset('images/' . Auth::user()->avatar)}}" width="20" alt="events moto">
                                            <div class="header-info">
                                                <span>{{Str::ucfirst(Auth::user()->name)}}</span>
                                                @if (Auth::user()->type == 0)
                                                <small>
                                                    Club
                                                </small>
                                                @elseif (Auth::user()->type == 1)
                                                <small>
                                                    Company
                                                </small>
                                                @elseif (Auth::user()->type == 2)
                                                <small>
                                                    Media
                                                </small>
                                                @elseif (Auth::user()->type == 3)
                                                <small>
                                                    Rider
                                                </small>                                                                                                        
                                                @endif
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="{{URL('users/' . Auth::user()->id_user)}}" class="dropdown-item ai-icon">
                                                <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                                <span class="ml-2">Profile </span>
                                            </a>
                                            <a href="email-inbox.html" class="dropdown-item ai-icon">
                                                <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" class="text-success" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                                <span class="ml-2">Inbox </span>
                                            </a>
                                            <a class="dropdown-item ai-icon" href="{{ route('logout') }}" 
                                                onclick="event.preventDefault(); 
                                                document.getElementById('logout-form').submit();">
                                            
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                                @csrf
                                            </form>
                                                <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                                <span class="ml-2">Logout </span>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                        <div class="sub-header">
                            <div class="d-flex align-items-center flex-wrap mr-auto">
                                <h5 class="dashboard_bar">Dashboard</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!--**********************************
                    Header end ti-comment-alt
                ***********************************-->

                <!--**********************************
                    Sidebar start
                ***********************************-->
                <div class="deznav">
                    <div class="deznav-scroll">
                        <div class="main-profile">
                        <a href="{{URL('users/' . Auth::user()->id_user)}}">
                            <div class="image-bx">
                                <img src="{{URL::asset('images/' . Auth::user()->avatar)}}" alt="events moto">
                            </div>
                        </a>
                            <h5 class="name"><span class="font-w400">Hello,</span> {{Str::ucfirst(Auth::user()->name)}}</h5>
                        </div>
                        <ul class="metismenu" id="menu">
                            <li class="nav-label first">Main Menu</li>
                            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                                <i class="fa fa-user font-18 align-middle mr-2"></i>
                                    <span class="nav-text">My Profile</span>
                                </a>
                                <ul aria-expanded="false">
                                    <li><a href="{{URL('users/' . Auth::user()->id_user)}}">Show My Profile</a></li>
                                </ul>
                            </li>
                            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                                <i class="fa fa-paper-plane font-18 align-middle mr-2"></i>
                                    <span class="nav-text">My Messages</span>
                                </a>
                                <ul aria-expanded="false">
                                    <li><a href="{{route('messages.create')}}">Send Message</a></li>
                                    <li><a href="app-profilhe.html" aria-expanded="false">Inbox<span class="badge badge-xs badge-danger">New</span></a></li>
                                </ul>
                            </li>
                            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                                    <i class="fa fa-calendar font-18 align-middle mr-2"></i>
                                    <span class="nav-text">Events</span>
                                </a>
                            <ul aria-expanded="false">
                                    @if (Auth::user()->type == 0 || Auth::user()->type == 1)
                                    <li><a href="{{route('events.create')}}">Add Event</a></li>
                                    <li><a href="{{route('events.myevents')}}">My Events</a></li>
                                    @endif    
                                    <li><a href="{{route('events.index')}}" aria-expanded="false">All Events<span class="badge badge-xs badge-danger">New</span></a></li>
                                </ul>
                            </li>    
                        @if (Auth::user()->type == 0)
                            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                                <i class="fa fa-users font-18 align-middle mr-2"></i>
                                    <span class="nav-text">My Members</span>
                                </a>
                                <ul aria-expanded="false">
                                    <li><a href="{{route('members.index')}}">New Request<span class="badge badge-xs badge-danger">New</span></a></li>
                                    <li><a href="{{route('members.create')}}" aria-expanded="false">All Members</a></li>
                                </ul>
                            </li>                        
                        @endif
                        </ul>
                        <div class="copyright">
                            <p><strong>CAFL</strong> © 2023 All Rights Reserved</p>
                        </div>
                    </div>
                </div>
                <!--**********************************
                    Sidebar end
                ***********************************-->
                
                <!--**********************************
                    Content body start
                ***********************************-->
                    @yield('content')
                <!--**********************************
                    Content body end
                ***********************************-->

                <!--**********************************
                    Footer start
                ***********************************-->
                <div class="footer">
                    <div class="copyright">
                        <p>Copyright © Designed &amp; Developed by <a href="{{URL::route('dashboard.index')}}" target="_blank">CAFL</a> 2021</p>
                    </div>
                </div>
                <!--**********************************
                    Footer end
                ***********************************-->
            </div>
       </main>
        <!-- Required vendors -->
        <script src="{{URL::asset('vendor/global/global.min.js')}}"></script>
        <script src="{{URL::asset('vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
        <script src="{{URL::asset('vendor/dropzone/dist/dropzone.js')}}"></script>
        <script src="{{URL::asset('vendor/lightgallery/js/lightgallery-all.min.js')}}"></script>
        <script src="{{URL::asset('vendor/chart.js/Chart.bundle.min.js')}}"></script>

        <!-- Datatable -->
        <script src="{{URL::asset('vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{URL::asset('js/plugins-init/datatables.init.js')}}"></script>
        
        <!-- Chart piety plugin files -->
        <script src="{{URL::asset('vendor/peity/jquery.peity.min.js')}}"></script>
        
        <!-- Apex Chart -->
        <script src="{{URL::asset('vendor/apexchart/apexchart.js')}}"></script>
        
        <!-- Dashboard 1 -->
        <script src="{{URL::asset('js/dashboard/dashboard-1.js')}}"></script>
        
        <script src="{{URL::asset('vendor/owl-carousel/owl.carousel.js')}}"></script>
        <script src="{{URL::asset('js/custom.min.js')}}"></script>
        <script src="{{URL::asset('js/deznav-init.js')}}"></script>
        <script src="{{URL::asset('js/demo.js')}}"></script>
        <script src="{{URL::asset('js/styleSwitcher.js')}}"></script>
    <script src="js/custom.min.js"></script>
	<script src="js/deznav-init.js"></script>
    <script src="js/demo.js"></script>
    <script src="js/styleSwitcher.js"></script>

    </body>
</html>