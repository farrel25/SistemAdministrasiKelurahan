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
    <div class="container mb-4 mt-4  ">
        <div id="carouselExampleIndicators" class="carousel slide " data-aos="fade-up" data-aos-delay="800" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item br-full carousel-size active ">
                    <img src="{{ asset('/images') }}/carousel-1.jpg" class="d-block w-100 br-full" alt="...">
                </div>
                <div class="carousel-item br-full carousel-size">
                    <img src="{{ asset('/images') }}/carousel-2.jpg" class="d-block w-100 br-full" alt="...">
                </div>
                <div class="carousel-item br-full carousel-size">
                    <img src="{{ asset('/images') }}/carousel-3.png" class="d-block w-100 br-full" alt="...">
                </div>
                <div class="carousel-item br-full carousel-size">
                    <img src="{{ asset('/images') }}/carousel-4.jpg" class="d-block w-100 br-full" alt="...">
                </div>
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
<section id="services">
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-lg-3 text-center p-3" data-aos="fade-up" data-aos-delay="400">
                <span style="color: #EEF5FF;">
                    <i class="fas fa-envelope fa-3x p-4" style="width: 100px; height: 100px; background-color:#FE5670; border-radius:50%;"></i>
                </span>
                <h4 class="mb-2 mt-2" style="font-weight: 600;">Pengajuan Surat</h4>
                <p class=" small"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit sed perspiciatis vel
                    placeat, dicta
                    molestias quidem sequi. Adipisci, cupiditate laborum.</p>
            </div>
            <div class=" col-lg-3 text-center p-3" data-aos="fade-up" data-aos-delay="500">
                <span style="color: #EEF5FF;">
                    <i class="fas fa-exclamation-triangle fa-3x p-4" style="width: 100px; height: 100px; background-color:#F8B000; border-radius:50%;"></i>
                </span>
                <h4 class="mb-2 mt-2" style="font-weight: 600;">Pengaduan</h4>
                <p class=" small"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit sed perspiciatis vel
                    placeat, dicta
                    molestias quidem sequi. Adipisci, cupiditate laborum.</p>
            </div>
            <div class="col-lg-3 text-center p-3" data-aos="fade-up" data-aos-delay="800">
                <span style="color: #EEF5FF;">
                    <i class="fas fa-pencil-alt fa-3x p-4" style="width: 100px; height: 100px; background-color:#3C50E0; border-radius:50%;"></i>
                </span>
                <h4 class="mb-2 mt-2" style="font-weight: 600;">Kontributor Berita</h4>
                <p class=" small"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit sed perspiciatis vel
                    placeat, dicta
                    molestias quidem sequi. Adipisci, cupiditate laborum.</p>
            </div>
        </div>
    </div>
</section>
{{-- End Services Section --}}

{{-- Start Card 1 Section --}}
<section id="card1">
    <div class="container mt-5 mb-4 w-100 br-full " data-aos="fade-up" data-aos-delay="400" style=" background-image:url('images/bgrd-1.png');">
        <div class="row align-self-center ">
            <div class=" col text-center mt-4 ">
                <h1 style="font-weight: 600;">Kegiatan Pemuda</h1>
            </div>
        </div>
        <div class="row pl-5 pr-5 pb-3">
            <div class="col align-self-center sliderv">
                <div class="card m-3">
                    <div class="card-body">
                        <img src="{{ asset('/images') }}/img-kp-1.png" class=" float-left mr-4 w-auto mb-3 rounded-lg" alt="Responsive image">
                        <h5 class="card-title" style="font-weight: 700;">Kegiatan 1</h5>
                        <p class="card-text">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.
                            Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud
                            amet. </p>
                        <a href="#" class="btn btn-yellow">Button</a>
                    </div>
                </div>
                <div class="card m-3">
                    <div class="card-body">
                        <img src="{{ asset('/images') }}/img-kp-2.png" class=" float-left mr-4 w-auto  mb-3 rounded-lg" alt="Responsive image">
                        <h5 class="card-title" style="font-weight: 700;">Kegiatan 2</h5>
                        <p class="card-text">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.
                            Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud
                            amet. </p>
                        <a href="#" class="btn btn-yellow">Button</a>
                    </div>
                </div>
                <div class="card m-3">
                    <div class="card-body">
                        <img src="{{ asset('/images') }}/img-kp-3.png" class=" float-left mr-4 w-auto mb-3 rounded-lg" alt="Responsive image">
                        <h5 class="card-title" style="font-weight: 700;">Kegiatan 3</h5>
                        <p class="card-text">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.
                            Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud
                            amet. </p>
                        <a href="#" class="btn btn-yellow">Button</a>
                    </div>
                </div>

            </div>
        </div>
