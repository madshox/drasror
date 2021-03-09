@extends('layouts.master')

@section('swiper')
    <div class="container pt-6">
        <h1 class="sections_title">Сертификаты и лицензии</h1>
        <div class="d-flex mybread_cump align-items-center">
            <a href="{{ route('index') }}" class="hvr-underline-reveal">Главная</a>
            <i class="fa fa-angle-right"></i>
            <a href="{{ route('document') }}" class="hvr-underline-reveal">Документы</a>
        </div> <!-- d-flex -->
    </div> <!-- contaienr -->
@endsection

@section('content')
    <section class="section2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div id="gallery2" class="pt-3">
                        <img class="gallery-img col-md-4"  alt="Yonsei University College of Medicine Severance Hospital" src="{{ asset('front/images/uploads/yonsei-university-college-of-medicine-severance-hospital-1565774942-PTohr.jpg') }}" data-image="" data-description="Yonsei University College of Medicine Severance Hospital">
                        <img class="gallery-img col-md-4"  alt="Yonsei University College of Medicine, Seoul, Korea" src="{{ asset('front/images/uploads/the-certify-yansei-university-calleege-of-medicine-seul-korea-1565850085-cs6OY.jpg') }}" data-image="/uploads/the-certify-yansei-university-calleege-of-medicine-seul-korea-1565850085-cs6OY.jpg" data-description="Yonsei University College of Medicine, Seoul, Korea">
                        <img class="gallery-img col-md-4"  alt="Sertifikat, Sog&#039;liqni Saqlash Vazirligi" src="{{ asset('front/images/uploads/sertifikat-sogliqni-saqlash-vazirligi-1565850012-bSgLV.jpg') }}" data-image="/uploads/sertifikat-sogliqni-saqlash-vazirligi-1565850012-bSgLV.jpg" data-description="Sertifikat, Sog&#039;liqni Saqlash Vazirligi">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
