<div class="col-lg-12 mb-4">
    <div class="sidebar-item search">
        <form id="search_form" name="gs" action="{{ route('visitors.umkm.index')}}">
            @if (request('category'))
                <input type="hidden" name="category" value="{{ request('category')}}">
            @endif
            <input type="text" name="search" id="search" class="searchText" placeholder="Ketik untuk mencari..." value="{{ request('search') ?? '' }}" autocomplete="off">
        </form>
    </div>
</div>
<div class="col-lg-12  mb-4">
    <div class="pop-product">
        <div class="sidebar-heading text-center">
            <h2>Produk Populer</h2>
        </div>
        <ul>
            @php
                $popular_products = \DB::table('umkm_products')->orderBy('view_count', 'desc')->latest()->take(3)->get();
            @endphp
            @forelse ($popular_products as $product)
            <li>
                <div class="d-flex align-items-center">
                    {{-- <img src="{{ asset('/images') }}/default.png" alt="Avatar" class="image">
                    <img src="{{ asset('storage/' . $product->photo) }}" alt="Avatar" class="image"> --}}
                    <img src="{{$product->photo}}" alt="Avatar" class="image">
                    <div class="d-flex flex-column ml-3">
                        <a href="#">
                            <h5>{{$product->product_name}}</h5>
                        </a>
                        <p class=" mb-0">Rp. {{$product->price}}</p>
                    </div>
                </div>
            </li>
            @empty
            <li></li>
            @endforelse
        </ul>
    </div>
</div>
