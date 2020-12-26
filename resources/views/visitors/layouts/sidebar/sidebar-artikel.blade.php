<div class="col-lg-12 mb-4">
    <div class="sidebar-item search">
        <form id="search_form" name="gs" method="GET" action="#">
            <input type="text" name="q" class="searchText" placeholder="type to search..." autocomplete="on">
        </form>
    </div>
</div>
<div class="col-lg-12  mb-4">
    <div class="popular-posts">
        <div class="sidebar-heading text-center">
            <h2>Popular Posts</h2>
        </div>
        @if ($count>0)
        @forelse ($article_comments as $article_comment)
            <ul>
                <li>
                    {{$article_comment->article_id}}
                    <span>{{$article_comment->created_at->diffForHumans()}}</span>
                </li>
            </ul>
        @empty
            <ul>
                <li><a href="#">
                    <h5>Belum ada komentar pada postingan.</h5>
                    <span>Terima kasih.</span>
                    </a></li>
            </ul>
        @endforelse
        @else
            <ul>
                <li><a href="#">
                    <h5>Mohon maaf Belum ada artikel yang terbit.</h5>
                    <span>Terima kasih.</span>
                    </a></li>
            </ul>
        @endif
    </div>
</div>
<div class="col-lg-12 mb-4">
    <div class="covid-posts">
        <div class="sidebar-heading text-center">
            <h2>Covid-19</h2>
        </div>
        <ul>
            <li style="background-color: #FE5670; ">
                <div class="d-flex ">
                    <h5><i class="fas fa-virus fa-lg"></i>Positif</h5>
                    <div class=" ml-auto m-2" style="background-color: #FF7D91; ; border-radius:5px; height:50px; width:50px;">
                        <p data-toggle="counter-up">123</p>
                    </div>
                </div>
            </li>
            <li style="background-color: #F8B000;">
                <div class="d-flex ">
                    <h5><i class="fas fa-plus-square fa-lg"></i>Sembuh</h5>
                    <div class=" ml-auto m-2" style="background-color: #FFD878; border-radius:5px; height:50px; width:50px;">
                        <p data-toggle="counter-up">123</p>
                    </div>
                </div>
            </li>
            <li style="background-color: #3C50E0;">
                <div class="d-flex ">
                    <h5><i class="fas fa-search fa-lg"></i>ODP</h5>
                    <div class=" ml-auto m-2" style="background-color: #717EDA; ; border-radius:5px; height:50px; width:50px;">
                        <p data-toggle="counter-up">123</p>
                    </div>
                </div>

            </li>
        </ul>
    </div>
</div>
