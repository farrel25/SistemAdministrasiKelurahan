<div class="col-lg-12 mb-4">
    <div class="sidebar-item search">
        <form id="search_form" name="gs" method="GET" action="#">
            <input type="text" name="q" class="searchText" placeholder="type to search..." autocomplete="on">
        </form>
    </div>
</div>
<div class="col-lg-12  mb-4">
    <div class="pop-product">
        <div class="sidebar-heading text-center">
            <h2>Produk Populer</h2>
        </div>
        <ul>
            <li>
                <a href="#">
                    <img src="{{ asset('/images') }}/default.png" alt="Avatar" class="image">
                    <div class="d-flex flex-column">
                        <h5>Product 1</h5>
                        <p>Rp. 15.000</p>
                    </div>
                </a>
            </li>
            <li><a href="#">
                    <img src="{{ asset('/images') }}/default.png" alt="Avatar" class="image">
                    <h5>Product 2</h5>
                </a></li>
            <li><a href="#">
                    <img src="{{ asset('/images') }}/default.png" alt="Avatar" class="image">
                    <h5>Product 3</h5>
                </a></li>
        </ul>
    </div>
</div>
<div class="col-lg-12 mb-4">
    <div class="pop-store">
        <div class="sidebar-heading text-center">
            <h2>Toko Populer</h2>
        </div>
        <ul>
            <li>
                <a href="#">
                    <img src="{{ asset('/images') }}/default.png" alt="Avatar" class="image">
                    <div class="icon-search">
                        <div class="icon"><i class="icofont-ui-search"></i></div>
                    </div>
                    <h5>Toko</h5>
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="{{ asset('/images') }}/default.png" alt="">
                    <div class="icon-search">
                        <div class="icon"><i class="icofont-ui-search"></i></div>
                    </div>
                    <h5>Toko</h5>

                </a>
            </li>
        </ul>
    </div>
</div>