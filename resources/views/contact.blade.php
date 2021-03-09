@extends('layouts.master')

@section('swiper')
    <div class="container pt-6">
        <h1 class="sections_title">Контакты</h1>
        <div class="d-flex mybread_cump align-items-center">
            <a href="{{ route('index') }}" class="hvr-underline-reveal">Главная</a>
            <i class="fa fa-angle-right"></i>
            <a href="{{ route('about') }}" class="hvr-underline-reveal">Контакты</a>
        </div> <!-- d-flex -->
    </div> <!-- contaienr -->
@endsection

@section('content')
    <section class="contacts_section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2994.9436775216413!2d69.28628515670448!3d41.35357791777111!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8cacd637f231%3A0x925f01ac5840d457!2sMEDAS%20MEDICAL%20CENTER!5e0!3m2!1sen!2s!4v1568708201275!5m2!1sen!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>

                <div class="col-md-4">
                    <span class="green_text">
                        Номера телефонов
                    </span>

                    <div class="d-flex align-items-center"><img src="/images/whatsapp.png" class="">
                        <a href="tel:+998974209006" class="p-0 ml-1">
                            +998 97 420 90 06
                        </a>
                    </div>

                    <span class="green_text">
                        Адрес клиники
                    </span>

                    <div class="d-flex">
                        <a href="#">
                            Узбекистан, г.Ташкент,  проспект А.Темура д.119 Б.
                            (ст. метро Шахристан)
                        </a>
                    </div>

                    <span class="green_text">
                        Эл. почта
                    </span>

                    <div class="d-flex">
                        <a href="mailto:info@drasror.uz">
                            info@drasror.uz
                        </a>
                    </div>

                    <span class="green_text">
                        Мы в соц сетях
                    </span>

                    <div class="d-flex">
                        <a href="https://www.facebook.com/doctor.asror" target="_blank">
                            <img src="https://dr-asror.uz/images/facebook.png" alt="Facebook">
                        </a>

                        <a href="https://www.instagram.com/dr.asror.uz/" target="_blank">
                            <img src="https://dr-asror.uz/images/instagram.png" alt="Instagram">
                        </a>

                        <a href="https://t.me/dr_asror" target="_blank">
                            <img src="https://dr-asror.uz/images/telegram-w.png" alt=Youtube"">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
