@extends('layouts.master')

@section('swiper')
    <div class="container pt-6">
        <h1 class="sections_title">Лицо</h1>
        <div class="d-flex mybread_cump align-items-center">
            <a href="{{ route('index') }}" class="hvr-underline-reveal">Главная</a>
            <i class="fa fa-angle-right"></i>
            <a href="{{ route('categories') }}" class="hvr-underline-reveal">Услуги</a>
            <i class="fa fa-angle-right"></i>
            <a href="#" class="hvr-underline-reveal">Лицо</a>
        </div>
    </div>
@endsection

@section('content')
    <section class="face_surgery_section">
        @foreach($category->services as $service)
        <div class="container">
            <div class="row my-4">
                <div class="col-md-4 col-lg-3 px-0">
                    <a href="https://dr-asror.uz/service/vrozhdennye-anomali">
                        <div class="left_side" style="background-image: url('{{ Storage::url($service->head_image) }}')"></div>
                    </a>
                </div>
                <div class="col-md-8 col-lg-9 px-0">
                    <div class="service_box h-100 py-2">
                        <div class="d-flex pb-1 res_column justify-content-between">
                            <a href="{{ route('service', [$service->category->slug, $service->slug]) }}">
                                <h3 class="service_box_title">{{ $service->title }}</h3>
                            </a>
                        </div> <!-- d-flex -->
                        <p>{!! $service->description !!}</p>
                    </div> <!-- service_box -->
                </div>
            </div>
        </div>
        @endforeach
    </section>
@endsection
