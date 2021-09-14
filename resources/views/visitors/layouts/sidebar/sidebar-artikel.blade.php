<div class="col-lg-12 mb-4 mt-1">
    <div class="sidebar-item search">
        <form id="search_form" name="gs" action="{{ route('visitors.artikel.index')}}">
            <input type="text" name="search" id="search" class="searchText" placeholder="Ketik untuk mencari..." value="{{ request('search') ?? '' }}">
        </form>
    </div>

    {{-- <form class="form-row justify-content-center" action="{{ route('visitors.artikel.index')}}">
        <div class="input-group">
            <input type="text" class="form-control mr-3" type="Ketik untuk mencari..." placeholder="Search" aria-label="Ketik untuk mencari...">
            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Cari</button>
        </div>
    </form> --}}

    {{-- <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
        <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="button">Button</button>
        </div>
    </div> --}}
</div>

<div class="col-lg-12  mb-4">
    <div class="popular-posts">
        <div class="sidebar-heading">
            <h2 class="text-center">Artikel Terpopuler</h2>
            <ul>
                @php
                    $popular_articles = \DB::table('articles')->orderBy('read_count', 'desc')->latest()->take(5)->get();
                @endphp
                @foreach ($popular_articles as $article)
                <li>
                    <a href="{{ route('visitors.artikel.show', $article->slug) }}">
                        {{$article->title}}
                    </a>
                    <span>
                        {{-- {{\Carbon\Carbon::parse($article->created_at)->diffForHumans()}} --}}
                        {{\Carbon\Carbon::parse($article->created_at)->format('d F, Y')}}
                    </span>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>

<div class="col-lg-12 ">
    <div class="covid-posts">
        <div class="sidebar-heading text-center">
            <h2>Covid-19</h2>
        </div>
        <ul>
            <li style="background-color: #FE5670; ">
                <div class="d-flex ">
                    <h5><i class="fas fa-virus fa-lg"></i>Positif</h5>
                    <div class=" ml-auto m-2"
                        style="background-color: #FF7D91; ; border-radius:5px; height:50px; width:50px;">
                        <p data-toggle="counter-up">123</p>
                    </div>
                </div>
            </li>
            <li style="background-color: #F8B000;">
                <div class="d-flex ">
                    <h5><i class="fas fa-plus-square fa-lg"></i>Sembuh</h5>
                    <div class=" ml-auto m-2"
                        style="background-color: #FFD878; border-radius:5px; height:50px; width:50px;">
                        <p data-toggle="counter-up">123</p>
                    </div>
                </div>
            </li>
            <li style="background-color: #3C50E0;">
                <div class="d-flex ">
                    <h5><i class="fas fa-search fa-lg"></i>ODP</h5>
                    <div class=" ml-auto m-2"
                        style="background-color: #717EDA; ; border-radius:5px; height:50px; width:50px;">
                        <p data-toggle="counter-up">123</p>
                    </div>
                </div>

            </li>
        </ul>
    </div>
</div>
