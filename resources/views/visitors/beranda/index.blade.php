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
<section>
    <div class="container mb-4 mt-4  ">
        <div data-aos="fade-up" data-aos-delay="800" data-ride="carousel">

            <div class=" sliderimage">
                <div class=" br-full carousel-size active ">
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

        </div>
    </div>
</section>
{{-- End carousel section --}}

{{-- Start Services Section --}}
<section id="services">
    <div class="container mt-4">
        <div class="row justify-content-center">
            <a href="{{ route('pengajuan-surat.create') }}" class="col-lg-3 text-center text-dark p-3"
                data-aos="fade-up" data-aos-delay="400">
                <span style="color: #EEF5FF;">
                    <i class="fas fa-envelope fa-3x p-4"
                        style="width: 100px; height: 100px; background-color:#FE5670; border-radius:50%;"></i>
                </span>
                <h4 class="mb-2 mt-2" style="font-weight: 600;">Pengajuan Surat</h4>
                <p class=" small"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit sed perspiciatis vel
                    placeat, dicta
                    molestias quidem sequi. Adipisci, cupiditate laborum.</p>
            </a>
            <div class=" col-lg-3 text-center p-3" data-aos="fade-up" data-aos-delay="500">
                <span style="color: #EEF5FF;">
                    <i class="fas fa-exclamation-triangle fa-3x p-4"
                        style="width: 100px; height: 100px; background-color:#F8B000; border-radius:50%;"></i>
                </span>
                <h4 class="mb-2 mt-2" style="font-weight: 600;">Pengaduan</h4>
                <p class=" small"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit sed perspiciatis vel
                    placeat, dicta
                    molestias quidem sequi. Adipisci, cupiditate laborum.</p>
            </div>
            <div class="col-lg-3 text-center p-3" data-aos="fade-up" data-aos-delay="800">
                <span style="color: #EEF5FF;">
                    <i class="fas fa-pencil-alt fa-3x p-4"
                        style="width: 100px; height: 100px; background-color:#3C50E0; border-radius:50%;"></i>
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
    <div class="container mt-5 mb-4 w-100 br-full " data-aos="fade-up" data-aos-delay="400">
        <div style=" background-image:url('images/bgrd-1.png'); border-radius:10px;">
            <div class="row pl-5 pr-5 ">
                <div class="col-lg-3 m-auto">
                    <div class=" text-center mt-4 ">
                        <h1 style="font-weight: 600;">
                            Kegiatan Pemuda
                        </h1>
                    </div>
                </div>
                <div class="col-lg-9 align-self-center sliderv mt-4">
                    <div class="card m-3">
                        <div class="card-body">
                            <img src="{{ asset('/images') }}/img-kp-1.png"
                                class=" float-left mr-4 w-auto mb-3 rounded-lg" alt="Responsive image">
                            <h5 class="card-title" style="font-weight: 700;">Kegiatan 1</h5>
                            <p class="card-text">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet
                                sint.
                                Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt
                                nostrud
                                amet. </p>
                            <a href="#" class="btn btn-yellow">Button</a>
                        </div>
                    </div>
                    <div class="card m-3">
                        <div class="card-body">
                            <img src="{{ asset('/images') }}/img-kp-2.png"
                                class=" float-left mr-4 w-auto  mb-3 rounded-lg" alt="Responsive image">
                            <h5 class="card-title" style="font-weight: 700;">Kegiatan 2</h5>
                            <p class="card-text">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet
                                sint.
                                Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt
                                nostrud
                                amet. </p>
                            <a href="#" class="btn btn-yellow">Button</a>
                        </div>
                    </div>
                    <div class="card m-3">
                        <div class="card-body">
                            <img src="{{ asset('/images') }}/img-kp-3.png"
                                class=" float-left mr-4 w-auto mb-3 rounded-lg" alt="Responsive image">
                            <h5 class="card-title" style="font-weight: 700;">Kegiatan 3</h5>
                            <p class="card-text">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet
                                sint.
                                Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt
                                nostrud
                                amet. </p>
                            <a href="#" class="btn btn-yellow">Button</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- End Card 1 Section --}}

