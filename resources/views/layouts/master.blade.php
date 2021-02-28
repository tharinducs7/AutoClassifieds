

<!DOCTYPE html>
<html lang="en">

   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="author" content="Theme Region">
      <meta name="description" content="">
      <title></title>
      <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.min.css">
      <link rel="stylesheet" href="{{ asset('assets') }}/css/font-awesome.min.css">
      <link rel="stylesheet" href="{{ asset('assets') }}/css/icofont.css">
      <link rel="stylesheet" href="{{ asset('assets') }}/css/owl.carousel.css">
      <link rel="stylesheet" href="{{ asset('assets') }}/css/slidr.css">
      <link rel="stylesheet" href="{{ asset('assets') }}/css/main.css">
      <link id="preset" rel="stylesheet" href="{{ asset('assets') }}/css/presets/preset1.css">
      <link rel="stylesheet" href="{{ asset('assets') }}/css/responsive.css">
      <link href='https://fonts.googleapis.com/css?family=Ubuntu:400,500,700,300' rel='stylesheet' type='text/css'>
      <link href='https://fonts.googleapis.com/css?family=Signika+Negative:400,300,600,700' rel='stylesheet' type='text/css'>

   </head>
   <body>

    @include('layouts.header')

      <section id="main" class="clearfix category-page main-categories">
         <div class="container">
            @yield('content')
       
          



         </div>
      </section>


      <section id="something-sell" class="clearfix parallax-section">
         <div class="container">
            <div class="row">
               <div class="col-sm-12 text-center">
                  <h2 class="title">Do you have something-sell?</h2>
                  <h4>Post your ad for free on Trade.com</h4>
                  <a href="ad-post.html" class="btn btn-primary">Post Your Ad</a>
               </div>
            </div>
         </div>
      </section>


      @include('layouts.footer')

      <script src="{{ asset('assets') }}/js/jquery.min.js" type="8d5faece2c8a50ba25a09be9-text/javascript"></script>
      <script src="{{ asset('assets') }}/js/popper.min.js" type="8d5faece2c8a50ba25a09be9-text/javascript"></script>
      <script src="{{ asset('assets') }}/js/modernizr.min.js" type="8d5faece2c8a50ba25a09be9-text/javascript"></script>
      <script src="{{ asset('assets') }}/js/bootstrap.min.js" type="8d5faece2c8a50ba25a09be9-text/javascript"></script>
      <script src="{{ asset('assets') }}/js/gmaps.min.js" type="8d5faece2c8a50ba25a09be9-text/javascript"></script>
      <script src="{{ asset('assets') }}/js/owl.carousel.min.js" type="8d5faece2c8a50ba25a09be9-text/javascript"></script>
      <script src="{{ asset('assets') }}/js/scrollup.min.js" type="8d5faece2c8a50ba25a09be9-text/javascript"></script>
      <script src="{{ asset('assets') }}/js/price-range.js" type="8d5faece2c8a50ba25a09be9-text/javascript"></script>
      <script src="{{ asset('assets') }}/js/jquery.countdown.js" type="8d5faece2c8a50ba25a09be9-text/javascript"></script>
      <script src="{{ asset('assets') }}/js/switcher.js" type="8d5faece2c8a50ba25a09be9-text/javascript"></script>
      <script src="{{ asset('assets') }}/js/custom.js" type="8d5faece2c8a50ba25a09be9-text/javascript"></script>
      <script src="{{ asset('assets') }}/js/rocket-loader.min.js" data-cf-settings="8d5faece2c8a50ba25a09be9-|49" defer=""></script>
   </body>
</html>