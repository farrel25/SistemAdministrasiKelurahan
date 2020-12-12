@extends('visitors.layouts.master', ['title' => "UMKM"])

@section('content')

{{-- Start card Section --}}
<section id="card">
    <div class="container" style="margin-top: 112px;" data-aos="fade-up" data-aos-delay="400">
        <div class="row slider ">
            <div class="col-12 slidercard ">
                <div class="card  p-4 " style="background-color:#EEF5FF; border:0px;">
                    <div class="card-body  ">
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
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-4 mb-lg-0 ">
                <div class="icon-box " data-aos="fade-up" data-aos-delay="100" style="width: 100%;">
                    <div class="icon"><i class="bx bxl-dribbble"></i></div>
                    <h4 class="title"><a href="">Category 1</a></h4>
                    <p class="description">Voluptatum deleniti atque corrupti </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-4 mb-lg-0">
                <div class="icon-box " data-aos="fade-up" data-aos-delay="200" style="width: 100%;">
                    <div class="icon"><i class="bx bx-file"></i></div>
                    <h4 class="title"><a href="">Category 2</a></h4>
                    <p class="description">Duis aute irure dolor in reprehenderit </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-4 mb-lg-0">
                <div class="icon-box " data-aos="fade-up" data-aos-delay="300" style="width: 100%;">
                    <div class="icon"><i class="bx bx-tachometer"></i></div>
                    <h4 class="title"><a href="">Category 3</a></h4>
                    <p class="description">Excepteur sint occaecat cupidatat </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-4 mb-lg-0">
                <div class="icon-box " data-aos="fade-up" data-aos-delay="400" style="width: 100%;">
                    <div class="icon"><i class="bx bx-world"></i></div>
                    <h4 class="title"><a href="">Category 4</a></h4>
                    <p class="description">At vero eos et accusamus et iusto </p>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Services Section -->
{{-- End category Section --}}

