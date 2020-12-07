@extends('visitors.layouts.master', ['title' => "UMKM"])

@section('content')

{{-- Start card Section --}}
<section id="card">
    <div class="container" style="margin-top: 112px;" data-aos="fade-up" data-aos-delay="400">
        <div class="row slider">
            <div class="col-12 slider">
                <div class="card  p-4 " style="background-color:#EEF5FF; border:0px;">
                    <div class="card-body">
                        <img src="{{ asset('/images') }}/vector-1.png" class=" float-left mr-5 w-auto mb-3 rounded-lg animated img-fluid" alt="Responsive image">
                        <h3 class="card-title mt-4" style="font-weight: 700;">Mempermudah Belanja</h3>
                        <p class="card-text">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.
                            Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud
                            amet. </p>
                        <a href="#" class="btn btn-red">Yuk Belanja</a>
                    </div>
                </div>
                <div class="card  p-4 " style="background-color:#EEF5FF; border:0px;">
                    <div class="card-body">
                        <img src="{{ asset('/images') }}/vector-1.png" class=" float-left mr-5 w-auto mb-3 rounded-lg animated img-fluid" alt="Responsive image">
                        <h3 class="card-title mt-4" style="font-weight: 700;">Mempermudah Belanja</h3>
                        <p class="card-text">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.
                            Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud
                            amet. </p>
                        <a href="#" class="btn btn-red">Yuk Belanja</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- End card Section --}}

{{-- Start Category Section --}}
<section id="category" class="category">
    <div class="container">
        <div class="row mt-4 mb-5">
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-4 mb-lg-0">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="100" style="width: 100%;">
                    <div class="icon"><i class="bx bxl-dribbble"></i></div>
                    <h4 class="title"><a href="">Category 1</a></h4>
                    <p class="description">Voluptatum deleniti atque corrupti </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-4 mb-lg-0">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="200" style="width: 100%;">
                    <div class="icon"><i class="bx bx-file"></i></div>
                    <h4 class="title"><a href="">Category 2</a></h4>
                    <p class="description">Duis aute irure dolor in reprehenderit </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="300" style="width: 100%;">
                    <div class="icon"><i class="bx bx-tachometer"></i></div>
                    <h4 class="title"><a href="">Category 3</a></h4>
                    <p class="description">Excepteur sint occaecat cupidatat </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-4 mb-lg-0">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="400" style="width: 100%;">
                    <div class="icon"><i class="bx bx-world"></i></div>
                    <h4 class="title"><a href="">Category 4</a></h4>
                    <p class="description">At vero eos et accusamus et iusto </p>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Services Section -->
{{-- End category Section --}}

