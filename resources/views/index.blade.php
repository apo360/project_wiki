<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>
    <meta charset="UTF-8">
    <!-- Mobile Metas -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Site Metas -->
    <link rel="icon" href="images/favicon.png" type="image/gif" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>{{ config('app.name', 'Plataforma Académica') }}</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet" />

    <!-- owl carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />

    <!-- font awesome style -->
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />

    <!-- responsive style -->
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" />

    <style>

      /* Extra large devices (large laptops and desktops, 1200px and up) */
      @media only screen and (min-width: 1200px) {
          /* body {background: pink;} */
          .dropdown:hover .dropdown-menu {
          display: block;
          margin-top: 0;
        }
      }

      header{
        padding: 0px;
      }
    </style>

  </head>
  <body class = "antialiased">
    <!-- Inicio do Header (Cabeçalho e Menu) -->
    <header class = "z-index-2">
      <!-- header section strats -->
      @include('layouts.menu')
      <!-- end header section -->
    </header>
    <!-- Fim do Header (Cabeçalho e Menu) -->

    <section class = "z-index-n1">
      <div class = "container" id = "PAGE_CONTENT" style = "padding-top: 100px;">
      
      </div>
    </section>
 
    <!-- Inicio do Rodapé (Info para todas as páginas) -->
    <section class = "z-index-n1">
      <footer class="footer_section"> 
        <!-- footer section strats -->
        @include('layouts.footer')
        <!-- end footer section -->
      </footer>
    </section>
    <!-- Fim do Rodapé -->
 
    <!-- ********************************************************************************************************************************************* -->
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
    <script src="https://kit.fontawesome.com/998c60ef77.js" crossorigin="anonymous"></script>

    <!-- jQery -->
    <script src="/js/jquery-3.4.1.min.js"></script>

    <!-- owl carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <!-- custom js -->
    <script src="/js/custom.js"></script>

    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
    <!-- End Google Map -->
  </body>

  <script>
    $(document).ready(function(){
      $("#mySidebar a").click(function(e){
        e.preventDefault();
        var href = $(this).attr('href');
        $('#PAGE_CONTENT').load(href+"#PAGE_CONTENT");
      })
    })
  </script>
</html>
    
   <!-- Wrapper -->
