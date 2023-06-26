<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="SportBiz & Beyond est un blog, avec des article sur diver domaine sportif">
      <meta name="keywords" content=" sport, blog, article, dicipline sportive">
      <meta name="author" content="Elecode web developer for Mr Digital">

      <!-- title -->
      <title>SportBiz & Beyond</title>

      <!-- favicon -->
      <link rel="shortcut icon" type="image/png" href="/assets/img/logo icon sbb.png">
      <!-- google font -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
      <!-- Boostrap 5 -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <!-- fontawesome -->
      <link rel="stylesheet" href="/assets/css/all.min.css">
      <!-- bootstrap -->
      <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
      <!-- owl carousel -->
      <link rel="stylesheet" href="/assets/css/owl.carousel.css">
      <!-- magnific popup -->
      <link rel="stylesheet" href="/assets/css/magnific-popup.css">
      <!-- animate css -->
      <link rel="stylesheet" href="/assets/css/animate.css">
      <!-- mean menu css -->
      <link rel="stylesheet" href="/assets/css/meanmenu.min.css">
      <!-- main style -->
      <link rel="stylesheet" href="/assets/css/main.css">
      <!-- responsive -->
      <link rel="stylesheet" href="/assets/css/responsive.css">
      <!-- Livewire style-->
      <link data-minify="1" href="https://www.bacancytechnology.com/blog/wp-content/cache/min/1/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css?ver=1672663261" rel="stylesheet" crossorigin="anonymous">
      @livewireStyles

   </head>
   <body>
      
      <!--PreLoader-->
      <div class="loader">
         <div class="loader-inner">
               <div class="circle"></div>
         </div>
      </div>
      <!--PreLoader Ends-->

      <!-- includ header -->
      @include('layout.header')
      <!-- end includ header -->

      <!-- content section -->
      @yield('content')
      <!-- end content section -->

      <!-- includ footer -->
      @include('layout.footer')
      <!-- end inclus footer -->

      <!-- jquery -->
      <script src="/assets/js/jquery-1.11.3.min.js"></script>
      <!-- bootstrap -->
      <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
      <!-- count down -->
      <script src="/assets/js/jquery.countdown.js"></script>
      <!-- isotope -->
      <script src="/assets/js/jquery.isotope-3.0.6.min.js"></script>
      <!-- waypoints -->
      <script src="/assets/js/waypoints.js"></script>
      <!-- owl carousel -->
      <script src="/assets/js/owl.carousel.min.js"></script>
      <!-- magnific popup -->
      <script src="/assets/js/jquery.magnific-popup.min.js"></script>
      <!-- mean menu -->
      <script src="/assets/js/jquery.meanmenu.min.js"></script>
      <!-- sticker js -->
      <script src="/assets/js/sticker.js"></script>
      <!-- main js -->
      <script src="/assets/js/main.js"></script>
      <!-- Boostrap 5 -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <!-- LivewireScripts -->
      @livewireScripts
      <script src="https://www.bacancytechnology.com/blog/wp-content/cache/min/1/b810c1e775732c06a03141e7fcdf81a0.js" data-minify="1" defer></script>
   </body>
</html>      