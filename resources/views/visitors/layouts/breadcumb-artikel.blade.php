<section id="breadcumb" class="breadcumb-m ">
    <div class="container">
        <div class="row mt-3 " data-aos="fade-up" data-aos-delay="300">
            <div class="col-lg-12 text-center">
                <nav aria-label="breadcrumb">
                    <small>
                        <ol class="breadcrumb" style="background: #EEF5FF; content: none;">
                            <li class=" "><a href="{{ route('visitors.beranda.index') }}">Beranda </a></li>
                            <li class=" active" aria-current="page">
                                <a href="{{ $link1 ?? '#' }}">&nbsp;{{ $page1 ?? ' '}} </a>
                            </li>
                            <li class=" active" aria-current="page">&nbsp;{{ $page2 ?? ' '}} </li>
                            <li class=" active" aria-current="page">&nbsp;{{ $page3 ?? ' '}}</li>
                        </ol>
                    </small>
                </nav>
            </div>
        </div>
    </div>
</section>
