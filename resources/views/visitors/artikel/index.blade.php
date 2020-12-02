@extends('visitors.layouts.master', ['title' => "Artikel"])

@section('content')

{{-- Start Article Section --}}
<section id="article" class="blog-posts grid-system">
    <div class="container ">
        <div class="row mb-5 mt-3" data-aos="fade-up" data-aos-delay="400">
            <div class=" col text-center ">
                <h1 style="font-weight: 600;">Artikel</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8" data-aos="fade-up" data-aos-delay="800">
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
                                    <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet. <a href="#">readmore..</a> </p>
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
                                    <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet. <a href="#">readmore..</a> </p>
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
                                    <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet. <a href="#">readmore..</a> </p>
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
                                    <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet. <a href="#">readmore..</a> </p>
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
                                    <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet. <a href="#">readmore..</a> </p>
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
                                    <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet. <a href="#">readmore..</a> </p>
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
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="1000">
                <div class="sidebar">
                    <div class="row">
                        <div class="col-lg-12 mb-5">
                            <div class="sidebar-item search">
                                <form id="search_form" name="gs" method="GET" action="#">
                                    <input type="text" name="q" class="searchText" placeholder="type to search..." autocomplete="on">
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-12 rounded-lg p-4 mb-5" style="background-color: #EEF5FF;">
                            <div class="popular-posts">
                                <div class="sidebar-heading text-center">
                                    <h2>Popular Posts</h2>
                                </div>
                                <ul>
                                    <li><a href="#">
                                            <h5>Article Popular 1</h5>
                                            <span>May 31, 2020</span>
                                        </a></li>
                                    <li><a href="#">
                                            <h5>Article Popular 2</h5>
                                            <span>May 28, 2020</span>
                                        </a></li>
                                    <li><a href="#">
                                            <h5>Article Popular 3</h5>
                                            <span>May 14, 2020</span>
                                        </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-12 p-4 rounded-lg" style="background-color: #EEF5FF;">
                            <div class="covid-posts">
                                <div class="sidebar-heading text-center">
                                    <h2>Covid-19</h2>
                                </div>
                                <ul>
                                    <li style="background-color: #FE5670; ">
                                        <div class="row">
                                            <div class=" col-9">
                                                <h5> Positif
                                                </h5>
                                            </div>
                                            <div class="col-2 " style="background-color: #FF7D91; ">
                                                <p data-toggle="counter-up">123</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li style="background-color: #F8B000;">
                                        <div class="row ">
                                            <div class=" col-9">
                                                <h5>Dalam Pemantauan</h5>
                                            </div>
                                            <div class="col-2" style="background-color: #FFD878; ">
                                                <p data-toggle="counter-up">123</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li style="background-color: #3C50E0;">
                                        <div class="row ">
                                            <div class=" col-9">
                                                <h5>Sembuh</h5>
                                            </div>
                                            <div class="col-2" style="background-color: #717EDA; ">
                                                <p data-toggle="counter-up">123</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
{{-- End Article Section --}}
@endsection