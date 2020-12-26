@extends('visitors.layouts.master', ['title' => "Artikel"])

@section('content')

    {{-- Start Breadcumb Section --}}
    @include('visitors.layouts.breadcumb', ['judul' => "Artikel"],['page1' => "/ Artikel",'page2' => "/ Judul Artikel"])
    {{-- Start end Section --}}
    <section id="article" class="blog-posts grid-system">
        <div class="container ">
            <div class="row">
                <div class="col-lg-8" data-aos="fade-right" data-aos-delay="1000">
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
                                        <p>You can browse different tags such as <a rel="nofollow" href="https://templatemo.com/tag/multi-page"
                                                target="_parent">multi-page</a>, <a rel="nofollow" href="https://templatemo.com/tag/resume"
                                                target="_parent">resume</a>, <a rel="nofollow" href="https://templatemo.com/tag/video"
                                                target="_parent">video</a>, etc. to see more CSS templates. Sed hendrerit rutrum arcu, non malesuada nisi.
                                            Sed id facilisis turpis. Donec justo elit, dapibus vel ultricies in, molestie sit amet risus. In nunc augue,
                                            rhoncus sed libero et, tincidunt tempor nisl. Donec egestas, quam eu rutrum ultrices, sapien ante posuere
                                            nisl, ac eleifend eros orci vel ante. Pellentesque vitae eleifend velit. Etiam blandit felis sollicitudin
                                            vestibulum feugiat.
                                            <br><br>Donec tincidunt leo nec magna gravida varius. Suspendisse felis orci, egestas ac sodales quis,
                                            venenatis et neque. Vivamus facilisis dignissim arcu et blandit. Maecenas finibus dui non pulvinar lacinia. Ut
                                            lacinia finibus lorem vel porttitor. Suspendisse et metus nec libero ultrices varius eget in risus. Cras id
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
                            <div class="col-lg-12">
                                <div class="sidebar-item comments">
                                    <h4 class=" ml-3">4 Comments</h4>


                                    <div class="content">
                                        <ul class="ml-3 mr-3">
                                            <hr>
                                            <li>
                                                <div class="right-content">
                                                    <h4>Charles Kate<span>May 16, 2020</span></h4>
                                                    <small>Fusce ornare mollis eros. Duis et diam vitae justo fringilla condimentum eu quis leo.
                                                        Vestibulum idturpis porttitor sapien facilisis scelerisque. Curabitur a nisl eu lacus convallis
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
                                                    <small>In porta urna sed venenatis sollicitudin. Praesent urna sem, pulvinar vel mattis eget.</small>
                                                    <a href="#" class="mt-3 d-flex">
                                                        <small>reply</small>
                                                    </a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="right-content">
                                                    <h4>Belisimo Mama<span>May 16, 2020</span></h4>
                                                    <small>Nullam nec pharetra nibh. Cras tortor nulla, faucibus id tincidunt in, ultrices eget ligula.
                                                        Sed vitae suscipit ligula. Vestibulum id turpis volutpat, lobortis turpis ac, molestie
                                                        nibh.</small>
                                                    <a href="#" class="mt-3 d-flex">
                                                        <small>reply</small>
                                                    </a>
                                                </div>
                                            </li>
                                            <li class="replied">
                                                <div class="right-content">
                                                    <h4>Thirteen Man<span>May 22, 2020</span></h4>
                                                    <small>Mauris sit amet justo vulputate, cursus massa congue, vestibulum odio. Aenean elit nunc,
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
                                        <h2>Your comment</h2>
                                    </div>
                                    <div class="content">
                                        <form id="comment" action="#" method="post">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-12">
                                                    <fieldset>
                                                        <input name="name" type="text" id="name" placeholder="Your name" required="">
                                                    </fieldset>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <fieldset>
                                                        <input name="email" type="text" id="email" placeholder="Your email" required="">
                                                    </fieldset>
                                                </div>
                                                <div class="col-lg-12">
                                                    <fieldset>
                                                        <textarea name="message" rows="6" id="message" placeholder="Type your comment"
                                                            required=""></textarea>
                                                    </fieldset>
                                                </div>
                                                <div class="col-lg-12">
                                                    <fieldset>
                                                        <button type="submit" id="form-submit" class="main-button">Submit</button>
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
