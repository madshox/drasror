@extends('layouts.master')

@section('swiper')
    <div class="container pt-6">
        <h1 class="sections_title">Цены</h1>
        <div class="d-flex mybread_cump align-items-center">
            <a href="index.html" class="hvr-underline-reveal">Главная</a>
            <i class="fa fa-angle-right"></i>
            <a href="index.html" class="hvr-underline-reveal">Цены</a>
        </div> <!-- d-flex -->
    </div> <!-- contaienr -->
@endsection

@section('content')
    <section id="section02" class="section">
        <div class="container">
            <div class="row justify-content-center">
                @foreach($categories as $category)
                    <div class="col-md-3">
                        <a href="{{ $category->slug }}" class="section02_item">
                            <img src="{{ Storage::url($category->icon) }}" width="59"
                                 class="item_img1 mr-auto ml-auto img-width" alt="Section">
                            <img src="{{ Storage::url($category->icon) }}" width="59"
                                 class="item_img2 mr-auto ml-auto img-width" alt="Section">
                            <h4><span class="line"><!-- Empty --></span>
                                <b>{{ $category->name }}</b>
                            </h4>
                            <p>
                                <span>•</span> Врожденные Аномалии
                            </p>
                        </a>
                    </div>
                    <div class="col-md-1">
                        <!-- Empty -->
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
