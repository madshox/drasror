@extends('layouts.master')

@section('swiper')
    <!-- Swiper -->
    <div class="swiper-container front_slider">
        <div class="swiper-wrapper">

            <div class="swiper-slide front_slide">

                <div class="container h-100 position-relative">
                    <div class="row d-flex align-items-center h-100">
                        <div class="col-md-6 z2 res_text_center  pt-5">
                            <h1 class="title">
                                Пластическая хирургия
                            </h1> <!-- title -->
                            <h3 class="subtitle2">
                                Быть красивой просто!
                            </h3> <!-- subtitle -->
                            <div class="header_btn">
                                <a href="#" class="mybtn" data-toggle="modal" data-target="#exampleModalCenter">Записаться
                                    на прием</a>

                            </div> <!-- header_btn -->

                        </div> <!-- col-md-6 -->

                        <div class="col-md-6 z2 res-dnone myd-flex justify-content-end align-items-end h-100">

                            <div class="soc_blocks">
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit"><img src="{{ asset('front/images/facebook.png') }}" alt="">
                                    </button>
                                </form>
                                <a href="#"><img src="{{ asset('front/images/instagram.png') }}" alt=""></a>
                                <a href="#"><img src="{{ asset('front/images/youtube.png') }}" alt=""></a>
                            </div> <!-- soc_blocks -->
                        </div> <!-- col-md-6 -->
                    </div> <!-- row -->

                    <img src="{{ asset('front/images/slide1_img.png') }}" class="first_img res-dnone" alt="">
                </div> <!-- container -->

            </div> <!-- swiper-slide -->

            <div class="swiper-slide front_slide">
                <div class="container h-100 position-relative">
                    <div class="row d-flex align-items-center h-100">
                        <div class="col-md-6 pt-5 res_text_center z2">
                            <h1 class="title">
                                Готовы взглянуть на себя по новому?
                            </h1> <!-- title -->
                            <p class="subtitle">
                                Уже более 18 лет доктор Юнусов проводит процедуры, <br class="res-dnone">
                                помогующие вам выглядеть обновленной и привлекательной <br class="res-dnone">
                                уже сегодня!
                            </p> <!-- subtitle -->
                            <div class="header_btn">
                                <a href="#" class="mybtn" data-toggle="modal" data-target="#exampleModalCenter">Записаться
                                    на прием</a>
                            </div> <!-- header_btn -->

                        </div> <!-- col-md-6 -->

                        <div class="col-md-6 res-dnone myd-flex justify-content-end">

                            <div class="soc_blocks">
                                <a href="#"><img src="{{ asset('front/images/facebook.png') }}" alt=""></a>
                                <a href="#"><img src="{{ asset('front/images/instagram.png') }}" alt=""></a>
                                <a href="#"><img src="{{ asset('front/images/youtube.png') }}" alt=""></a>
                            </div> <!-- soc_blocks -->
                        </div> <!-- col-md-6 -->
                    </div> <!-- row -->

                    <img src="{{ asset('front/images/slide2_img.png') }}" class="header_imgs  res-dnone" alt="">
                </div> <!-- container -->

            </div> <!-- swiper-slide -->

            <div class="swiper-slide front_slide">
                <div class="container h-100 position-relative">
                    <div class="row d-flex align-items-center h-100">
                        <div class="col-md-5 z2 res_text_center pt-5">
                            <div class="mybox">

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

                        </div> <!-- col-md-5 -->
                        <div class="col-md-1">

                        </div>

                        <div class="col-md-6 z2 res-dnone myd-flex justify-content-end">

                            <div class="soc_blocks">
                                <a href="#"><img src="{{ asset('front/images/facebook.png') }}" alt=""></a>
                                <a href="#"><img src="{{ asset('front/images/instagram.png') }}" alt=""></a>
                                <a href="#"><img src="{{ asset('front/images/youtube.png') }}" alt=""></a>
                            </div> <!-- soc_blocks -->
                        </div> <!-- col-md-6 -->
                    </div> <!-- row -->

                    <img src="{{ asset('front/images/slide3_img.png') }}" class="header_imgs  res-dnone" alt="">
                </div> <!-- container -->

            </div> <!-- swiper-slide -->


        </div> <!-- swiper-wrapper -->
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>
@endsection

