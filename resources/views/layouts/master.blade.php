<!DOCTYPE html>
<html lang="">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>Doctor Asror</title>

    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/media.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('front/libs/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/libs/swiper-slider/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/libs/light-gallery/css/lightgallery.css') }}">
    <link rel="stylesheet" href="{{ asset('front/libs/touch-sideswipe-master/touch-sideswipe.min.css') }}">
    <link rel="shortcut icon" href="{{ asset('front/images/favicon.png') }}" type="image/x-icon">
    <link rel='stylesheet prefetch'
          href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css'>
    <!-- <link rel="stylesheet" href="css/image-magnifier.css"> -->

    <style>
        .tiles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .tile {
            position: relative;
            float: left;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .photo {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            transition: transform .5s ease-out;
        }

    </style>
</head>
<body>

<header class="sections_header">

    <nav class="main-nav notresponsive-nav">
        <div class="container">


            <div id="menu">
                <div class="d-flex align-items-center">
                    <a href="#" id="logo">
                        <img src="{{ asset('front/images/logo.png') }}" alt="logo" class="img-width main-logo logo-img">
                        <img src="{{ asset('front/images/logo_black.png') }}" alt="logo"
                             class="img-width logo_black logo-img">
                    </a> <!-- #logo -->
                    <ul class="main-ul pl-5">
                        <li><a href="#section01" class="hvr-underline-reveal anim link">Главная</a></li>
                        <li><a href="#section02" class="hvr-underline-reveal anim link">О хирурге</a></li>
                        <li><a href="#section04" class="hvr-underline-reveal anim link">Документы</a></li>
                        <li><a href="{{ route('categories') }}" class="hvr-underline-reveal anim link">Цены</a></li>
                        <li><a href="#section00" class="hvr-underline-reveal anim link">Контакты</a></li>

                        <!-- Modal -->
                    </ul> <!-- main-ul -->

                </div> <!-- d-flex -->

                <a href="tel: 711505545" class="phone_link hvr-underline-reveal link"><i class="fa mr-3 fa-phone"></i>998
                    71 150 55 45</a>

            </div> <!-- #menu -->

        </div> <!-- container -->

    </nav>


    <div class="top-div">
        <a href="#">
            <img src="{{ asset('front/images/logo.png') }}" class="main-logo responsive-logo img-width logo-img"
                 alt="logo">
            <img src="{{ asset('front/images/logo_black.png') }}" class="logo_black responsive-logo img-width logo-img"
                 alt="logo">
        </a>

        <div class="res_phone_link">
            <a href="tel: 711505545" class="phone_link hvr-underline-reveal"><i class="fa mr-3 fa-phone"></i></a>
        </div> <!-- res_phone_link -->

    </div> <!-- top-div -->

    <!--  MOBILE_MENU  -->

    <nav id="touchSideSwipe" class="touch-side-swipe responsive-nav">

        <div class="container p-0">
            <div id="menu">


                <div class="logo-div text-center">
                    <img src="{{ asset('front/images/logo.png') }}" alt="logo" class="responsive-nav-logo logo-img">
                </div>


                <ul class="main-ul">
                    <li><a href="#section01" class="hvr-underline-reveal anim link">Главная</a></li>
                    <li><a href="#section02" class="hvr-underline-reveal anim link">О хирурге</a></li>
                    <li><a href="#section04" class="hvr-underline-reveal anim link">Документы</a></li>
                    <li><a href="#section00" class="hvr-underline-reveal anim link">Цены</a></li>
                    <li><a href="#section00" class="hvr-underline-reveal anim link">Контакты</a></li>

                    <!-- Modal -->
                </ul> <!-- main-ul -->
            </div> <!-- menu -->

        </div> <!-- container -->

    </nav> <!-- touch-side-swipe responsive-nav -->


@yield('swiper')

</header>  <!-- header -->
@if(session()->has('warning'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Привет </strong>{{ session()->get('warning') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

@yield('content')

<footer>

    <div class="container">
        <div class="row d-flex justify-content-between m-0">
				<span>
					2019 © Доктор Юнусов Асрор
				</span>
            <a href="tel: 971505545" class="res-dnone">988 97 150 55 45</a>

            <a href="#" target="blank">Сделано в Usoft</a>
        </div> <!-- row -->

    </div> <!-- container -->

</footer> <!-- footer -->
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <div class="mybox position-relative mt-0">
                <button type="button" class="close myclose" data-dismiss="modal" aria-label="Close">
                    <img src="{{ asset('front/images/close.png') }}" class="img-width" alt="">
                </button>
                <h2 class="section_title mybox_title">
                    Записаться на прием
                </h2> <!-- section_title -->

                <form action="" class="mybox_form">
                    <input type="text" required="" placeholder="Введите ваше имя">
                    <input type="text" required="" placeholder="Введите ваш номер телефона">
                    <input type="text" required="" placeholder="Введите ваш e-mail">
                    <div class="text-center mt-4">
                        <button type="submit" class="mybtn px-6">Отправить</button>
                    </div>

                </form> <!-- mybox_form -->

            </div> <!-- mybox -->
        </div> <!-- modal_content -->
    </div>
</div>


<script src="{{ asset('front/js/jquery.js') }}"></script>
<script src="{{ asset('front/libs/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('front/libs/bootstrap/js/popper.min.js') }}"></script>
<script src="{{ asset('front/libs/swiper-slider/swiper.min.js') }}"></script>
<script src="{{ asset('front/js/jquery.maskedinput.js') }}"></script>

<script src="{{ asset('front/libs/light-gallery/js/lightgallery.js') }}"></script>
<script src="{{ asset('front/libs/light-gallery/js/lg-thumbnail.js') }}"></script>
<script src="{{ asset('front/libs/light-gallery/js/lg-fullscreen.js') }}"></script>
<script src="{{ asset('front/js/jquery.spincrement.min.js') }}"></script>
<script src="{{ asset('front/js/smoothscroll.min.js') }}"></script>
<script src="{{ asset('front/libs/touch-sideswipe-master/touch-sideswipe.min.js') }}"></script>
<!-- <script src="js/image-magnifier.js"></script> -->


<script src="{{ asset('front/js/main.js') }}"></script>

<script>

    $('.tile')
        // tile mouse actions
        .on('mouseover', function () {
            $(this).children('.photo').css({'transform': 'scale(' + $(this).attr('data-scale') + ')'});
        }).on('mouseout', function () {
        $(this).children('.photo').css({'transform': 'scale(1)'});
    }).on('mousemove', function (e) {
        $(this).children('.photo').css({'transform-origin': ((e.pageX - $(this).offset().left) / $(this).width()) * 100 + '% ' + ((e.pageY - $(this).offset().top) / $(this).height()) * 100 + '%'});
    }).each(function () {
        $(this)
            .append('<div class="photo"></div>')
            .children('.photo').css({'background-image': 'url(' + $(this).attr('data-image') + ')'});
    })

</script>
</body>
</html>
