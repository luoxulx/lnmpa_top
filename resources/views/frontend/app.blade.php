<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
  <title>xx</title>

  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="description" content="">

  <!-- Google Fonts -->
  <link href='https://fonts.googleapis.com/css?family=Raleway:300,400%7COpen+Sans:400,400i,700%7CLibre+Baskerville:400i' rel='stylesheet'>

  <!-- Css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css" />
  <link rel="stylesheet" href="{{ asset('/a/css/sliders.css') }}" />
  <link rel="stylesheet" href="{{ asset('/a/css/style.css') }}" />
  <link rel="stylesheet" href="{{ asset('/a/css/responsive.css') }}" />
  <link rel="stylesheet" href="{{ asset('/a/css/spacings.css') }}" />
  <link rel="stylesheet" href="{{ asset('/a/css/animate.min.css') }}" />

  <!-- Favicons -->
  <link rel="shortcut icon" href="{{ asset('/a/img/favicon.ico') }}">
  <link rel="apple-touch-icon" href="{{ asset('/a/img/apple-touch-icon.png') }}">
  <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('/a/img/apple-touch-icon-72x72.png') }}">
  <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('/a/img/apple-touch-icon-114x114.png') }}">

</head>

<body class="relative">

    <!-- Preloader -->
    <div class="loader-mask">
      <div class="loader">
        <div></div>
        <div></div>
      </div>
    </div>

    <div class="main-wrapper oh">
      {{--@include('frontend.header')--}}
      @yield('content')
    </div> <!-- end main wrapper -->

<!-- jQuery Scripts -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{ asset('/a/js/plugins.js') }}"></script>
<!--<script type="text/javascript" src="js/twitterFetcher_min.js"></script>-->
<script type="text/javascript" src="{{ asset('/a/js/scripts.js') }}"></script>
</body>
</html>