{{-- Start Product Section --}}
<section id="product" class="grid-system">
    <div class="container">
        <div class=" row ">
            <div class="col-xl-8 product " data-aos="fade-right" data-aos-delay="800">
                <div class="mb-4">
                    <div class="dropdown mb-4 d-flex">
                        <h4 class=" d-inline-block">Category 1</h4>
                        <button class="btn btn-secondary dropdown-toggle ml-auto" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #FE5670; border:none;">
                            Recently Added
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Recently Added</a>
                            <a class="dropdown-item" href="#">View Count</a>
                        </div>
                    </div>
                    <div class="all-blog-posts">
                        <div class="row card-columns ">
                            <div class="col-12 sliderproduct">
                                <div class="card mr-2 " style="width: 10rem;">
                                    <div class="cart">
                                        <div class="cart-img">
                                            <img src="{{ asset('/images') }}/img-umkm-1.png" class="card-img-top" alt="...">
                                            <div class="icon">
                                                <a href="{{ route('visitors.kegiatan_masyarakat.umkm.view-product') }}"><i class="fas fa-shopping-basket"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body p-3">
                                        <a href="{{ route('visitors.kegiatan_masyarakat.umkm.view-product') }}">
                                            <h5 class="card-title font-weight-bold mb-0">Product </h5>
                                        </a>
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
                                            <div class="icon">
                                                <a href=""><i class="fas fa-shopping-basket"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body p-3">
                                        <a href="">
                                            <h5 class="card-title font-weight-bold mb-0">Product </h5>
                                        </a>
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
                                            <div class="icon">
                                                <a href=""><i class="fas fa-shopping-basket"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body p-3">
                                        <a href="">
                                            <h5 class="card-title font-weight-bold mb-0">Product </h5>
                                        </a>
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
                                            <div class="icon">
                                                <a href=""><i class="fas fa-shopping-basket"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body p-3">
                                        <a href="">
                                            <h5 class="card-title font-weight-bold mb-0">Product </h5>
                                        </a>
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
                                            <div class="icon">
                                                <a href=""><i class="fas fa-shopping-basket"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body p-3">
                                        <a href="">
                                            <h5 class="card-title font-weight-bold mb-0">Product </h5>
                                        </a>
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
                                            <div class="icon">
                                                <a href=""><i class="fas fa-shopping-basket"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body p-3">
                                        <a href="">
                                            <h5 class="card-title font-weight-bold mb-0">Product </h5>
                                        </a>
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
                                            <div class="icon">
                                                <a href=""><i class="fas fa-shopping-basket"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body p-3">
                                        <a href="">
                                            <h5 class="card-title font-weight-bold mb-0">Product </h5>
                                        </a>
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
                                            <div class="icon">
                                                <a href=""><i class="fas fa-shopping-basket"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body p-3">
                                        <a href="">
                                            <h5 class="card-title font-weight-bold mb-0">Product </h5>
                                        </a>
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
                            <div class="col-lg-12 mb-5 mt-4">
                                <a href="#"><button type="button" class=" btn-block btn-red-line"> View All</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-4">
                    <div class="dropdown mb-4 d-flex">
                        <h4 class=" d-inline-block">Category 2</h4>
                        <button class="btn btn-secondary dropdown-toggle ml-auto" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #FE5670; border:none;">
                            Recently Added
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Recently Added</a>
                            <a class="dropdown-item" href="#">View Count</a>
                        </div>
                    </div>
                    <div class="all-blog-posts">
                        <div class="row card-columns ">
                            <div class="col-12 sliderproduct">
                                <div class="card mr-2 " style="width: 10rem;">
                                    <div class="cart">
                                        <div class="cart-img">
                                            <img src="{{ asset('/images') }}/img-umkm-1.png" class="card-img-top" alt="...">
                                            <div class="icon">
                                                <a href="{{ route('visitors.kegiatan_masyarakat.umkm.view-product') }}"><i class="fas fa-shopping-basket"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body p-3">
                                        <a href="{{ route('visitors.kegiatan_masyarakat.umkm.view-product') }}">
                                            <h5 class="card-title font-weight-bold mb-0">Product </h5>
                                        </a>
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
                                            <div class="icon">
                                                <a href=""><i class="fas fa-shopping-basket"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body p-3">
                                        <a href="">
                                            <h5 class="card-title font-weight-bold mb-0">Product </h5>
                                        </a>
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
                                            <div class="icon">
                                                <a href=""><i class="fas fa-shopping-basket"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body p-3">
                                        <a href="">
                                            <h5 class="card-title font-weight-bold mb-0">Product </h5>
                                        </a>
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
                                            <div class="icon">
                                                <a href=""><i class="fas fa-shopping-basket"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body p-3">
                                        <a href="">
                                            <h5 class="card-title font-weight-bold mb-0">Product </h5>
                                        </a>
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
                                            <div class="icon">
                                                <a href=""><i class="fas fa-shopping-basket"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body p-3">
                                        <a href="">
                                            <h5 class="card-title font-weight-bold mb-0">Product </h5>
                                        </a>
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
                                            <div class="icon">
                                                <a href=""><i class="fas fa-shopping-basket"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body p-3">
                                        <a href="">
                                            <h5 class="card-title font-weight-bold mb-0">Product </h5>
                                        </a>
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
                                            <div class="icon">
                                                <a href=""><i class="fas fa-shopping-basket"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body p-3">
                                        <a href="">
                                            <h5 class="card-title font-weight-bold mb-0">Product </h5>
                                        </a>
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
                                            <div class="icon">
                                                <a href=""><i class="fas fa-shopping-basket"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body p-3">
                                        <a href="">
                                            <h5 class="card-title font-weight-bold mb-0">Product </h5>
                                        </a>
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
                            <div class="col-lg-12 mb-5 mt-4">
                                <a href="#"><button type="button" class=" btn-block btn-red-line"> View All</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-4">
                    <div class="dropdown mb-4 d-flex">
                        <h4 class=" d-inline-block">Toko</h4>
                        <button class="btn btn-secondary dropdown-toggle ml-auto" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #FE5670; border:none;">
                            Recently Added
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Recently Added</a>
                            <a class="dropdown-item" href="#">View Count</a>
                        </div>
                    </div>
                    <div class="all-blog-posts">
                        <div class="row card-columns ">
                            <div class="col-12 ">
                                <div class="row">
                                    <div class=" col-12 sliderstore " id="store">
                                        <div class="card-wrapper mr-2 card">
                                            <div class="card-img-wrapper">
                                                <img class="card-img-top" src="{{ asset('/images') }}/img-kp-1.png" alt="Card image cap">
                                            </div>
                                            <div class="card-body">
                                                <h4 class="card-title font-weight-bold text-center">Store Name</h4>
                                                <hr>
                                                <p class="card-text"><i class="fas fa-shopping-cart"></i> Jumlah Product : 10</p>
                                                <hr>
                                                <p class="card-text"><i class="fas fa-star"></i> Penilaian : 4.5</p>
                                                <hr>
                                                <p class="card-text"><i class="fas fa-pen-alt"></i></i> Komentar : 10</p>
                                                <hr>
                                                <div class=" text-center">
                                                    <a href="#"><button type="button" class=" btn btn-red ">Kunjungi toko</button></a>
                                                    <a href="#"><button type="button" class="btn btn-red ">Hubungi penjual</button></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" card-wrapper mr-2 card">
                                            <div class="card-img-wrapper">
                                                <img class="card-img-top" src="{{ asset('/images') }}/img-kp-1.png" alt="Card image cap">
                                            </div>
                                            <div class="card-body">
                                                <h4 class="card-title font-weight-bold text-center">Store Name</h4>
                                                <hr>
                                                <p class="card-text"><i class="fas fa-shopping-cart"></i> Jumlah Product : 10</p>
                                                <hr>
                                                <p class="card-text"><i class="fas fa-star"></i> Penilaian : 4.5</p>
                                                <hr>
                                                <p class="card-text"><i class="fas fa-pen-alt"></i></i> Komentar : 10</p>
                                                <hr>
                                                <div class=" text-center">
                                                    <a href="#"><button type="button" class=" btn btn-red ">Kunjungi toko</button></a>
                                                    <a href="#"><button type="button" class="btn btn-red ">Hubungi penjual</button></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-wrapper mr-2 card">
                                            <div class="card-img-wrapper">
                                                <img class="card-img-top" src="{{ asset('/images') }}/img-kp-1.png" alt="Card image cap">
                                            </div>
                                            <div class="card-body">
                                                <h4 class="card-title font-weight-bold text-center">Store Name</h4>
                                                <hr>
                                                <p class="card-text"><i class="fas fa-shopping-cart"></i> Jumlah Product : 10</p>
                                                <hr>
                                                <p class="card-text"><i class="fas fa-star"></i> Penilaian : 4.5</p>
                                                <hr>
                                                <p class="card-text"><i class="fas fa-pen-alt"></i></i> Komentar : 10</p>
                                                <hr>
                                                <div class=" text-center">
                                                    <a href="#"><button type="button" class=" btn btn-red ">Kunjungi toko</button></a>
                                                    <a href="#"><button type="button" class="btn btn-red ">Hubungi penjual</button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-5 mt-4">
                                <a href="#"><button type="button" class=" btn-block btn-red-line"> View All</button></a>
                            </div>
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
{{-- End Product Section --}}
{{--<img alt="...">
<h3>Toko</h3>
<p>Jumlah Produk</p>
<p>Penilaian</p>
<p>Alamat</p>
<button type="button"> Hubungi Pemilik</button>
<button type="button"> Detail Toko</button>
--}}

<script>
    $('.slidercard').slick({
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
    $('.sliderproduct').slick({
        dots: true,
        arrows: false,
        infinite: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
    $('.sliderstore').slick({
        dots: true,
        arrows: false,
        infinite: false,
        slidesToShow: 2,
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
        ]
    });
</script>
@endsection