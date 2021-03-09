@extends('layouts.master')

@section('swiper')
    <div class="container pt-6">
        <h1 class="sections_title">Цены</h1>
        <div class="d-flex mybread_cump align-items-center">
            <a href="{{ route('index') }}" class="hvr-underline-reveal">Главная</a>
            <i class="fa fa-angle-right"></i>
            <a href="{{ route('about') }}" class="hvr-underline-reveal">О хирурге</a>
        </div> <!-- d-flex -->
    </div> <!-- contaienr -->
@endsection

@section('content')
    <section class="face_surgery_section about_section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <img src="https://dr-asror.uz/images/DrAsror.jpg" class="img-width" alt="About">
                </div>

                <div class="col-md-5 res_text_center pfz18">
                    <h2 class="section_title text_left pb-4 res_pt_3">
                        Юнусов Асрор Атхамович
                    </h2>

                    <p>
                        <b>
                            Уже более <span class="green_text">20 лет</span> доктор Асрор Атхамович проводит процедуры,
                            помогающие вам выглядеть обновленной!
                        </b>
                    </p>

                    <p>
                        <b>
                            В медицинском центре MEDAS работает с <span class="green_text">2011 года</span>
                        </b>
                    </p>

                    <br>

                    <div class="givequestion green_bg">
                        <h5>
                            Задать вопрос хирургу можно напрямую
                        </h5>

                        <form method="POST" action="{{ route('order') }}" class="doc_form">
                            <a id="phone" class="myclickphone" style="color: white" href="tel:+998974209006">+998 (97) 420-90-06</a>
                            @csrf
                            <button type="button" data-toggle="modal" data-target="#modal">
                                Оставить заявку
                            </button>
                        </form>
                    </div>
                </div>

                <div class="col-md-1">
                    <!-- Empty -->
                </div>

                <div class="col-md-12 pt-5">
                    <p>
                        <span class="green_text">В 2000</span> году окончил лечебный факультет Ташкентского Медицинского
                        Института (САМПИ).
                    </p>

                    <p>
                        <span class="green_text">2000-2002 гг.</span> Клиническая ординатура на кафедре ЛОР болезней и
                        пластической хирургии САМПИ. Проф Хасанов С.А.
                    </p>

                    <p>
                        <span class="green_text">2002-2003 гг.</span> - Ассистент кафедры ЛОР болезней и пластической
                        хирургии САМПИ. Проф Хасанов С.А.
                    </p>

                    <p>
                        <span class="green_text">2003-2006 гг.</span> - Аспирантура на кафедре ЛОР болезней САМПИ.
                        Руководители Проф Хасанов С.А, Проф Омонов Ш.Э.
                    </p>

                    <p>
                        <span class="green_text">2004-2005 гг.</span> - YONSEI UNIVERSITY COLLEDGE OF MEDICINE/ training
                        course at the department Of plastic surgery/Reconstructive surgery/Park BeYong (Сеул Юж Корея);
                    </p>
                    <p>
                        <span class="green_text">2006 г.</span> 6месячный курс - YONSEI UNIVERSITY COLLEDGE OF MEDICINE
                        training course at the department Of plastic surgery/Aesthetic surgery/Tark Kwan Chul ( Сеул,
                        Юж. Корея);
                    </p>
                    <p>
                        <span class="green_text">2008 г.</span> 1месячный курс - WEILL CORNELL MEDICAL COLLEGE,
                        SALZBURG/ Otolaryngology/
                    </p>
                    <p>
                        <span class="green_text">2011-2012 гг.</span> - С пециализация по пластической и
                        реконструктивной хирургии, микрохирургии (ТИУВ) No 237338 (001902) Ташкент.
                    </p>
                    <p>
                        <span class="green_text">С 2008</span> является одиним из основателей и действительным членом
                        Общества Пластических Хирургов Узбекистана/ OPREXU/
                    </p>
                    <p>
                        <span class="green_text">С 2009</span> года явлется действительным членом общества “OPERATION
                        SMILE” - Общество нуждающимся детям с врожденными аномалиями всего мира. Vincent Yeow Kok Leng
                        MD/Сингапур/
                    </p>
                    <p>
                        <span class="green_text">2003-2011 гг</span> - Отделение Пластической хирурги клиники ТашПМИ.
                        Руководитель, председатель OPREXU - Жафаров М.М
                    </p>
                    <p>
                        <span class="green_text">С 2011</span> года усовершенствование навыков в эстетической хирургии и
                        продолжает деятельность под руководством доктора Асадова Х.Ф. на базе медицинского центра MEDAS
                    </p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div id="gallery2" class="pt-3">
                        <img class="gallery-img col-md-6" alt="" src="{{ asset('front/images/gallery/1.jpg') }}"
                             data-image="/images/galalery/1.jpg"
                             data-description="">
                        <img class="gallery-img col-md-6" alt="" src="{{ asset('front/images/gallery/2.jpg') }}"
                             data-image="/images/galalery/2.jpg"
                             data-description="">
                        <img class="gallery-img col-md-6" alt="" src="{{ asset('front/images/gallery/3.jpg') }}"
                             data-image="/images/galalery/3.jpg"
                             data-description="">
                        <img class="gallery-img col-md-6" alt="" src="{{ asset('front/images/gallery/5.jpg') }}"
                             data-image="/images/galalery/4.jpg"
                             data-description="">
{{--                        <img class="gallery-img" alt="" src="/images/galalery/5.jpg"--}}
{{--                             data-image="/images/galalery/5.jpg"--}}
{{--                             data-description="">--}}
{{--                        <img class="gallery-img" alt="" src="/images/galalery/6.jpg"--}}
{{--                             data-image="/images/galalery/6.jpg"--}}
{{--                             data-description="">--}}
{{--                        <img class="gallery-img" alt="" src="/images/galalery/7.jpg"--}}
{{--                             data-image="/images/galalery/7.jpg"--}}
{{--                             data-description="">--}}
                    </div> <!-- #gallery -->
                </div>
            </div> <!-- row -->
        </div>
    </section>
@endsection
