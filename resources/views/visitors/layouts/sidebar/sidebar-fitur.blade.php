{{-- <div class="col-lg-12 mb-4">
    <div class="sidebar-item search">
        <form id="search_form" name="gs" method="GET" action="#">
            <input type="text" name="q" class="searchText" placeholder="type to search..." autocomplete="on">
        </form>
    </div>
</div> --}}
<div class="col-lg-12 mb-4">
    <div class="fitur">
        <div class="sidebar-heading text-center">
            <h2>Profil Desa</h2>
        </div>
        <ul>
            <li>
                <a href="{{ route('profil-desa.sejarah-visi-misi') }}">
                    <h5>Sejarah dan Visi - Misi</h5>
                </a>
            </li>
            <li>
                <a href="{{ route('profil-desa.struktur-pemerintahan') }}">
                    <h5>Struktur Pemerintahan</h5>
                </a>
            </li>
            <li>
                <a href="{{ route('profil-desa.administratif.index') }}">
                    <h5>Administratif</h5>
                </a>
            </li>
        </ul>
    </div>
</div>
<div class="col-lg-12 mb-4">
    <div class="map-posts">
        <div id="map">
            <div class="mapouter">
                <div class="gmap_canvas">
                    <iframe width="100%" height="100%" id="gmap_canvas"
                        src="https://maps.google.com/maps?q=sumbang&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
                        scrolling="no" marginheight="1" marginwidth="0">
                    </iframe>
                    <a href="https://123movies-to.org"></a>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>
