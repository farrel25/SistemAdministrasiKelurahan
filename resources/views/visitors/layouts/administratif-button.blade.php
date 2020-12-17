<div class=" btn-administratif " id="myDIV">
    <a href="{{ route('profil-desa.administratif.jenis-kelamin') }}">
        <button type="button" class="btn btn-outline-dark btn-responsive {{ request()->is('profil-desa/administratif/jenis-kelamin') ? 'active' : '' }}">Jenis Kelamin</button>
    </a>
    <a href="{{ route('profil-desa.administratif.pendidikan') }}">
        <button type="button" class="btn btn-outline-dark btn-responsive {{ request()->is('profil-desa/administratif/pendidikan') ? 'active' : '' }}">Pendidikan</button>
    </a>
    <a href="{{ route('profil-desa.administratif.pekerjaan') }}">
        <button type="button" class="btn btn-outline-dark btn-responsive {{ request()->is('profil-desa/administratif/pekerjaan') ? 'active' : '' }}">Pekerjaan</button>
    </a>
    <a href="{{ route('profil-desa.administratif.agama') }}">
        <button type="button" class="btn btn-outline-dark btn-responsive {{ request()->is('profil-desa/administratif/agama') ? 'active' : '' }}">Agama</button>
    </a>
    <a href="{{ route('profil-desa.administratif.wilayah') }}">
        <button type="button" class="btn btn-outline-dark btn-responsive {{ request()->is('profil-desa/administratif/wilayah') ? 'active' : '' }}">Wilayah</button>
    </a>
    <a href="{{ route('profil-desa.administratif.warga-negara') }}">
        <button type="button" class="btn btn-outline-dark btn-responsive {{ request()->is('profil-desa/administratif/warga-negara') ? 'active' : '' }}">Warga Negara</button>
    </a>
</div>

<script>
    $(".btn-administratif > .btn").click(function() {
        $(".btn-administratif > .btn").removeClass("active");
        $(this).addClass("active");
    });
</script>