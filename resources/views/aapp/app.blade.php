<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="icon" href="asset/img/icon.png">

  <title>@yield('title')</title>

  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 

  {{-- style --}}
  <link rel="stylesheet" type="text/css" href="{{asset('asset/css/materialize.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('asset/css/animation.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('asset/css/style.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('asset/css/hy-color.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('asset/font-awesome/css/font-awesome.min.css')}}">

  {{-- datatable --}}
  <link rel="stylesheet" type="text/css" href="{{asset('asset/css/dataTable.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('asset/css/dataTable-Button.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('asset/css/dataTable-Select.css')}}">

  @yield('css-plus')

  <style type="text/css">
    body {
      display: flex;
      min-height: 100vh;
      flex-direction: column;
    }

    main {
      flex: 1 0 auto;
    }
  </style>
</head>

<body>

  @yield('nav-landing-page')
  @yield('content-landing-page')
  @yield('footer-landing-page')

  @yield('nav-user')
  @yield('sidenav-user')
  @yield('content-user')
  

  @yield('nav-staff')
  @yield('content-staff')
  @yield('footer-staff')

  @yield('nav-admin')
  @yield('content-admin')
  @yield('footer-admin')

  {{-- style --}}
  @include('sweetalert::alert')
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src='https://cdn.jsdelivr.net/clipboard.js/1.5.10/clipboard.min.js'></script>
  <script src='https://cdn.datatables.net/plug-ins/preview/searchPane/dataTables.searchPane.min.js'></script>
  <script type="text/javascript" src="{{asset('asset/js/materialize.min.js')}}"></script>

  {{-- datatable --}}
  <script type="text/javascript" src="{{asset('asset/js/jquery.dataTables.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('asset/js/dataTables.select.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('asset/js/dataTables.buttons.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('asset/js/dataTables.checkboxes.js')}}"></script>

  @yield('js-plus')

  <script>
    $(document).ready(function(){
      $('.collapsible').collapsible();
    });
    
    $(document).ready(function() {
      $(".carousel.carousel-slider").carousel({
        dist: 0,
        padding: 0,
        fullWidth: true,
        indicators: true,
        duration: 100,
      });

      autoplay()   
      function autoplay() {
        $('.carousel').carousel('next');
        setTimeout(autoplay, 6000);
      }

      $(document).ready(function(){
        $('.sidenav').sidenav();
      });

    });
  </script>
  <script type="text/javascript">

    $(window).scroll(function() {
      if ($(document).scrollTop() > 50) {
        $('.hy-nav').addClass('hy-nav-2');
        $('.hy-nav-a').addClass('hy-nav-a-2');
        $('.hy-btn-bor-ijo-nav').addClass('hy-btn-bor-wh-nav');
        $('.navbar-fixed .hy-nav .nav-wrapper .brand-logo img').attr('src','{{asset('asset/img/logo2.png')}}');
      } else {
        $('.hy-nav').removeClass('hy-nav-2');
        $('.hy-nav-a').removeClass('hy-nav-a-2');
        $('.hy-btn-bor-ijo-nav').removeClass('hy-btn-bor-wh-nav');
        $('.navbar-fixed .hy-nav .nav-wrapper .brand-logo img').attr('src','{{asset('asset/img/logo-hy.png')}}');
      }
    });

    $(document).ready(function() {

      function isScrolledIntoView(elem) {
        var docViewTop = $(window).scrollTop();
        var docViewBottom = docViewTop + $(window).height();

        var elemTop = $(elem).offset().top;
        var elemBottom = elemTop + $(elem).height();

        return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
      }

      $(window).scroll(function() {
        $('.scroll-animations .animated').each(function() {
          if (isScrolledIntoView(this) === true) {
            $(this).removeClass('is-visible');
            $(this).addClass('bounceInRight');
          }
        });
      });

      $(window).scroll(function() {
        $('.scroll-animations2 .animated').each(function() {
          if (isScrolledIntoView(this) === true) {
            $(this).removeClass('is-visible');
            $(this).addClass('bounceInLeft');
          }
        });
      });

      $(window).scroll(function() {
        $('.scroll-animations3 .animated').each(function() {
          if (isScrolledIntoView(this) === true) {
            $(this).removeClass('is-visible');
            $(this).addClass('bounceIn');
          }
        });
      });
    });


    function scrollNav() {
      $('nav a').click(function(){  
        $(".active").removeClass("active");      
        $(this).closest('li').addClass("active");
        var theClass = $(this).attr("class");
        $('.'+theClass).parent('li').addClass('active');

        $('html, body').stop().animate({
          scrollTop: $( $(this).attr('href') ).offset().top - 160
        }, 400);
        return false;
      });
      $('.scrollTop a').scrollTop();
    }
    scrollNav();
  </script>
  <script type="text/javascript">
    $(document).ready(function(){
      $(".content").slice(0, 3).show();
      $("#loadMore").on("click", function(e){
        e.preventDefault();
        $(".content:hidden").slice(0, 3).slideDown();
        if($(".content:hidden").length == 0) {
          $("#loadMore").text("").addClass("noContent");
        }
      });

    })

    $('.dropdown-trigger').dropdown();

    $(document).ready(function(){
      $('select:not(.swal2-select)').formSelect();
    });

    $(document).ready(function(){
      $('.modal').modal();
    });

    $(document).ready(function(){
      $('.fixed-action-btn').floatingActionButton();
    });

    $(document).ready(function(){
      $('.tooltipped').tooltip();
    });

    $(document).ready(function(){
      $('.tabs').tabs();
    });


  </script>
</body>
</html>