{{-- Start Article Section --}}
<section id="product" class="grid-system">
    <div class="container">
        <div class=" row ">
            <div class="col-xl-8 product " data-aos="fade-right" data-aos-delay="800">
                <div class="dropdown mb-4 ">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #FE5670; border:none;">
                        Recently Added
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Recently Added</a>
                        <a class="dropdown-item" href="#">View Count</a>
                    </div>
                </div>
                <div class="all-blog-posts">
                    <div class="row card-columns justify-content-center ">
                        <div class="card mr-2 " style="width: 10rem;">
                            <div class="cart">
                                <div class="cart-img">
                                    <img src="{{ asset('/images') }}/img-umkm-1.png" class="card-img-top" alt="...">
                                    <div class="social">
                                        <a href=""><i class="fas fa-shopping-basket"></i></a>
                                    </div>
                                </div>
                            </div>
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
                        <div class="card mr-2 " style="width: 10rem;">
                            <div class="cart">
                                <div class="cart-img">
                                    <img src="{{ asset('/images') }}/img-umkm-2.png" class="card-img-top" alt="...">
                                    <div class="social">
                                        <a href=""><i class="fas fa-shopping-basket"></i></a>
                                    </div>
                                </div>
                            </div>
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
                        <div class="card mr-2 " style="width: 10rem;">
                            <div class="cart">
                                <div class="cart-img">
                                    <img src="{{ asset('/images') }}/img-umkm-3.png" class="card-img-top" alt="...">
                                    <div class="social">
                                        <a href=""><i class="fas fa-shopping-basket"></i></a>
                                    </div>
                                </div>
                            </div>
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
                        <div class="card mr-2 " style="width: 10rem;">
                            <div class="cart">
                                <div class="cart-img">
                                    <img src="{{ asset('/images') }}/img-umkm-4.png" class="card-img-top" alt="...">
                                    <div class="social">
                                        <a href=""><i class="fas fa-shopping-basket"></i></a>
                                    </div>
                                </div>
                            </div>
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
                        <div class="card mr-2 " style="width: 10rem;">
                            <div class="cart">
                                <div class="cart-img">
                                    <img src="{{ asset('/images') }}/img-umkm-1.png" class="card-img-top" alt="...">
                                    <div class="social">
                                        <a href=""><i class="fas fa-shopping-basket"></i></a>
                                    </div>
                                </div>
                            </div>
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
                        <div class="card mr-2 " style="width: 10rem;">
                            <div class="cart">
                                <div class="cart-img">
                                    <img src="{{ asset('/images') }}/img-umkm-2.png" class="card-img-top" alt="...">
                                    <div class="social">
                                        <a href=""><i class="fas fa-shopping-basket"></i></a>
                                    </div>
                                </div>
                            </div>
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
                        <div class="card mr-2 " style="width: 10rem;">
                            <div class="cart">
                                <div class="cart-img">
                                    <img src="{{ asset('/images') }}/img-umkm-3.png" class="card-img-top" alt="...">
                                    <div class="social">
                                        <a href=""><i class="fas fa-shopping-basket"></i></a>
                                    </div>
                                </div>
                            </div>
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
                        <div class="card mr-2 " style="width: 10rem;">
                            <div class="cart">
                                <div class="cart-img">
                                    <img src="{{ asset('/images') }}/img-umkm-4.png" class="card-img-top" alt="...">
                                    <div class="social">
                                        <a href=""><i class="fas fa-shopping-basket"></i></a>
                                    </div>
                                </div>
                            </div>
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
                        <div class="card mr-2 " style="width: 10rem;">
                            <div class="cart">
                                <div class="cart-img">
                                    <img src="{{ asset('/images') }}/img-umkm-1.png" class="card-img-top" alt="...">
                                    <div class="social">
                                        <a href=""><i class="fas fa-shopping-basket"></i></a>
                                    </div>
                                </div>
                            </div>
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
                        <div class="card mr-2 " style="width: 10rem;">
                            <div class="cart">
                                <div class="cart-img">
                                    <img src="{{ asset('/images') }}/img-umkm-2.png" class="card-img-top" alt="...">
                                    <div class="social">
                                        <a href=""><i class="fas fa-shopping-basket"></i></a>
                                    </div>
                                </div>
                            </div>
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
                        <div class="card mr-2 " style="width: 10rem;">
                            <div class="cart">
                                <div class="cart-img">
                                    <img src="{{ asset('/images') }}/img-umkm-3.png" class="card-img-top" alt="...">
                                    <div class="social">
                                        <a href=""><i class="fas fa-shopping-basket"></i></a>
                                    </div>
                                </div>
                            </div>
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
                        <div class="card mr-2 " style="width: 10rem;">
                            <div class="cart">
                                <div class="cart-img">
                                    <img src="{{ asset('/images') }}/img-umkm-4.png" class="card-img-top" alt="...">
                                    <div class="social">
                                        <a href=""><i class="fas fa-shopping-basket"></i></a>
                                    </div>
                                </div>
                            </div>
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

                        <div class="col-lg-12 mb-5 mt-4">
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
            <div class="col-lg-4" data-aos="fade-left" data-aos-delay="800">
                <div class="sidebar">
                    <div class="row">
                        @include('visitors.layouts.sidebar.sidebar-umkm')
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
{{-- End Article Section --}}


<script>
    $('.slider').slick({
        dots: false,
        arrows: false,
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