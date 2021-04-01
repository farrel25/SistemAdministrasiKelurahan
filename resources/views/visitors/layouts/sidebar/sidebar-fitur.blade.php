<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap&libraries=&v=weekly" defer>
</script>
<script>
    // Initialize and add the map
    function initMap() {
        // The location of Uluru
        const uluru = {
            lat: -25.344,
            lng: 131.036
        };
        // The map, centered at Uluru
        const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 4,
            center: uluru,
        });
        // The marker, positioned at Uluru
        const marker = new google.maps.Marker({
            position: uluru,
            map: map,
        });
    }
</script>

<div class="col-lg-12 mb-4">
    <div class="sidebar-item search">
        <form id="search_form" name="gs" method="GET" action="#">
            <input type="text" name="q" class="searchText" placeholder="type to search..." autocomplete="on">
        </form>
    </div>
</div>
<div class="col-lg-12 mb-4">
    <div class="fitur">
        <div class="sidebar-heading text-center">
            <h2>Profil Desa</h2>
        </div>
        <ul>
            <li><a href="#">
                    <h5>Sejarah dan Visi - Misi</h5>
                </a></li>
            <li><a href="#">
                    <h5>Struktur Pemerintahan</h5>
                </a></li>
            <li><a href="#">
                    <h5>Administratif</h5>
                </a></li>
        </ul>
    </div>
</div>
<div class="col-lg-12 mb-4">
    <div class="map-posts">
        <div class="sidebar-heading text-center">
            <h2>Map</h2>
        </div>
        <div id="map">
        </div>
    </div>
</div>
