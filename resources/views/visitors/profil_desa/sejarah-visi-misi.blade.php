@extends('visitors.layouts.master', ['title' => "Artikel"])

@section('content')

{{-- Start Breadcumb Section --}}
<?php
    $data=[
        'page1' => '> Profil Desa',
        'page2' => '> Sejarah Visi Misi'
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
                                    <img src="{{ asset('/images') }}/img-article-01.png" alt="">
                                </div>
                                <div class="down-content">
                                    <span>Lifestyle</span>
                                    <a href="post-details.html">
                                        <h4>Aenean pulvinar gravida sem nec</h4>
                                    </a>
                                    <ul class="post-info">
                                        <li><a href="#">Admin</a></li>
                                        <li><a href="#">May 12, 2020</a></li>
                                        <li><a href="#">10 Comments</a></li>
                                    </ul>
                                    <p>You can browse different tags such as <a rel="nofollow"
                                            href="https://templatemo.com/tag/multi-page"
                                            target="_parent">multi-page</a>, <a rel="nofollow"
                                            href="https://templatemo.com/tag/resume" target="_parent">resume</a>, <a
                                            rel="nofollow" href="https://templatemo.com/tag/video"
                                            target="_parent">video</a>, etc. to see more CSS templates. Sed hendrerit
                                        rutrum arcu, non malesuada nisi.
                                        Sed id facilisis turpis. Donec justo elit, dapibus vel ultricies in, molestie
                                        sit amet risus. In nunc augue,
                                        rhoncus sed libero et, tincidunt tempor nisl. Donec egestas, quam eu rutrum
                                        ultrices, sapien ante posuere
                                        nisl, ac eleifend eros orci vel ante. Pellentesque vitae eleifend velit. Etiam
                                        blandit felis sollicitudin
                                        vestibulum feugiat.
                                        <br><br>Donec tincidunt leo nec magna gravida varius. Suspendisse felis orci,
                                        egestas ac sodales quis,
                                        venenatis et neque. Vivamus facilisis dignissim arcu et blandit. Maecenas
                                        finibus dui non pulvinar lacinia. Ut
                                        lacinia finibus lorem vel porttitor. Suspendisse et metus nec libero ultrices
                                        varius eget in risus. Cras id
                                        nibh at erat pulvinar malesuada et non ipsum. Suspendisse id ipsum leo.
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
                                            <div class="col-6">
                                                <ul class="post-share">
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
