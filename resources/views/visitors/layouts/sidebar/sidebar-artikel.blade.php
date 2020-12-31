<div class="col-lg-12 mb-4">
    <div class="sidebar-item search">
        <form id="search_form" name="gs" method="GET" action="#">
            <input type="text" name="q" class="searchText" placeholder="type to search..." autocomplete="on">
        </form>
    </div>
</div>
{{-- @foreach ($all_articles as $all_article)
{{$all_article->id}}
@endforeach --}}
@if ($count>0)
<?php
    $loop = $count;
    if($loop>5)
    {
        $loop=5;
    }
    $ulang = $loop;
    $id_target = array(0, 0 , 0, 0, 0);
    $counting_target = array(0, 0 , 0, 0, 0);
    $start=0;
    ?>
<ul>
    @foreach ($all_articles as $all_article)
    <li>
        <?php
                $hitung=0;
                ?>
        @foreach ($article_comments as $article_comment)
        <?php
                    if($article_comment->article_id == $all_article->id)
                    {
                        // echo $article_comment->article_id;
                        // echo $article_comment->article_id;
                        $hitung++;
                    }
                    ?>
        @endforeach
        <?php
                $counting_target[$start]=$hitung;
                if ($hitung!=0)
                {
                    // echo "[".$hitung."]";
                    if($start<=4)
                    {
                        $counting_target[$start]=$hitung;
                        $id_target[$start] = $all_article->id;
                        if($start == $ulang)
                        {
                            $storge_id=$id_target[0];
                            for ($i=0; $i <$ulang-1 ; $i++)
                            {
                                for ($j=$i+1 ;$j<$ulang ;$j++)
                                {
                                    if($counting_target[$i]<$counting_target[$j])
                                    {
                                        $k=$counting_target[$i];
                                        $counting_target[$i]=$counting_target[$j];
                                        $counting_target[$j]=$k;

                                        $storge_id =  $id_target[$i];
                                        $id_target[$i]=$id_target[$j];
                                        $id_target[$j]=$storge_id;

                                    }
                                }
                            }
                        }
                        $start++;
                    }
                    else
                    {
                        // echo "[".$hitung."]";
                        $storage=$counting_target[0];
                        $storage_id=$id_target[0];
                        $change=0;
                        for ($i=0; $i <$ulang ; $i++)
                        {
                            if($counting_target[$i]<$hitung && $change==0)
                            {
                                $storage=$counting_target[$i];
                                $counting_target[$i]=$hitung;

                                $storage_id=$id_target[$i];
                                $id_target[$i]=$all_article->id;
                                $change++;
                            }
                            else if ($change==1)
                            {
                                $hitung=$counting_target[$i];
                                $counting_target[$i]=$storage;
                                $storage=$hitung;

                                $hitung=$id_target[$i];
                                $id_target[$i]=$storage_id;
                                $storage_id=$hitung;
                            }
                        }
                    }
                }
                // echo "[".$all_article->id."]";
            ?>
        {{-- {{$all_article->id}}
        <span>{{$all_article->created_at->diffForHumans()}}</span> --}}
    </li>
    @endforeach
</ul>
<?php
    ?>
@endif
<div class="col-lg-12  mb-4">
    <div class="popular-posts">
        <div class="sidebar-heading text-center">
            <h2>Popular Posts</h2>
        </div>
        @if ($count>0)
        <ul>
            @foreach ($all_articles as $all_article)
            <?php
                if ( $all_article->id == $id_target[0] && $id_target[0] != 0)
                {
                    ?>
            <li>
                <a href="/artikel/{{$all_article->slug}}">
                    <?php
                        echo $all_article->title;
                        ?>
                </a>
                <span>{{$all_article->created_at->diffForHumans()}}</span>
            </li>
            <?php
                }
                elseif ( $all_article->id == $id_target[1] && $id_target[1] != 0)
                {
                    ?>
            <li>
                <a href="/artikel/{{$all_article->slug}}">
                    <?php
                        echo $all_article->title;
                        ?>
                </a>
                <span>{{$all_article->created_at->diffForHumans()}}</span>
            </li>
            <?php
                }
                elseif ( $all_article->id == $id_target[2] && $id_target[2] != 0)
                {
                    ?>
            <li>
                <a href="/artikel/{{$all_article->slug}}">
                    <?php
                        echo $all_article->title;
                        ?>
                </a>
                <span>{{$all_article->created_at->diffForHumans()}}</span>
            </li>
            <?php
                }
                elseif ( $all_article->id == $id_target[3] && $id_target[3] != 0)
                {
                    ?>
            <li>
                <a href="/artikel/{{$all_article->slug}}">
                    <?php
                        echo $all_article->title;
                        ?>
                </a>
                <span>{{$all_article->created_at->diffForHumans()}}</span>
            </li>
            <?php
                }
                elseif ( $all_article->id == $id_target[4] && $id_target[4] != 0)
                {
                    ?>
            <li>
                <a href="/artikel/{{$all_article->slug}}">
                    <?php
                        echo $all_article->title;
                        ?>
                </a>
                <span>{{$all_article->created_at->diffForHumans()}}</span>
            </li>
            <?php
                }
                ?>
            @endforeach
        </ul>
        @if (count($article_comments)==0)
        <ul>
            <li>
                <h5>Mohon maaf belum ada artikel terpopuler saat ini.</h5>
                <span>Terima kasih.</span>
            </li>
        </ul>
        @endif
        @if ($id_target[0]==0)
        <ul>
            <li>
                <h5>Mohon maaf belum ada artikel terpopuler saat ini.</h5>
                <span>Terima kasih.</span>
            </li>
        </ul>
        @endif
        @else
        <ul>
            <li>
                <h5>Mohon maaf Belum ada artikel yang terbit.</h5>
                <span>Terima kasih.</span>
            </li>
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
