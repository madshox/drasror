@extends('layouts.master')

@section('swiper')
    <div class="container pt-6">
        <h1 class="sections_title">Лицо</h1>
        <div class="d-flex mybread_cump align-items-center">
            <a href="https://dr-asror.uz" class="hvr-underline-reveal">Главная</a>
            <i class="fa fa-angle-right"></i>
            <a href="https://dr-asror.uz/prices/all" class="hvr-underline-reveal">Услуги</a>
            <i class="fa fa-angle-right"></i>
            <a href="https://dr-asror.uz/prices/litso" class="hvr-underline-reveal">Лицо</a>
        </div>
    </div>
@endsection

@section('content')
    <section class="face_surgery_section">
        <div class="container">
            <div class="row my-4">
                <div class="col-md-4 col-lg-3 px-0">
                    <a href="https://dr-asror.uz/service/vrozhdennye-anomali">
                        <div class="left_side" style="background-image: url('/uploads/R6KcMz5sJoSnpRBVuAlmP3BAFOvtNwyGEO36ohuy.jpeg')"></div>
                    </a>
                </div>
                <div class="col-md-8 col-lg-9 px-0">
                    <div class="service_box h-100 py-2">
                        <div class="d-flex pb-1 res_column justify-content-between">
                            <a href="https://dr-asror.uz/service/vrozhdennye-anomali">
                                <h3 class="service_box_title">Врожденные Аномалии</h3>
                            </a>

                        </div> <!-- d-flex -->
                        <p>Расщелина неба (волчья пасть) – это состояние, при котором полость ротоглотки соединяется с носовой полостью через расщелину твердого и/или мягкого неба. <br>
                            Рассеченная губа (заячья губа) – это дефект верхней губы при котором она состоит из двух, как правило, не симметричных частей.</p>

                    </div> <!-- service_box -->
                </div>
            </div>
        </div>
    </section>
@endsection