</section>
{{-- End Card 1 Section --}}

{{-- Start Card 2 Section --}}
<section id="card2">
    <div class=" container mt-5 w-100 br-full" data-aos="fade-up" data-aos-delay="400" style="background-image:url('images/bgrd-2.png'); ">
        <div class="row align-self-center ">
            <div class="col text-center align-self-center mt-4">
                <h1 style="font-weight: 600;">UMKM</h1>
            </div>
        </div>
        <div class="row justify-content-center pl-5 pr-5 pb-4">
            <div class=" col sliderh">
                <div class="card m-3">
                    <img src="{{ asset('/images') }}/img-umkm-1.png" class="card-img-top" alt="...">
                    <div class="card-body p-3">
                        <h5 class="card-title font-weight-bold  mb-0">Product </h5>
                        <p>Category</p>
                        <ul class="list-unstyled list-inline my-2">
                            <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                            <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                            <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                            <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                            <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                        </ul>
                        <p>Rp 10.000</p>
                    </div>
                </div>
                <div class="card m-3">
                    <img src="{{ asset('/images') }}/img-umkm-2.png" class="card-img-top" alt="...">
                    <div class="card-body p-3">
                        <h5 class="card-title font-weight-bold  mb-0">Product </h5>
                        <p>Category</p>
                        <ul class="list-unstyled list-inline my-2">
                            <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                            <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                            <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                            <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                            <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                        </ul>
                        <p>Rp 10.000</p>
                    </div>
                </div>
                <div class="card m-3">
                    <img src="{{ asset('/images') }}/img-umkm-3.png" class="card-img-top" alt="...">
                    <div class="card-body p-3">
                        <h5 class="card-title font-weight-bold  mb-0">Product </h5>
                        <p>Category</p>
                        <ul class="list-unstyled list-inline my-2">
                            <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                            <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                            <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                            <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                            <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                        </ul>
                        <p>Rp 10.000</p>
                    </div>
                </div>
                <div class="card m-3">
                    <img src="{{ asset('/images') }}/img-umkm-4.png" class="card-img-top" alt="...">
                    <div class="card-body p-3">
                        <h5 class="card-title font-weight-bold  mb-0">Product </h5>
                        <p>Category</p>
                        <ul class="list-unstyled list-inline my-2">
                            <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                            <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                            <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                            <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                            <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                        </ul>
                        <p>Rp 10.000</p>
                    </div>
                </div>
                <div class="card m-3">
                    <img src="{{ asset('/images') }}/img-umkm-5.png" class="card-img-top" alt="...">
                    <div class="card-body p-3">
                        <h5 class="card-title font-weight-bold  mb-0">Product </h5>
                        <p>Category</p>
                        <ul class="list-unstyled list-inline my-2">
                            <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                            <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                            <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                            <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                            <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                        </ul>
                        <p>Rp 10.000</p>
                    </div>
                </div>
                <div class="card m-3">
                    <img src="{{ asset('/images') }}/img-umkm-6.png" class="card-img-top" alt="...">
                    <div class="card-body p-3">
                        <h5 class="card-title font-weight-bold  mb-0">Product </h5>
                        <p>Category</p>
                        <ul class="list-unstyled list-inline my-2">
                            <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                            <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                            <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                            <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                            <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                        </ul>
                        <p>Rp 10.000</p>
                    </div>
                </div>
                <div class="card m-3">
                    <img src="{{ asset('/images') }}/img-umkm-7.png" class="card-img-top" alt="...">
                    <div class="card-body p-3">
                        <h5 class="card-title font-weight-bold  mb-0">Product </h5>
                        <p>Category</p>
                        <ul class="list-unstyled list-inline my-2">
                            <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                            <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                            <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                            <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                            <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                        </ul>
                        <p>Rp 10.000</p>
                    </div>
                </div>
                <div class="card m-3">
                    <img src="{{ asset('/images') }}/img-umkm-8.png" class="card-img-top" alt="...">
                    <div class="card-body p-3">
                        <h5 class="card-title font-weight-bold  mb-0">Product </h5>
                        <p>Category</p>
                        <ul class="list-unstyled list-inline my-2">
                            <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                            <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                            <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                            <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                            <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                        </ul>
                        <p>Rp 10.000</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
{{-- End Card 2 Section --}}

