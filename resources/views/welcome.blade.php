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
        <link rel="stylesheet" href="assets/css/bootstrap.css" type="text/css" />
        <link rel="stylesheet" href="assets/css/font-awesome.min.css" type="text/css" />
        <link rel="stylesheet" href="assets/css/animate.css" type="text/css" />
        <link rel="stylesheet" href="assets/js/vendor/flexslider/flexslider.css" type="text/css" />
        <link rel="stylesheet" href="assets/js/vendor/magnific/magnific-popup.css" type="text/css" />
        <link rel="stylesheet" href="assets/js/vendor/owl/assets/owl.carousel.css" type="text/css" />
        <link rel="stylesheet" href="assets/js/vendor/bootstrap-select/css/bootstrap-select.min.css" type="text/css" />
        <link rel="stylesheet" href="assets/js/vendor/range-slider/css/styles.css" type="text/css" />

        <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
        <link rel="stylesheet" type="text/css" href="assets/js/vendor/rs-plugin/css/settings.css" media="screen" />

        <!-- animsition CSS -->
        <link rel="stylesheet" href="assets/js/vendor/animsition/css/animsition.min.css">
        <link rel="stylesheet" href="assets/css/style.css" type="text/css" />



        <!-- jQuery -->
        <script type="text/javascript" src="assets/js/vendor/jquery-1.11.2.min.js"></script>


        <title>FashionGH</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">


    </head>
    <body>

      <div class="container">
           <h1>Welcome FashionGH</h1>
        <div id="app">


        </div>

      </div>


      <script type="text/javascript" src="assets/js/vendor/bootstrap.min.js"></script>
      <script type="text/javascript" src="assets/js/vendor/superfish/js/superfish.min.js"></script>
      <script type="text/javascript" src="assets/js/vendor/jRespond/jRespond.min.js"></script>
      <script type="text/javascript" src="assets/js/vendor/smoothscroll/SmoothScroll.js"></script>
      <script type="text/javascript" src="assets/js/vendor/appear/jquery.appear.js"></script>
      <script type="text/javascript" src="assets/js/vendor/stellar/jquery.stellar.min.js"></script>
      <script type="text/javascript" src="assets/js/vendor/flexslider/jquery.flexslider-min.js"></script>
      <script type="text/javascript" src="assets/js/vendor/magnific/jquery.magnific-popup.min.js"></script>
      <script type="text/javascript" src="assets/js/vendor/owl/owl.carousel.min.js"></script>
      <script type="text/javascript" src="assets/js/vendor/jflickrfeed/jflickrfeed.min.js"></script>
      <script type="text/javascript" src="assets/js/vendor/tweet-js/jquery.tweet.min.js"></script>
      <script type="text/javascript" src="assets/js/vendor/countTo/jquery.countTo.js"></script>
      <script type="text/javascript" src="assets/js/vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
      <script type="text/javascript" src="assets/js/vendor/range-slider/js/plugin.js"></script>

      <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
      <script type="text/javascript" src="assets/js/vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
      <script type="text/javascript" src="assets/js/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

      <!-- animsition js -->
      <script src="assets/js/vendor/animsition/js/jquery.animsition.min.js"></script>







      <!-- ============================================
      ============== Custom JavaScripts ===============
      ============================================= -->


      <script type="text/javascript" src="assets/js/global.js"></script>
      <script src="{{ mix('js/app.js' )}}"></script>

    </body>
</html>
