@extends('visitors.layouts.master', ['title' => "UMKM"])
@section('content')
<section id="card">
    <div class="container" style="margin-top: 112px;" data-aos="fade-up" data-aos-delay="400">
        <div class="row slider ">
            <div class="col-12 slidercard ">
                <div class="card  p-4 " style="background-color:#EEF5FF; border:0px;">
                    <div class="card-body  d-flex flex-wrap flex-lg-nowrap ">
                        <img src="{{ asset('/images') }}/vector-1.png"
                            class=" float-left mr-5 w-auto mb-3 rounded-lg animated img-fluid" alt="Responsive image" />
                        <div class="d-flex flex-column align-items-start">
                            <h3 class="card-title mt-4" style="font-weight: 700;">Mempermudah Dalam Berbelanja</h3>
                            <p class="card-text">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet
                                sint.
                                Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt
                                nostrud
                                amet. </p>
                            <a href="#" class="btn btn-red">Yuk Belanja</a>
                        </div>
                    </div>
                </div>
                <div class="card  p-4 " style="background-color:#EEF5FF; border:0px;">
                    <div class="card-body">
                        <img src="{{ asset('/images') }}/vector-1.png"
                            class=" float-left mr-5 w-auto mb-3 rounded-lg animated img-fluid" alt="Responsive image">
                        <h3 class="card-title mt-4" style="font-weight: 700;">Terjaga Kualitasnya</h3>
                        <p class="card-text">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.
                            Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud
                            amet. </p>
                        <a href="#" class="btn btn-red">Yuk Belanja </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="category" class="category">
    <div class="container">
        <div class="row mt-4 mb-5">
            @forelse ($categories as $category)
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-4 mb-lg-0 ">
                <div class="icon-box " data-aos="fade-up" data-aos-delay="100" style="width: 100%;">
                    <div class="icon"><i class="bx bxl-dribbble"></i></div>
                    <h4 class="title"><a
                            href="{{ route('visitors.umkm.index') . '?category=' . $category->category }}">{{$category->category}}</a>
                    </h4>
                    <p class="description">Voluptatum deleniti atque corrupti </p>
                </div>
            </div>
            @empty
            <div class="col-md-6 col-lg-12 d-flex align-items-stretch mb-4 mb-lg-0 ">
                {{-- <div class="icon-box " data-aos="fade-up" data-aos-delay="100" style="width: 100%;">
                    <div class="icon"><i class="bx bxl-dribbble"></i></div>
                    <h4 class="title"><a href="">Kategori belum tersedia</a></h4>
                    <p class="description">
                        Kategori produk masih belum tersedia,nantikan kategori produk terbaru dari kami atau bisa laporkan melalui form pengaduan. Terima kasih.
                    </p>
                </div> --}}
            </div>
            @endforelse
        </div>
    </div>
</section>
<section id="product" class="grid-system">
    <div class="container">
        <div class=" row ">
            <div class="col-xl-8 product " data-aos="fade-up" data-aos-delay="800">
                <div class="mb-4">
                    <div class="dropdown mb-4 d-flex">
                        <h4 class=" d-inline-block">Semua Produk</h4>
                        <button class="btn btn-secondary dropdown-toggle ml-auto" type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                            style="background-color: #FE5670; border:none;">
                            Kategori
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            @forelse ($categories as $category)
                            {{-- <a class="dropdown-item" href="#">{{$category->category}}</a> --}}
                            {{-- <a class="dropdown-item" href="/umkm?category={{$category->category}}">{{$category->category}}</a>
                            --}}
                            <a class="dropdown-item"
                                href="{{ route('visitors.umkm.index') . '?category=' . $category->category }}">{{$category->category}}</a>
                            @empty
                            <a class="dropdown-item" href="#">belum tersedia</a>
                            @endforelse
                        </div>
                    </div>
                    <div class="all-blog-posts">
                        <div class="row card-columns ">
                            @forelse ($products as $product)
                            <div class="col-3">
                                <div class="card " style="width: 10rem;">
                                    <div class="cart">
                                        <div class="cart-img">
                                            {{-- <img src="{{ asset('/images') }}/img-umkm-1.png" class="" alt="...">
                                            --}}
                                            {{-- <img src="{{ asset('storage/' . $product->photo) }}" class=""
                                            alt="..."> --}}
                                            <img src="{{$product->photo}}" class="" alt="..." height="170px">
                                            <div class="icon">
                                                <a href="#" data-toggle="modal" data-target=".modal-detail-product"
                                                    data-id="{{ $product->id }}"><i
                                                        class="fas fa-shopping-basket"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body p-3">
                                        <a href="#" data-toggle="modal" data-target=".bd-example-modal-lg">
                                            <h5 class="card-title font-weight-bold mb-0">{{$product->product_name}}</h5>
                                        </a>
                                        <p>{{$product->category->category}}</p>
                                        <ul class="list-unstyled list-inline my-2">
                                            <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i>
                                            </li>
                                            <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i>
                                            </li>
                                            <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i>
                                            </li>
                                            <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i>
                                            </li>
                                            <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i>
                                            </li>
                                        </ul>
                                        <p>Rp. {{$product->price}}</p>
                                    </div>
                                </div>
                            </div>
                            @empty
                            <div class="row justify-content-center mt-3" data-aos="fade-up" data-aos-delay="800">
                                <div class="alert alert-info text-center">
                                    Produk belum tersedia. nantikan produk terbaru dari UMKM Desa Wonosuko atau bisa
                                    laporkan melalui
                                    form pengaduan. Terima kasih.
                                </div>
                            </div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="800">
                <div class="sidebar">
                    <div class="row">
                        @include('visitors.layouts.sidebar.sidebar-umkm')
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
// $(document).on("click", ".modal-detail-product", function () {
//     const id = $(this).data('id');
//     $("#updateStatusModal .modal-body #id").val(id);
// });
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
    ]
});
</script>
{{-- $('.sliderproduct').slick({
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

    }); --}}
@endsection