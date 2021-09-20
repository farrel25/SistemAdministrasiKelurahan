@extends('visitors.layouts.master', ['title' => "Beranda"])

@section('content')

{{-- Start carousel section --}}
<section id="hero">
    <div class="container mb-4 mt-4  ">
        <div data-aos="fade-up" data-aos-delay="400" data-ride="carousel">
            <div class="carousel-caption  d-sm-block bg-glass mb-5 mt-3">
                <h1 data-aos="fade-up" data-aos-delay="500">Selamat Datang Di Desa</h1>
                <p class="mt-3" data-aos="fade-up" data-aos-delay="600">“Terwujudnya Desa yang Aman, Damai dan
                    Sejahtera“</p>
                <div data-aos="fade-up" data-aos-delay="700">
                    <a class="btn btn-get-started scroll-to-id " href="#services" role="button">Mulai Sekarang</a>
                </div>
            </div>
            <div class=" sliderimage">
                <div class=" br-full carousel-size active ">
                    <img src="{{ asset('/images') }}/carousel-1.png" class="d-block w-100 br-full" alt="...">
                </div>
                <div class="carousel-item br-full carousel-size">
                    <img src="{{ asset('/images') }}/carousel-2.png" class="d-block w-100 br-full" alt="...">
                </div>
                <div class="carousel-item br-full carousel-size">
                    <img src="{{ asset('/images') }}/carousel-3.png" class="d-block w-100 br-full" alt="...">
                </div>
                <div class="carousel-item br-full carousel-size">
                    <img src="{{ asset('/images') }}/carousel-4.png" class="d-block w-100 br-full" alt="...">
                </div>
            </div>

        </div>
    </div>
</section>
{{-- End carousel section --}}

{{-- Start Services Section --}}
<section id="services">
    <div class="container mt-3">
        <div class="row justify-content-center">
            <a href="{{ route('pengajuan-surat.create') }}" class="col-lg-3 col-sm-6 text-center text-dark p-3"
                data-aos="fade-up" data-aos-delay="400">
                <span style="color: #EEF5FF;">
                    <i class="fas fa-envelope fa-3x p-4"
                        style="width: 100px; height: 100px; background-color:#FE5670; border-radius:50%;"></i>
                </span>
                <h4 class="mb-2 mt-2" style="font-weight: 600;">Pengajuan Surat</h4>
                <p class=" small"> Memudahkan dalam pembuatan surat menyurat untuk warga desa secara online</p>
            </a>
            <a class=" col-lg-3 text-center p-3 col-sm-6 text-dark scroll-to-bottom" href="#complaint"
                data-aos="fade-up" data-aos-delay="500">
                <span style="color: #EEF5FF;">
                    <i class="fas fa-exclamation-triangle fa-3x p-4"
                        style="width: 100px; height: 100px; background-color:#F8B000; border-radius:50%;"></i>
                </span>
                <h4 class="mb-2 mt-2" style="font-weight: 600;">Pengaduan</h4>
                <p class=" small"> Memberikan kesempatan bagi warga desa dalam menyampaikan aspirasinya untuk
                    meningkatkan berbagai pelayanan yang tersedia</p>
            </a>
            <a href="{{ route('layanan.kontributor') }}" class="col-lg-3 col-sm-6 text-center p-3 text-dark"
                data-aos="fade-up" data-aos-delay="500">
                <span style="color: #EEF5FF;">
                    <i class="fas fa-pencil-alt fa-3x p-4"
                        style="width: 100px; height: 100px; background-color:#3C50E0; border-radius:50%;"></i>
                </span>
                <h4 class="mb-2 mt-2" style="font-weight: 600;">Kontributor Berita</h4>
                <p class=" small"> Warga dapat membuat beritanya sendiri mengenai desa maupun kegiatan yang dilaksanakan
                    oleh desa</p>
            </a>

        </div>
    </div>
</section>
{{-- End Services Section --}}

