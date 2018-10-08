<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script>window.Laravel ={csrfToken:'{{ csrf_token() }}'}</script>
        <meta name="csrf-token" content="{{ csrf_token() }}">


        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        


        <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic|Raleway:300,400,500,600,700|Open+Sans+Condensed:700" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" type="text/css" />
        <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" type="text/css" />
        <link rel="stylesheet" href="{{asset('css/animate.css')}}" type="text/css" />
        <link rel="stylesheet" href="{{asset('js/vendor/flexslider/flexslider.css')}}" type="text/css" />
        <link rel="stylesheet" href="{{asset('js/vendor/magnific/magnific-popup.css')}}" type="text/css" />
        <link rel="stylesheet" href="{{asset('js/vendor/owl/assets/owl.carousel.css')}}" type="text/css" />
        <link rel="stylesheet" href="{{asset('js/vendor/bootstrap-select/css/bootstrap-select.min.css')}}" type="text/css" />
        <link rel="stylesheet" href="{{asset('js/vendor/range-slider/css/styles.css')}}" type="text/css" />

        <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
        <link rel="stylesheet" type="text/css" href="{{asset('js/vendor/rs-plugin/css/settings.css')}}" media="screen" />

        <!-- animsition CSS -->
        <link rel="stylesheet" href="{{asset('js/vendor/animsition/css/animsition.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css" />



        <!-- jQuery -->
        <script type="text/javascript" src="{{asset('js/vendor/jquery-1.11.2.min.js')}}"></script>


        <title>FashionGH</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">


    </head>
    <body>

      @yield('content')




      <script type="text/javascript" src="{{asset('js/vendor/bootstrap.min.js')}}"></script>
      <script type="text/javascript" src="{{asset('js/vendor/superfish/js/superfish.min.js')}}"></script>
      <script type="text/javascript" src="{{asset('js/vendor/jRespond/jRespond.min.js')}}"></script>
      <script type="text/javascript" src="{{asset('js/vendor/smoothscroll/SmoothScroll.js')}}"></script>
      <script type="text/javascript" src="{{asset('js/vendor/appear/jquery.appear.js')}}"></script>
      <script type="text/javascript" src="{{asset('js/vendor/stellar/jquery.stellar.min.js')}}"></script>
      <script type="text/javascript" src="{{asset('js/vendor/flexslider/jquery.flexslider-min.js')}}"></script>
      <script type="text/javascript" src="{{asset('js/vendor/magnific/jquery.magnific-popup.min.js')}}"></script>
      <script type="text/javascript" src="{{asset('js/vendor/owl/owl.carousel.min.js')}}"></script>
      <script type="text/javascript" src="{{asset('js/vendor/jflickrfeed/jflickrfeed.min.js')}}"></script>
      <script type="text/javascript" src="{{asset('js/vendor/tweet-js/jquery.tweet.min.js')}}"></script>
      <script type="text/javascript" src="{{asset('js/vendor/countTo/jquery.countTo.js')}}"></script>
      <script type="text/javascript" src="{{asset('js/vendor/bootstrap-select/js/bootstrap-select.min.js')}}"></script>
      <script type="text/javascript" src="{{asset('js/vendor/range-slider/js/plugin.js')}}"></script>

      <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
      <script type="text/javascript" src="{{asset('js/vendor/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
      <script type="text/javascript" src="{{asset('js/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>

      <!-- animsition js -->
      <script src="{{asset('js/vendor/animsition/js/jquery.animsition.min.js')}}"></script>







      <!-- ============================================
      ============== Custom JavaScripts ===============
      ============================================= -->

<script src="{{ mix('js/app.js' )}}"></script>
      <script type="text/javascript" src="{{asset('js/global.js')}}"></script>


<script>
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });

      </script>
    </body>
</html>