{{-- Start Card 2 Section --}}
<section id="card2">
    <div class=" container mt-5 w-100 br-full" data-aos="fade-up" data-aos-delay="400">
        <div style="background-image:url('images/bgrd-2.png'); border-radius:10px;">
            <div class="row align-self-center ">
                <div class="col text-center align-self-center mt-4">
                    <h1 style="font-weight: 600;">- UMKM -</h1>
                </div>
            </div>
            <div class="row justify-content-center pl-5 pr-5 pb-4">
                <div class=" col sliderh product" id="product">
                    <div class="card m-3">
                        <div class="cart">
                            <div class="cart-img">
                                <img src="{{ asset('/images') }}/img-umkm-1.png" class="card-img-top" alt="...">
                                <div class="icon">
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
                    <div class="card m-3    ">
                        <div class="cart">
                            <div class="cart-img">
                                <img src="{{ asset('/images') }}/img-umkm-2.png" class="card-img-top" alt="...">
                                <div class="icon">
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
                    <div class="card m-3">
                        <div class="cart">
                            <div class="cart-img">
                                <img src="{{ asset('/images') }}/img-umkm-3.png" class="card-img-top" alt="...">
                                <div class="icon">
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
                    <div class="card m-3">
                        <div class="cart">
                            <div class="cart-img">
                                <img src="{{ asset('/images') }}/img-umkm-4.png" class="card-img-top" alt="...">
                                <div class="icon">
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
                    <div class="card m-3">
                        <div class="cart">
                            <div class="cart-img">
                                <img src="{{ asset('/images') }}/img-umkm-5.png" class="card-img-top" alt="...">
                                <div class="icon">
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
                    <div class="card m-3">
                        <div class="cart">
                            <div class="cart-img">
                                <img src="{{ asset('/images') }}/img-umkm-6.png" class="card-img-top" alt="...">
                                <div class="icon">
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
                    <div class="card m-3">
                        <div class="cart">
                            <div class="cart-img">
                                <img src="{{ asset('/images') }}/img-umkm-7.png" class="card-img-top" alt="...">
                                <div class="icon">
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
                    <div class="card m-3">
                        <div class="cart">
                            <div class="cart-img">
                                <img src="{{ asset('/images') }}/img-umkm-8.png" class="card-img-top" alt="...">
                                <div class="icon">
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
                <h1 style="font-weight: 600;">- Artikel -</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8" data-aos="fade-right" data-aos-delay="800">
                <div class="all-blog-posts">
                    <div class="row mb-5">
                        @forelse ($articles as $article)
                        <div class="col-lg-12">
                            <div class="blog-post">
                                <div class="blog-thumb">
                                    {{-- <img src="{{ asset('/images') }}/img-article-01.png" alt=""> --}}
                                    {{-- <img src="{{ $article->thumbnail }}" alt=""> --}}
                                    <img src="{{ asset('storage/' . $article->thumbnail) }}" alt="">
                                </div>
                                <div class="down-content">
                                    {{-- <a href="post-details.html"> --}}
                                    <a href="{{ route('visitors.artikel.show', $article->slug) }}">
                                        <h4>{{$article->title}}</h4>
                                    </a>
                                    @php
                                    $userId = $article->user_id;
                                    // var_dump($userId);
                                    $roleId = \DB::table('model_has_roles')
                                    ->where('model_id', $userId)->value('role_id');
                                    // var_dump($roleId);
                                    $role = \DB::table('roles')
                                    ->select('model_has_roles.model_id','model_has_roles.role_id', 'roles.name')
                                    ->join('model_has_roles', 'roles.id', '=', 'model_has_roles.role_id')
                                    ->where('model_has_roles.role_id', $roleId)->get()->toArray();
                                    // var_dump($role);
                                    @endphp

                                    <ul class="post-info ">
                                        <li><a href="#">{{$role[0]->name}}</a></li>
                                        {{-- <li><a href="#">{{"Administrator"}}</a></li> --}}
                                        <li>
                                            <a href="#">
                                                {{-- {{$article->created_at->diffForHumans()}} --}}
                                                {{$article->created_at->format('d F, Y')}}
                                            </a>
                                        </li>
                                    </ul>
                                    <p>{!!Str::limit($article->body,200)!!}
                                        <br>
                                        <a href="{{ route('visitors.artikel.show', $article->slug) }}">
                                            lebih lanjut...
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        @empty
                        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="800">
                            <div class="col-lg-12 justify-content-center" data-aos="fade-up" data-aos-delay="800">
                                <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="800">
                                    <img src="{{ asset('/images') }}/sorry.png" style="height: 250px; width:250px;">
                                </div>
                                <div class="alert alert-info text-center">Layanan artikel belum tersedia, mohon dapat
                                    menantikan artikel terbaru dari admin atau bisa laporkan sistem ke customer service.
                                    Terima kasih.</div>
                            </div>
                        </div>
                        @endforelse
                        <div class="col-lg-12 mb-5 ">
                            <ul class="pagination justify-content-center">
                                {{$articles->links()}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-5" data-aos="fade-left" data-aos-delay="1000">
                <div class="sidebar">
                    <div class="row">
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
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: true,
            cssEase: 'linear',
            autoplaySpeed: 2000,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
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
        $('.sliderv').slick({
            vertical: true,
            verticalSwiping: true,
            dots: true,
            touchThreshold: 100,
            slidesToShow: 1,
            cssEase: 'ease-in-out',
            dotsClass: "slick-dots-vertical",
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            prevArrow: false,
            nextArrow: false,
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
        $('.sliderimage').slick({
            draggable: true,
            arrows: true,
            prevArrow: '<div class="slick-prev-image" ></div>',
            nextArrow: '<div class="slick-next-image"></div>',
            dots: true,
            autoplay: true,
            autoplaySpeed: 2000,
            fade: true,
            dotsClass: "slick-dots-image",
            speed: 900,
            infinite: true,
            cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
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
