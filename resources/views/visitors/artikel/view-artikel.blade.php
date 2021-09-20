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
            <div class="col-lg-8" data-aos="fade-up" data-aos-delay="500">
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
                                    <h4>{{$article->title}}</h4>
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
                                            <a href="#comments">{{ $countComments }} Komentar</a>
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
                                                    <li><i class="fa fa-tags"></i><a href="#">Lampiran</a></li>
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
                                                    <li><a href="#">Copy Link</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <div class="sidebar-item submit-comment">
                                <div class="sidebar-heading mb-4">
                                    <h2>Komentar</h2>
                                </div>
                                <div class="content">
                                    <form id="comment" action="{{ route('visitors.article.comment.store') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="user_id" id="user_id" value="{{$user_id}}">
                                        <input type="hidden" name="article_id" id="article_id" value="{{$article->id}}">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <fieldset>
                                                    <input class="@error('full_name') is-invalid @enderror" name="full_name" type="text" id="full_name" placeholder="Nama anda" value="{{$user ? $user->full_name : old('full_name') ?? ''}}"
                                                        >
                                                    @error('full_name')
                                                    <small>
                                                        <font style="color: red; font-style: italic">{{$message}}</font>
                                                    </small>
                                                    @enderror
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <fieldset>
                                                    <input name="email" type="email" id="email" placeholder="Email anda"
                                                        class="@error('email') is-invalid @enderror" value="{{$user ? $user->email : old('email') ?? ''}}">
                                                    @error('email')
                                                    <small>
                                                        <font style="color: red; font-style: italic">{{$message}}</font>
                                                    </small>
                                                    @enderror
                                                </fieldset>
                                            </div>
                                            <div class="col-lg-12">
                                                <fieldset>
                                                    <textarea name="comments" rows="6" id="message" placeholder="Masukkan komentar anda"
                                                        class="@error('comments') is-invalid @enderror" value="{{old('comments') ?? ''}}"></textarea>
                                                    @error('comments')
                                                    <small>
                                                        <font style="color: red; font-style: italic">{{$message}}</font>
                                                    </small>
                                                    @enderror
                                                </fieldset>
                                            </div>
                                            <div class="col-lg-12">
                                                <fieldset>
                                                    <button type="submit" id="form-submit" class="btn btn-primary btn-responsive btn-blue">
                                                        Kirim
                                                    </button>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12" id="comments">
                            <div class="sidebar-item comments">
                                <h4>{{$countComments}} Komentar</h4>
                                <div class="content">
                                    <ul class="">
                                        <hr>
                                        @forelse ($article_comments as $comment)
                                        <li>
                                            <div class="right-content">
                                                <h4>{{ $comment->full_name }}<span>{{ $comment->created_at->format('d F, Y') }}</span></h4>
                                                <small>
                                                    {{ $comment->comments }}
                                                </small>
                                                {{-- <a href="#" class="mt-3 d-flex">
                                                    <small>reply</small>
                                                </a> --}}
                                            </div>
                                        </li><br>
                                        @empty
                                        <li class="mb-4">
                                            <div class="right-content mb-4">
                                                <h4>Belum ada komentar</h4>
                                            </div>
                                        </li>
                                        @endforelse

                                        {{-- <li>
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
                                        </li> --}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="800">
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