@section('content')
    <section id="section01" class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <img src="{{ asset('front/images/docAsror.png') }}" class="img-width px-5" alt="">
                    <div class="givequestion">
                        <h5>Задать вопрос хирургу можно напрямую</h5>
                        <form action="" class="doc_form">
                            <input type="text" required="" id="phone_input"
                                   placeholder="+998 (    )       -     -       ">
                            <button type="submit">Оставить заявку</button>
                        </form>
                    </div> <!-- givequestion -->
                </div> <!-- col-md-5 -->

                <div class="col-md-1">

                </div> <!-- col-md-1 -->

                <div class="col-md-6">
                    <div class="text-center res-dblock">
                        <h3 class="section_suptitle"><b>О хирурге</b></h3>
                    </div> <!-- text-center -->
                    <h3 class="section_suptitle res-dnone"><b>О хирурге</b></h3>
                    <h2 class="section_title mytext-left mt-3 restext-center">Юнусов Асрор Ахматович</h2>
                    <div class="d-flex mt-4 resflex-column">
                        <div class="d-flex flex-column mymr-5 mypr-5 restext-center">
                            <span class="mb-3">Хирург <br class="res-dnone"> отделения</span>
                            <p class="mb-3 res-dblock">Пластической хирургии клиники <br class="res-dnone"> им. Пирогова
                            </p>
                            <span class="mb-3">Член  <br class="res-dnone"> ассоциации</span>
                            <p class="mb-3 res-dblock">Узбекского общества пластических, <br class="res-dnone">
                                реконструктивных и эстетических хирургов</p>
                            <span class="mb-3">Врач  <br class="res-dnone"> хирург</span>
                            <p class="mb-3 res-dblock">Отделения сочетанной травмы НИИ СП <br class="res-dnone">
                                им. И.И.Джанелидзе Узбекистан</p>
                        </div> <!-- d-flex -->

                        <div class="d-flex flex-column mr-5 myrepr-5">
                            <p class="mb-3 res-dnone">Пластической хирургии клиники <br> им. Пирогова</p>
                            <p class="mb-3 res-dnone">Узбекского общества пластических, <br>
                                реконструктивных и эстетических хирургов</p>
                            <p class="mb-3 res-dnone">Отделения сочетанной травмы НИИ СП <br>
                                им. И.И.Джанелидзе Узбекистан</p>
                        </div> <!-- d-flex -->
                    </div> <!-- d-flex -->


                    <div class="d-flex benefits__inner">
                        <div class="d-flex flex-column mr-5 myml-5 myrepr-5">
                            <div class="mb-4">
                                <h4 class="animate_count">520</h4>
                                <span>Проведенно <br> операций</span>
                            </div>

                            <div class="mb-4">
                                <h4 class="animate_count">70</h4>
                                <span>Сертефицированных  <br> признаний</span>
                            </div>
                        </div> <!-- d-flex -->

                        <div class="d-flex flex-column">
                            <div class="mb-4">
                                <h4 class="animate_count">950</h4>
                                <span>Бесплатных  <br> консультаций</span>
                            </div>

                            <div class="mb-4">
                                <h4 class="animate_count">486</h4>
                                <span>Довольных   <br> клиентов</span>
                            </div>
                        </div> <!-- d-flex -->
                    </div> <!-- d-flex -->

                </div> <!-- col-md-6 -->

            </div> <!-- row -->
        </div> <!-- container -->

    </section> <!-- #section01 -->


    <section id="section02" class="section">

        <div class="text-center">
            <h3 class="section_suptitle"><b>Предоставляемые услуги</b></h3>
        </div> <!-- text-center -->


        <h2 class="section_title pt-3 pb-5">Улучшения на все участки тела</h2>


        <div class="container">
            <div class="row justify-content-center">
                @foreach($categories as $category)
                <div class="col-md-3">
                    <a href="{{ $category->slug }}" class="section02_item">
                        <img src="{{ Storage::url($category->icon) }}"
                             class="item_img1 mr-auto ml-auto img-width" width="59" alt="Section">
                        <img src="{{ Storage::url($category->icon) }}"
                             class="item_img2 mr-auto ml-auto img-width" width="59" alt="Section">
                        <h4>
                            <span class="line"><!-- Empty --></span>
                            <b>{{ $category->name }}</b>
                        </h4>
                        @foreach($category->services as $service)
                            <p><span>•</span>{{ $service->title }}</p>
                        @endforeach
                    </a>
                </div>
                @endforeach

                <div class="col-md-1">
                    <!-- Empty -->
                </div>
            </div>
        </div>
    </section> <!-- section02 -->


    <section id="section03" class="section">

        <div class="container">
            <div class="row">


                <div class="col-md-5 pt-5 mt-5">
                    <ul class="nav nav-pills mb-3 myborder_bottom" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-face-tab" data-toggle="pill" href="#pills-face"
                               role="tab"
                               aria-controls="pills-face" aria-selected="true">Лицо</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-top-tab" data-toggle="pill" href="#pills-top" role="tab"
                               aria-controls="pills-top" aria-selected="false">Верхняя часть тела</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-bottom-tab" data-toggle="pill" href="#pills-bottom" role="tab"
                               aria-controls="pills-bottom" aria-selected="false">Нижняя часть тела</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-face" role="tabpanel"
                             aria-labelledby="pills-face-tab">

                            <div class="nav d-flex nav-pills mylinks" id="v-pills-tab" role="tablist"
                                 aria-orientation="vertical">
                                <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1"
                                   role="tab" aria-controls="v-pills-1" aria-selected="true">Кривошея</a>
                            </div>


                        </div> <!-- tab-pane -->
                        <div class="tab-pane fade" id="pills-top" role="tabpanel" aria-labelledby="pills-top-tab">...
                        </div>
                        <div class="tab-pane fade" id="pills-bottom" role="tabpanel" aria-labelledby="pills-bottom-tab">
                            ...
                        </div>
                    </div>
                </div> <!-- col-md-5 -->

                <div class="col-md-1"></div>

                <div class="col-md-6 position-relative res-mt5">
                    <h3 class="section_suptitle"><b>Примеры наших работ</b></h3>
                    <h2 class="section_title text-left mt-3 mb-4">До и после</h2>

                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel"
                             aria-labelledby="v-pills-1-tab">
                            <!-- Swiper -->
                            <div class="swiper-container afbe_slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide afbe_slide">
                                        <div class="tiles">
                                            <div class="tile" data-scale="2"
                                                 data-image="{{ asset('front/images/afbe1.png') }}"></div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide afbe_slide">
                                        <div class="tiles">
                                            <div class="tile" data-scale="2"
                                                 data-image="{{ asset('front/images/service.png') }}"></div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide afbe_slide">
                                        <div class="tiles">
                                            <div class="tile" data-scale="2"
                                                 data-image="{{ asset('front/images/afbe1.png') }}"></div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- swiper-container	 -->
                            <!-- Add Arrows -->
                            <div class="myswiper-button-next2">
                                <i class="fa fa-angle-down"></i>
                            </div>
                            <div class="myswiper-button-prev2">
                                <i class="fa fa-angle-up"></i>
                            </div>
                        </div> <!-- tab-pane -->
                        <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">2
                        </div>
                        <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">3
                        </div>
                        <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-4-tab">4
                        </div>

                        <div class="tab-pane" id="v-pills-5" role="tabpanel" aria-labelledby="v-pills-5-tab">10</div>
                        <div class="tab-pane fade" id="v-pills-6" role="tabpanel" aria-labelledby="v-pills-6-tab">20
                        </div>
                        <div class="tab-pane fade" id="v-pills-7" role="tabpanel" aria-labelledby="v-pills-7-tab">30
                        </div>
                        <div class="tab-pane fade" id="v-pills-8" role="tabpanel" aria-labelledby="v-pills-8-tab">40
                        </div>
                    </div>
                </div> <!-- col-md-6 -->

            </div> <!-- row -->
        </div> <!-- container -->

    </section> <!-- #section03 -->


    <section id="section04" class="section gradient_bg">
        <div class="text-center">
            <h3 class="section_suptitle text-white op-05 norm_letter"><b>Отзывы</b></h3>
        </div> <!-- text-center -->

        <h2 class="section_title text-white pt-3 pb-5">Наши клиенты довольны результатом</h2>
        <div class="container position-relative">
            <div class="row justify-content-center position-relative">

                <div class="col-md-6 position-relative">
                    <!-- Swiper -->
                    <div class="swiper-container reviews_slider">
                        <div class="swiper-wrapper reviews_wrapper">
                            <div class="swiper-slide reviews_slide">
                                <div class="d-flex myborder_div">
                                    <p>Я очень благодарна своему пластическому хирургу Юнусову
                                        Асрору Атхамовичу! Спасибо за вашу профессиональную работу
                                        и индивидуальный подход к пациенту, вы женщинам даете второе
                                        дыхание, возвращаете им их прежнюю красоту тела и лица.
                                        Вы - прекрасный специалист! </p>
                                </div> <!-- d-flex -->

                                <div class="d-flex align-items-center">
                                    <span class="review_author">Задорожная Наталья, 36 лет</span>
                                    <span class="vert_line"></span>
                                    <span class="review_theme">Подтяжка кожи лица</span>
                                </div> <!-- d-flex -->
                            </div> <!-- reviews_slide -->

                            <div class="swiper-slide reviews_slide">
                                <div class="d-flex myborder_div">
                                    <p>Я очень благодарна своему пластическому хирургу Юнусову
                                        Асрору Атхамовичу! Спасибо за вашу профессиональную работу
                                        и индивидуальный подход к пациенту, вы женщинам даете второе
                                        дыхание, возвращаете им их прежнюю красоту тела и лица.
                                        Вы - прекрасный специалист! </p>
                                </div> <!-- d-flex -->

                                <div class="d-flex align-items-center">
                                    <span class="review_author">Задорожная Наталья, 36 лет</span>
                                    <span class="vert_line"></span>
                                    <span class="review_theme">Подтяжка кожи лица</span>
                                </div> <!-- d-flex -->
                            </div> <!-- reviews_slide -->

                            <div class="swiper-slide reviews_slide">
                                <div class="d-flex myborder_div">
                                    <p>Я очень благодарна своему пластическому хирургу Юнусову
                                        Асрору Атхамовичу! Спасибо за вашу профессиональную работу
                                        и индивидуальный </p>
                                </div> <!-- d-flex -->

                                <div class="d-flex align-items-center">
                                    <span class="review_author">Задорожная Наталья, 36 лет</span>
                                    <span class="vert_line"></span>
                                    <span class="review_theme">Подтяжка кожи лица</span>
                                </div> <!-- d-flex -->
                            </div> <!-- reviews_slide -->

                        </div> <!-- swiper-wrapper -->

                    </div> <!-- reviews_slider -->
                    <!-- Add Arrows -->

                </div> <!-- col-md-7 -->
                <div class="myswiper-button-next">
                    <img src="{{ asset('front/images/arrow.png') }}" alt="">
                </div>
                <div class="myswiper-button-prev">
                    <img src="{{ asset('front/images/arrow.png') }}" alt="">
                </div>
            </div> <!-- row -->

        </div> <!-- container -->
    </section> <!-- section04 -->


    <section id="section05" class="section">
        <div class="text-center">
            <h3 class="section_suptitle norm_letter2"><b>Часто задаваемые вопросы</b></h3>
        </div> <!-- text-center -->

        <h2 class="section_title pt-3 pb-5">Возможно тут вы найдете ответ на свой вопрос</h2>
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-md-8">
                    <ul class="accordion">

                        <li>
                            <a class="">Какой срок выполнения стандартных работ? <span class="myarrow">
								<i class="fa fa-angle-down"></i>
							</span></a>
                            <p>Расположение эпизодов иллюстрирует поэтический орнаментальный сказ
                                парафраз прочно приводит стих согласно традиционным .</p>
                        </li>

                        <li>
                            <a class="">Освещение какого типа лучше использовать дома? <span class="myarrow">
								<i class="fa fa-angle-down"></i>
							</span></a>
                            <p>Расположение эпизодов иллюстрирует поэтический орнаментальный сказ</p>
                        </li>

                        <li>
                            <a class="">Какого типа лучше всего освещение в офисе? <span class="myarrow">
								<i class="fa fa-angle-down"></i>
							</span></a>
                            <p>Расположение эпизодов иллюстрирует поэтический орнаментальный сказ
                                парафраз прочно приводит стих согласно традиционным представлениям,
                                нивелирует диалогический анапест. Симулякр нивелирует диалогический
                                мифопоэтический хронотоп.</p>
                        </li>

                        <li>
                            <a class="">Насколько качественно выполняются работы по освещению? <span class="myarrow">
								<i class="fa fa-angle-down"></i>
							</span></a>
                            <p>Расположение эпизодов иллюстрирует поэтический орнаментальный сказ</p>
                        </li>
                    </ul> <!-- / accordion -->
                </div> <!-- col-md-8 -->

            </div> <!-- row -->
        </div> <!-- container -->
    </section> <!-- #section05 -->

    <section id="section06" class="section gradient_bg">
        <div class="text-center">
            <h3 class="section_suptitle text-white op-05 norm_letter"><b>Оставьте заявку</b></h3>
        </div> <!-- text-center -->

        <h2 class="section_title text-white pt-3 pb-5">Мы скоро свяжемся с вами</h2>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <form action="" class="main_form">
                        <div class="d-flex justify-content-between res_column">
                            <input type="text" placeholder="Ваше имя" required="">
                            <input type="text" placeholder="Эл. почта" required="">
                            <input type="text" placeholder="Номер телефона" required="">
                        </div> <!-- d-flex -->
                        <div class="text-center mt-5">
                            <button type="submit" class="mybtn px-6">
                                Отправить
                            </button>
                        </div> <!-- text-center -->

                    </form> <!-- main_form -->
                </div> <!-- col-md-10 -->
            </div> <!-- row -->
        </div> <!-- container -->

    </section> <!-- #section06 -->
@endsection
