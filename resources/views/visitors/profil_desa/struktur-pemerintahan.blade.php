@extends('visitors.layouts.master', ['title' => "Profil Desa"])

@section('content')

{{-- Start Breadcumb Section --}}
<?php
    $data=[
        'page1' => '> Profil Desa',
        'page2' => '> Struktur Pemerintahan'
    ]
?>
@include('visitors.layouts.breadcumb-artikel', $data)
{{-- End Breadcumb Section --}}

{{-- Start Article Section --}}
<section id="article" class="blog-posts grid-system">
    <div class="container ">
        <div class="row">
            <div class="col-lg-8" data-aos="fade-up" data-aos-delay="500">
                <div class="all-blog-posts">
                    <div class="row">
                        @if ($article)
                        <div class="col-lg-12">
                            <div class="blog-post">
                                <div class="blog-thumb">
                                    {{-- <img src="{{ asset('/images') }}/img-article-01.png" alt=""> --}}
                                    <img src="{{ asset('storage/' . $article->thumbnail) }}" alt="">
                                </div>
                                <div class="down-content">
                                    <span>{{$article->category->category}}</span>
                                    <h4>{{$article->title}}</h4>
                                    <?php
                                        $userId = $article->user_id;
                                        $roleId = \DB::table('model_has_roles')->where('model_id', $userId)->value('role_id');
                                        $role = \DB::table('roles')->select('model_has_roles.model_id','model_has_roles.role_id', 'roles.name')
                                            ->join('model_has_roles', 'roles.id', '=', 'model_has_roles.role_id')
                                            ->where('model_has_roles.role_id', $roleId)->get()->toArray();
                                    ?>
                                    <ul class="post-info">
                                        <li><a href="#">{{$role[0]->name}}</a></li>
                                        <li><a href="#">{{$article->created_at->format('d F, Y')}}</a></li>
                                    </ul>
                                    <hr>
                                    <p class=" text-justify">
                                        {!! $article->body !!}
                                    </p>
                                    <div class="post-options">
                                        <div class="row">
                                            <div class="col-6">
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-tags"></i></li>
                                                    <li><a href="#">Best Templates</a>,</li>
                                                    <li><a href="#">TemplateMo</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6 ">
                                                <ul class="post-share right-align">
                                                    <li><i class="fa fa-share-alt"></i></li>
                                                    <li><a href="#">Copy Link</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @else
                        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="800">
                            {{-- <div class="col-lg-12 justify-content-center" data-aos="fade-up" data-aos-delay="800"> --}}
                            {{-- <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="800">
                                <img src="{{ asset('/images') }}/sorry.png" style="height: 250px; width:250px;">
                            </div> --}}
                            <div class="alert alert-info text-center">
                                Informasi belum tersedia. nantikan informasi terbaru dari kami atau bisa laporkan melalui form pengaduan. Terima kasih.
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="700">
                <div class="sidebar">
                    <div class="row justify-content-center">
                        @include('visitors.layouts.sidebar.sidebar-fitur')
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- End Article Section --}}
@endsection