{{-- Start Article Section --}}
<section id="article" class="blog-posts grid-system">
    <div class="container ">
        <div class="row mb-5 mt-5" data-aos="fade-up" data-aos-delay="400">
            <div class=" col text-center ">
                <h1 style="font-weight: 600;">Artikel</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8" data-aos="fade-right" data-aos-delay="800">
                <div class="all-blog-posts">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="blog-post  ">
                                <div class="blog-thumb ">
                                    <img src="{{ asset('/images') }}/img-article-01.png" alt="">
                                </div>
                                <div class="down-content ">
                                    <a href="post-details.html">
                                        <h4>Article 1</h4>
                                    </a>
                                    <ul class="post-info ">
                                        <li><a href="#">Admin</a></li>
                                        <li><a href="#">May 31, 2020</a></li>
                                    </ul>
                                    <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit
                                        officia consequat duis enim velit mollit. Exercitation veniam consequat sunt
                                        nostrud amet. <a href="#">readmore..</a> </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="blog-post">
                                <div class="blog-thumb">
                                    <img src="{{ asset('/images') }}/img-article-02.png" alt="">
                                </div>
                                <div class="down-content">
                                    <a href="post-details.html">
                                        <h4>Article 2</h4>
                                    </a>
                                    <ul class="post-info ">
                                        <li><a href="#">Admin</a></li>
                                        <li><a href="#">May 22, 2020</a></li>
                                    </ul>
                                    <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit
                                        officia consequat duis enim velit mollit. Exercitation veniam consequat sunt
                                        nostrud amet. <a href="#">readmore..</a> </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="blog-post">
                                <div class="blog-thumb">
                                    <img src="{{ asset('/images') }}/img-article-03.png" alt="">
                                </div>
                                <div class="down-content ">
                                    <a href="post-details.html">
                                        <h4>Article 3</h4>
                                    </a>
                                    <ul class="post-info ">
                                        <li><a href="#">Admin</a></li>
                                        <li><a href="#">May 18, 2020</a></li>
                                    </ul>
                                    <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit
                                        officia consequat duis enim velit mollit. Exercitation veniam consequat sunt
                                        nostrud amet. <a href="#">readmore..</a> </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="blog-post">
                                <div class="blog-thumb">
                                    <img src="{{ asset('/images') }}/img-article-04.png" alt="">
                                </div>
                                <div class="down-content">
                                    <a href="post-details.html">
                                        <h4>Article 4</h4>
                                    </a>
                                    <ul class="post-info ">
                                        <li><a href="#">Admin</a></li>
                                        <li><a href="#">May 16, 2020</a></li>
                                    </ul>
                                    <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit
                                        officia consequat duis enim velit mollit. Exercitation veniam consequat sunt
                                        nostrud amet. <a href="#">readmore..</a> </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="blog-post">
                                <div class="blog-thumb">
                                    <img src="{{ asset('/images') }}/img-article-05.png" alt="">
                                </div>
                                <div class="down-content">
                                    <a href="post-details.html">
                                        <h4>Article 5</h4>
                                    </a>
                                    <ul class="post-info ">
                                        <li><a href="#">Admin</a></li>
                                        <li><a href="#">May 12, 2020</a></li>
                                    </ul>
                                    <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit
                                        officia consequat duis enim velit mollit. Exercitation veniam consequat sunt
                                        nostrud amet. <a href="#">readmore..</a> </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="blog-post">
                                <div class="blog-thumb">
                                    <img src="{{ asset('/images') }}/img-article-06.png" alt="">
                                </div>
                                <div class="down-content">
                                    <a href="post-details.html">
                                        <h4>Article 6</h4>
                                    </a>
                                    <ul class="post-info ">
                                        <li><a href="#">Admin</a></li>
                                        <li><a href="#">May 10, 2020</a></li>
                                    </ul>
                                    <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit
                                        officia consequat duis enim velit mollit. Exercitation veniam consequat sunt
                                        nostrud amet. <a href="#">readmore..</a> </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-5">
                            <ul class="page-numbers">
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right-short" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                        </svg>
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4" data-aos="fade-left" data-aos-delay="1000">
                <div class="sidebar">
                    <div class="row justify-content-center">
                        @include('visitors.layouts.sidebar.sidebar-artikel')
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
{{-- End Article Section --}}

<script type="text/javascript">
    $('.sliderh').slick({
        dots: true,
        infinite: false,
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
    $('.sliderv').slick({
        dots: true,
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
</script>

@endsection