{{-- Start Card 1 Section --}}
<section id="card1">
    <div class="container mt-4 mb-lg-4 w-100 br-full " data-aos="fade-up" data-aos-delay="400">
        <div style=" background-image:url('images/bgrd-1.png'); border-radius:10px;">
            <div class="row pl-5 pr-5 ">
                <div class="col-lg-3 m-auto title-section">
                    <div class=" text-center mt-4 title-section">
                        <h1 style="font-weight: 600;">Kegiatan Desa</h1>
                        <p class="m-auto w-50">Memudahkan pengguna dalam membaca dan mencari
                            artikel,berita terbaru,dan kegiatan dalam Desa
                        </p>
                    </div>
                </div>
                <div class="col-lg-9 align-self-center sliderv mt-lg-4">
                    <div class="card m-3 ">
                        <div class="card-body">
                            <img src="{{ asset('/images') }}/img-kp-1.png"
                                class=" float-left mr-4 w-auto mb-3 rounded-lg" alt="Responsive image">
                            <h5 class="card-title" style="font-weight: 700;">Kegiatan 1</h5>
                            <p class="card-text">Memperingati Sumpah Pemuda pada 28 Oktober setiap tahunnya. Hari Sumpah
                                Pemuda lahir pada 28 Oktober 1928 silam.
                            </p><a href="#" class="btn btn-yellow">Selengkapnya >></a>
                        </div>
                    </div>
                    <div class="card m-3 ">
                        <div class="card-body">
                            <img src="{{ asset('/images') }}/img-kp-2.png"
                                class=" float-left mr-4 w-auto  mb-3 rounded-lg" alt="Responsive image">
                            <h5 class="card-title" style="font-weight: 700;">Kegiatan 2</h5>
                            <p class="card-text">Memperingati Sumpah Pemuda pada 28 Oktober setiap tahunnya. Hari Sumpah
                                Pemuda lahir pada 28 Oktober 1928 silam.
                            </p><a href="#" class="btn btn-yellow">Selengkapnya >></a>
                        </div>
                    </div>
                    <div class="card m-3 ">
                        <div class="card-body">
                            <img src="{{ asset('/images') }}/img-kp-3.png"
                                class=" float-left mr-4 w-auto mb-3 rounded-lg" alt="Responsive image">
                            <h5 class="card-title" style="font-weight: 700;">Kegiatan 3</h5>
                            <p class="card-text">Memperingati Sumpah Pemuda pada 28 Oktober setiap tahunnya. Hari Sumpah
                                Pemuda lahir pada 28 Oktober 1928 silam
                            </p>
                            <a href="#" class="btn btn-yellow">Selengkapnya >></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- End Card 1 Section --}}

{{-- Start Article Section --}}
<section id="article" class="blog-posts grid-system">
    <div class="container mt-5 " data-aos="fade-up" data-aos-delay="400">
        <div class="row">
            <div class="col text-center mb-4 title-section">
                <h1 style="font-weight: 600;">- Artikel -</h1>
                <p class="m-auto w-50">Memudahkan pengguna dalam membaca dan mencari
                    artikel, berita terbaru, dan kegiatan dalam Desa
                </p>
            </div>
        </div>
        <div class="all-blog-posts">
            <div class="row ">
                @forelse ($articles as $article)
                <div class="col-lg-4 " data-aos="fade-up" data-aos-delay="500">
                    <div class="blog-post">
                        <div class="bt-home">
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
                            // $userId = $article->user_id;
                            // dd($article->user->roles->first()->name);

                            // $roleId = \DB::table('model_has_roles')
                            // ->where('model_id', $userId)->value('role_id');
                            // var_dump($roleId);
                            // $role = \DB::table('roles')
                            // ->select('model_has_roles.model_id','model_has_roles.role_id', 'roles.name')
                            // ->join('model_has_roles', 'roles.id', '=', 'model_has_roles.role_id')
                            // ->where('model_has_roles.role_id', $roleId)->get()->toArray();
                            // var_dump($role);
                            @endphp

                            {{-- <ul class="post-info ">
                                <li><a href="#">{{$role[0]->name}}</a></li>
                            <li><a href="#">{{$article->user->roles->first()->name}}</a></li>
                            <li>
                                <a href="#">
                                    {{$article->created_at->diffForHumans()}}
                                    {{$article->created_at->format('d F, Y')}}
                                </a>
                            </li>
                            </ul> --}}
                            <hr>
                            <p>{!!Str::limit($article->body,150)!!}
                                <hr>
                                <a href="{{ route('visitors.artikel.show', $article->slug) }}">
                                    Baca lebih lanjut
                                </a>
                            </p>
                        </div>
                    </div>
                </div>

                @empty
                <div class="row justify-content-center mx-auto pl-3 pr-3" data-aos="fade-up" data-aos-delay="500">
                    {{-- <div class="col-lg-12 justify-content-center" data-aos="fade-up" data-aos-delay="500"> --}}
                    {{-- <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="500">
                                    <img src="{{ asset('/images') }}/sorry.png" style="height: 250px; width:250px;">
                </div> --}}
                <div class="alert alert-info text-center">
                    Artikel belum tersedia. nantikan artikel terbaru dari kami atau bisa laporkan melalui form
                    pengaduan. Terima kasih.
                </div>
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
</section>
{{-- End Article Section --}}

