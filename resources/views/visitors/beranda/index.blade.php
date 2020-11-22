@extends('visitors.layouts.master', ['title' => "Beranda"])

@section('content')
{{-- Start hero section --}}
<section id="hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 data-aos="fade-up">Selamat Datang Di Kelurahan</h1>
                <p class="mt-3" data-aos="fade-up" data-aos-delay="400">“ Terwujudnya Kelurahan yang Aman, Damai dan
                    Sejahtera “</p>
            </div>
        </div>
    </div>
</section>
{{-- End hero section --}}

{{-- Start carousel section --}}
<section id="carousel">
    <div class="container mb-4 mt-4">
        <div id="carouselExampleIndicators" class="carousel slide" data-aos="fade-up" data-aos-delay="800"
            data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('/images') }}/carousel-1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('/images') }}/carousel-2.jpg" class="d-block w-100" alt="...">
                </div>
                {{-- <div class="carousel-item">
                <img src="" class="d-block w-100" alt="...">
            </div> --}}
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>
{{-- End carousel section --}}

{{-- Start Services Section --}}
<section>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-lg-4 text-center">
                <img src="{{ asset('/images') }}/pic_mail.png" class="img-fluid mb-2" style="width: 115px;" alt="">
                <h3 class="mb-2">Pengajuan Surat</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit sed perspiciatis vel placeat, dicta
                    molestias quidem sequi. Adipisci, cupiditate laborum.</p>
            </div>
            <div class="col-lg-4 text-center">
                <img src="{{ asset('/images') }}/pic_mail.png" class="img-fluid mb-2" style="width: 115px;" alt="">
                <h3 class="mb-2">Pengajuan Surat</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit sed perspiciatis vel placeat, dicta
                    molestias quidem sequi. Adipisci, cupiditate laborum.</p>
            </div>
            <div class="col-lg-4 text-center">
                <img src="{{ asset('/images') }}/pic_mail.png" class="img-fluid mb-2" style="width: 115px;" alt="">
                <h3 class="mb-2">Pengajuan Surat</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit sed perspiciatis vel placeat, dicta
                    molestias quidem sequi. Adipisci, cupiditate laborum.</p>
            </div>
        </div>
    </div>
</section>
{{-- End Services Section --}}
@endsection
