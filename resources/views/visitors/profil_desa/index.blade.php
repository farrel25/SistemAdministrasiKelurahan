@extends('visitors.layouts.master', ['title' => "Profil Desa | Sejarah dan visi misi"])

@section('content')
{{-- Open Section --}}
<section id="page-title-pelayanan">
    <div class="container mb-5">

        <div class="row justify-content-center" data-aos="fade-up">
            <div class="col-lg-6 text-center">
                <h2>Sejarah dan Visi Misi</h2>
                <nav aria-label="breadcrumb">
                    <small>
                        <ol class="breadcrumb justify-content-center" style="background: none">
                            <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Sejarah dan Visi Misi</li>
                        </ol>
                    </small>
                </nav>
            </div>
        </div>

        @foreach ($sejarahvisimisis as $menu)
        <div class="row col-md-12" data-aos="fade-up" data-aos-delay="300">
            <div class="col-lg-8 mt-4">
                <div class="col-lg-12">
                    <h4>{{$menu->title_1}}</h4>
                    <hr>
                    <blockquote class="blockquote">
                        <footer class="blockquote-footer">{{$menu->editor}},<cite title="Source Title">{{$menu->created_at->format("d M, Y")}}</cite></footer>
                    </blockquote>
                    <nav aria-label="breadcrumb">
                        <br>
                        <p>{{$menu->text_1}}</p>
                    </nav>
                    <br><br>
                    <h3>{{$menu->title_2}}</h3>
                    <nav aria-label="breadcrumb">
                        <br>
                        <p>{{$menu->text_2}}</p>
                    </nav>
                    <br><br>
                    <h3>{{$menu->title_3}}</h3>
                    <nav aria-label="breadcrumb">
                        <br>
                        <p>{{$menu->text_3}}</p>
                    </nav>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

{{-- End Services Section --}}
@endsection