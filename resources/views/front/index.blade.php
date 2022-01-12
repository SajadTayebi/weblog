<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Test Site</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{asset('front/img/favicon.png')}}" rel="icon">
  <link href="{{asset('front/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- icon css -->
    <link rel="stylesheet" href="{{asset('front/css/ionicons/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/font-awesome/css/font-awesome.min.css')}}">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700"
    rel="stylesheet">

  <!-- Bootstrap CSS File -->
    <link rel="stylesheet" href="{{asset('front/css/app.css')}}">

    {!! htmlScriptTagJsApi() !!}
</head>

<body dir="rtl">
  <!--==========================
  Header
  ============================-->
  <header id="header">

    <div id="topbar">
      <div class="container">
        <div class="social-links">
          <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
          <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
          <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
          <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
        </div>
      </div>
    </div>

    <div class="container">

      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        <h1 class="text-light"><a href="#intro" class="scrollto"><span>Rapid</span></a></h1>
        <!-- <a href="#header" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a> -->
      </div>

        @include('front.layouts.nav')

    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  @include('front.layouts.intro')

  @yield('content')

  <!--==========================
    Footer
  ============================-->
  @include('front.layouts.footer')

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
    <script src="{{asset('js/app.js')}}"></script>

</body>

</html>
