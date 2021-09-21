@extends('visitors.layouts.master', ['title' => "Artikel"])

@section('content')

{{-- Start Breadcumb Section --}}
@isset($category)
<?php
    $data=[
        'judul' => "Artikel",
        'link1' => route('visitors.artikel.index'),
        'page1' => '/ Artikel',
        'page2' => '/ '.$category->category
    ]
?>
@endisset

@isset($tag)
<?php
    $data=[
        'judul' => "Artikel",
        'link1' => route('visitors.artikel.index'),
        'page1' => '/ Artikel',
        'page2' => '/ '.$tag->name_tag
    ]
?>
@endisset

@if (!isset($category) && !isset($tag))
<?php
$data=[
    'judul' => "Artikel",
    'link1' => route('visitors.artikel.index'),
    'page2' => '/ Artikel',
]
?>
@endif

@include('visitors.layouts.breadcumb', $data)
{{-- Start end Section --}}

{{-- Start Article Section --}}
<section id="article" class="blog-posts grid-system">
    <div class="container ">
        <div class="row">
            <div class="col-lg-8">
                <div class="all-blog-posts">
                    <div class="row mb-5">
                        @forelse ($articles as $article)
                        <div class="col-lg-12" data-aos="fade-up" data-aos-delay="500">
                            <div class="blog-post">
                                <div class="blog-thumb ">
                                    {{-- <img src="{{ asset('/images') }}/img-article-01.png" alt=""> --}}
                                    <img src="{{$article->thumbnail}}" alt="">
                                    {{-- <img src="{{ asset('storage/' . $article->thumbnail) }}" alt=""> --}}
                                </div>
                                <div class="down-content">
                                    <a href="{{ route('visitors.artikel.category.show', $article->category->slug) }}">
                                        <span>{{$article->category->category}}</span>
                                    </a>
                                    <a href="{{ route('visitors.artikel.show', $article->slug) }}">
                                        <h4>{{$article->title}}</h4>
                                    </a>
                                    <ul class="post-info ">
                                        {{-- <li><a href="#">{{$role[0]->name}}</a></li> --}}
                                        <li>
                                            <a href="#">
                                                {{$article->user->roles->first()->name}}
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                {{-- {{$article->created_at->diffForHumans()}} --}}
                                                {{$article->created_at->format('d F, Y')}}
                                            </a>
                                        </li>
                                    </ul>
                                    <hr>
                                    <p class=" text-justify">
                                        {!! Str::limit($article->body,200) !!}
                                        <hr>
                                        <a href="{{ route('visitors.artikel.show', $article->slug) }}"
                                            class=" justify-content-center">
                                            Baca lebih lanjut
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="800">
                            <div class="col-lg-12 justify-content-center" data-aos="fade-up" data-aos-delay="800">
                                {{-- <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="800">
                                <img src="{{ asset('/images') }}/sorry.png" style="height: 250px; width:250px;">
                            </div> --}}
                            <div class="alert alert-info text-center">
                                Artikel belum tersedia. nantikan artikel terbaru dari kami atau bisa laporkan melalui
                                form pengaduan. Terima kasih.
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
        </div>

        <div class="col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="800">
            <div class="sidebar">
                <div class="row">
                    @include('visitors.layouts.sidebar.sidebar-artikel')
                </div>
            </div>
        </div>
    </div>
</section>
{{-- End Article Section --}}
@endsection
