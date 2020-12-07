@extends('visitors.layouts.master', ['title' => "Artikel"])

@section('content')

{{-- Start Breadcumb Section --}}
@include('visitors.layouts.breadcumb', ['judul' => "Artikel"],['page1' => "/ Artikel"])
{{-- Start end Section --}}
{{-- Start Article Section --}}
<section id="article" class="blog-posts grid-system">
    <div class="container ">
        <div class="row">
            <div class="col-lg-8" data-aos="fade-right" data-aos-delay="800">
                <div class="all-blog-posts">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="blog-post">
                                <div class="blog-thumb">
                                    <img src="{{ asset('/images') }}/img-article-01.png" alt="">
                                </div>
                                <div class="down-content">
                                    <a href="post-details.html">
                                        <h4>Article 1</h4>
                                    </a>
                                    <ul class="post-info ">
                                        <li><a href="#">Admin</a></li>
                                        <li><a href="#">May 31, 2020</a></li>
                                    </ul>
                                    <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit
                                        officia consequat duis enim velit mollit. Exercitation veniam consequat sunt
                                        nostrud amet. <a href="#">readmore..</a> </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="blog-post">
                                <div class="blog-thumb">
                                    <img src="{{ asset('/images') }}/img-article-02.png" alt="">
                                </div>
                                <div class="down-content">
                                    <a href="post-details.html">
                                        <h4>Article 2</h4>
                                    </a>
                                    <ul class="post-info ">
                                        <li><a href="#">Admin</a></li>
                                        <li><a href="#">May 22, 2020</a></li>
                                    </ul>
                                    <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit
                                        officia consequat duis enim velit mollit. Exercitation veniam consequat sunt
                                        nostrud amet. <a href="#">readmore..</a> </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="blog-post">
                                <div class="blog-thumb">
                                    <img src="{{ asset('/images') }}/img-article-03.png" alt="">
                                </div>
                                <div class="down-content ">
                                    <a href="post-details.html">
                                        <h4>Article 3</h4>
                                    </a>
                                    <ul class="post-info ">
                                        <li><a href="#">Admin</a></li>
                                        <li><a href="#">May 18, 2020</a></li>
                                    </ul>
                                    <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit
                                        officia consequat duis enim velit mollit. Exercitation veniam consequat sunt
                                        nostrud amet. <a href="#">readmore..</a> </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="blog-post">
                                <div class="blog-thumb">
                                    <img src="{{ asset('/images') }}/img-article-04.png" alt="">
                                </div>
                                <div class="down-content">
                                    <a href="post-details.html">
                                        <h4>Article 4</h4>
                                    </a>
                                    <ul class="post-info ">
                                        <li><a href="#">Admin</a></li>
                                        <li><a href="#">May 16, 2020</a></li>
                                    </ul>
                                    <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit
                                        officia consequat duis enim velit mollit. Exercitation veniam consequat sunt
                                        nostrud amet. <a href="#">readmore..</a> </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="blog-post">
                                <div class="blog-thumb">
                                    <img src="{{ asset('/images') }}/img-article-05.png" alt="">
                                </div>
                                <div class="down-content">
                                    <a href="post-details.html">
                                        <h4>Article 5</h4>
                                    </a>
                                    <ul class="post-info ">
                                        <li><a href="#">Admin</a></li>
                                        <li><a href="#">May 12, 2020</a></li>
                                    </ul>
                                    <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit
                                        officia consequat duis enim velit mollit. Exercitation veniam consequat sunt
                                        nostrud amet. <a href="#">readmore..</a> </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="blog-post">
                                <div class="blog-thumb">
                                    <img src="{{ asset('/images') }}/img-article-06.png" alt="">
                                </div>
                                <div class="down-content">
                                    <a href="post-details.html">
                                        <h4>Article 6</h4>
                                    </a>
                                    <ul class="post-info ">
                                        <li><a href="#">Admin</a></li>
                                        <li><a href="#">May 10, 2020</a></li>
                                    </ul>
                                    <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit
                                        officia consequat duis enim velit mollit. Exercitation veniam consequat sunt
                                        nostrud amet. <a href="#">readmore..</a> </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-5">
                            <ul class="page-numbers">
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right-short" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                        </svg>
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4" data-aos="fade-left" data-aos-delay="1000">
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
@endsection