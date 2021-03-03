@extends('layouts.master')

@section('swiper')
    <div class="container pt-6">
        <h1 class="sections_title">Лицо</h1>
        <div class="d-flex mybread_cump align-items-center">
            <a href="{{ route('index') }}" class="hvr-underline-reveal">Главная</a>
            <i class="fa fa-angle-right"></i>
            <a href="{{ route('categories') }}" class="hvr-underline-reveal">Услуги</a>
            <i class="fa fa-angle-right"></i>
            <a href="{{ route('service', [$services->category, $services->slug]) }}" class="hvr-underline-reveal">{{ $services->title }}</a>
        </div>
    </div>
@endsection

@section('content')
    <section class="face_surgery_section about_section">
        <div class="container patients">
            <div class="section-heading mb-4 mt-5">Полидактилия ноги</div>
            <div class="row">
                @foreach($services->images as $service)
                <div class="col-lg-6 mt-2">
                    <div class="h-100 patients--img">
                        <img src="{{ Storage::url($service->image) }}"
                             alt="">
                    </div>
                    <div class="img-titles">
                        <div>До операции</div>
                        <div>После операции</div>
                    </div>
                </div>
                @endforeach
            </div>
            <!--____________________________________________________________________________________ -->
            <div class="row justify-content-center">
                <div class="col-md-10 pt-5">
                    <p>{{ $services->long_d }}</p>
                </div> <!-- col-md-10 -->
            </div>
            <div class="d-flex justify-content-center">
                <a href="#" class="mybtn" data-toggle="modal" data-target="#modal">Записаться на прием</a>
            </div>
        </div>
    </section>
@endsection