{{-- Start Card 2 Section --}}
<section id="card2">
    <div class=" container mb-4 w-100 br-full" data-aos="fade-up" data-aos-delay="400">
        <div style="background-image:url('images/bgrd-2.png'); border-radius:10px;">
            <div class="row">
                <div class="col text-center mt-4 mb-4 title-section">
                    <h1 style="font-weight: 600;">- UMKM -</h1>
                    <p class="m-auto w-50">Menampilkan seluruh UMKM di Desa ... dan memudahkan pengguna dalam
                        bertranksaksi
                    </p>
                </div>
            </div>
            <div class="row justify-content-center pl-sm-5 pr-sm-5 pb-sm-4">
                <div class=" col sliderh product" id="product">
                    <div class="card m-sm-3 m-2">
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
                    <div class="card m-sm-3 m-2">
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
                    <div class="card m-sm-3 m-2">
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
                    <div class="card m-sm-3 m-2">
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
                    <div class="card m-sm-3 m-2">
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
                    <div class="card m-sm-3 m-2">
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
                    <div class="card m-sm-3 m-2">
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
                    <div class="card m-sm-3 m-2">
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

{{-- Start Complaint Section --}}
<section id="complaint">
    <div class="container mb-4 mt-4">
        <div class="row justify-content-center " data-aos="fade-up" data-aos-delay="300">
            <div class="col-lg-10 ">
                <h3 class="p-3">Form Pengaduan</h3>
                <hr>
                <form action="{{ route('visitors.complaint.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="user_id" id="user_id" value="{{$user_id}}">
                    <div class="row">
                        <div class=" col-sm-6 mb-3">
                            <label for="name" class="form-label">Nama<span class="text-danger">*</span></label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                id="name" placeholder="Nama lengkap anda"
                                value="{{$user ? $user->full_name : old('name') ?? ''}}">
                            @error('name')
                            <small>
                                <font style="color: red; font-style: italic">{{$message}}</font>
                            </small>
                            @enderror
                        </div>
                        <div class=" col-sm-6 mb-3">
                            <label for="email" class="form-label">Email<span class="text-danger">*</span></label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                id="email" placeholder="name@example.com"
                                value="{{$user ? $user->email : old('email') ?? ''}}">
                            @error('email')
                            <small>
                                <font style="color: red; font-style: italic">{{$message}}</font>
                            </small>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 mb-3">
                            <label for="phone_number" class="form-label">Nomor Handphone<span
                                    class="text-danger">*</span></label>
                            <input type="text" name="phone_number"
                                class="form-control @error('phone_number') is-invalid @enderror" id="phone_number"
                                placeholder="081234567891" value="{{$user ? $user->phone : old('phone_number') ?? ''}}">
                            @error('phone_number')
                            <small>
                                <font style="color: red; font-style: italic">{{$message}}</font>
                            </small>
                            @enderror
                        </div>
                        <div class=" col-sm-6 mb-3">
                            <label for="complaint_category_id" class="form-label">Kategori<span
                                    class="text-danger">*</span></label>
                            <select class="mb-2 form-control @error('complaint_category_id') is-invalid @enderror"
                                name="complaint_category_id" id="complaint_category_id"
                                value="{{ old('complaint_category_id') }}">
                                <option value="{{ old('complaint_category_id') ?? '' }}">
                                    {{ $complaint_categories[old('complaint_category_id') - 1]->category ?? 'Pilih salah satu...' }}
                                </option>
                                @foreach ($complaint_categories as $category)
                                <option value="{{$category->id}}">
                                    {{$category->category}}
                                </option>
                                @endforeach
                            </select>
                            @error('complaint_category_id')
                            <small>
                                <font style="color: red; font-style: italic">{{$message}}</font>
                            </small>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="complaint" class="form-label">Isi Aduan<span class="text-danger">*</span></label>
                        <textarea class="form-control @error('complaint') is-invalid @enderror" name="complaint"
                            id="complaint" rows="3">{{ old('complaint') }}</textarea>
                        @error('complaint')
                        <small>
                            <font style="color: red; font-style: italic">{{$message}}</font>
                        </small>
                        @enderror
                    </div>
                    <div class="row justify-content-center mt-5">
                        <button type="submit" class="btn-submit">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
{{-- End Services Section --}}

<script type="text/javascript">
$('.sliderh').slick({
    dots: true,
    slidesToShow: 5,
    slidesToScroll: 1,
    autoplay: true,
    infinite: false,
    cssEase: 'linear',
    autoplaySpeed: 4000,
    responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                dots: true
            }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 575,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                prevArrow: '<div class="d-none "></div>',
                nextArrow: '<div class="d-none"></div>',
            }
        }
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
    infinite: false,
    autoplaySpeed: 4000,
    prevArrow: false,
    nextArrow: false,
    responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true
            }
        },
        {
            breakpoint: 780,
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
$('.sliderimage').slick({
    draggable: true,
    arrows: true,
    prevArrow: '<div class="slick-prev-image" ></div>',
    nextArrow: '<div class="slick-next-image"></div>',
    dots: true,
    autoplay: true,
    autoplaySpeed: 5000,
    fade: true,
    dotsClass: "slick-dots-image",
    speed: 900,
    infinite: true,
    cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
    responsive: [{
        breakpoint: 480,
        settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            prevArrow: '<div class="d-none"></div>',
            nextArrow: '<div class="d-none"></div>',
        }
    }]
});
</script>

@endsection