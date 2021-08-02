@extends('visitors.layouts.master', ['title' => "Artikel"])

@section('content')

{{-- Start Breadcumb Section --}}
<?php
    $data=[
        'link1' => route('visitors.artikel.index'),
        'page1' => '> Artikel',
        'page2' => '> '.$article->title
    ]
?>
@include('visitors.layouts.breadcumb-artikel', $data)
{{-- End Breadcumb Section --}}

{{-- Start Article Section --}}
<section id="article" class="blog-posts grid-system">
    <div class="container ">
        <div class="row">
            <div class="col-lg-8" data-aos="fade-right" data-aos-delay="1000">
                <div class="all-blog-posts">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="blog-post">
                                <div class="blog-thumb">
                                    {{-- <img src="{{ asset('/images') }}/img-article-01.png" alt=""> --}}
                                    <img src="{{ asset('storage/' . $article->thumbnail) }}" alt="">
                                </div>
                                <div class="down-content">
                                    <a href="{{ route('visitors.artikel.category.show', $article->category->slug) }}">
                                        <span>{{$article->category->category}}</span>
                                    </a>
                                    <a href="post-details.html">
                                        <h4>{{$article->title}}</h4>
                                    </a>

                                    <?php
                                    $userId = $article->user_id;
                                    $roleId = \DB::table('model_has_roles')->where('model_id', $userId)->value('role_id');
                                    $role = \DB::table('roles')->select('model_has_roles.model_id','model_has_roles.role_id', 'roles.name')
                                    ->join('model_has_roles', 'roles.id', '=', 'model_has_roles.role_id')
                                    ->where('model_has_roles.role_id', $roleId)->get()->toArray();
                                    ?>

                                    <ul class="post-info">
                                        <li>
                                            <a href="#">{{$role[0]->name}}</a>
                                            {{-- <li><a href="#">{{"Administrator"}}</a></li> --}}
                                        </li>
                                        <li>
                                            <a href="#">{{$article->created_at->format('d F, Y')}}</a>
                                        </li>
                                        <li>
                                            <a href="#">{{ $countComments }} Comments</a>
                                        </li>
                                    </ul>
                                    <hr>
                                    <p class=" text-justify">
                                        {!! $article->body !!}
                                    </p>
                                    <hr>
                                    <div class="post-options">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-tags"></i></li>
                                                    @foreach ($article->tags as $tag)
                                                    <li>
                                                        <a href="{{ route('visitors.artikel.tag.show', $tag->slug) }}">
                                                            {{ $tag->name_tag }}
                                                        </a>,
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <div class="col-md-6 ">
                                                <ul class="post-share right-align">
                                                    <li><i class="fa fa-share-alt"></i></li>
                                                    <li><a href="#">Facebook</a>,</li>
                                                    <li><a href="#"> Twitter</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="sidebar-item comments">
                                <h4 class=" ml-3">4 Comments</h4>
                                <div class="content">
                                    <ul class="ml-3 mr-3">
                                        <hr>
                                        <li>
                                            <div class="right-content">
                                                <h4>Charles Kate<span>May 16, 2020</span></h4>
                                                <small>Fusce ornare mollis eros. Duis et diam vitae justo fringilla
                                                    condimentum eu quis leo.
                                                    Vestibulum idturpis porttitor sapien facilisis scelerisque.
                                                    Curabitur a nisl eu lacus convallis
                                                    eleifend posuere id tellus.
                                                </small>
                                                <a href="#" class="mt-3 d-flex">
                                                    <small>reply</small>
                                                </a>
                                            </div>
                                        </li>
                                        <li class="replied">
                                            <div class="right-content">
                                                <h4>Thirteen Man<span>May 20, 2020</span></h4>
                                                <small>In porta urna sed venenatis sollicitudin. Praesent urna sem,
                                                    pulvinar vel mattis eget.</small>
                                                <a href="#" class="mt-3 d-flex">
                                                    <small>reply</small>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="right-content">
                                                <h4>Belisimo Mama<span>May 16, 2020</span></h4>
                                                <small>Nullam nec pharetra nibh. Cras tortor nulla, faucibus id
                                                    tincidunt in, ultrices eget ligula.
                                                    Sed vitae suscipit ligula. Vestibulum id turpis volutpat, lobortis
                                                    turpis ac, molestie
                                                    nibh.</small>
                                                <a href="#" class="mt-3 d-flex">
                                                    <small>reply</small>
                                                </a>
                                            </div>
                                        </li>
                                        <li class="replied">
                                            <div class="right-content">
                                                <h4>Thirteen Man<span>May 22, 2020</span></h4>
                                                <small>Mauris sit amet justo vulputate, cursus massa congue, vestibulum
                                                    odio. Aenean elit nunc,
                                                    gravida in erat sit amet, feugiat viverra leo.</small>
                                                <a href="#" class="mt-3 d-flex">
                                                    <small>reply</small>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <div class="sidebar-item submit-comment">
                                <hr class="mb-3">
                                <div class="sidebar-heading mb-4">
                                    <h2>Komentar</h2>
                                </div>
                                <div class="content">
                                    <form id="comment" action="#" method="post">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <fieldset>
                                                    <input name="name" type="text" id="name" placeholder="Nama anda"
                                                        required="">
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <fieldset>
                                                    <input name="email" type="text" id="email" placeholder="Email anda"
                                                        required="">
                                                </fieldset>
                                            </div>
                                            <div class="col-lg-12">
                                                <fieldset>
                                                    <textarea name="message" rows="6" id="message"
                                                        placeholder="Masukkan komentar anda" required=""></textarea>
                                                </fieldset>
                                            </div>
                                            <div class="col-lg-12">
                                                <fieldset>
                                                    <button type="submit" id="form-submit"
                                                        class="main-button">Submit</button>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
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
@endsection
