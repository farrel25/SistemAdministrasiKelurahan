<div class=" btn-administratif " id="myDIV">
    <a href="{{ route('profil-desa.administratif.jenis-kelamin') }}">
        <button type="button" class="btn btn-outline-dark btn-responsive">Jenis Kelamin</button>
    </a>
    <a href="{{ route('profil-desa.administratif.pendidikan') }}">
        <button type="button" class="btn btn-outline-dark btn-responsive ">Pendidikan</button>
    </a>
    <a href="{{ route('profil-desa.administratif.pekerjaan') }}">
        <button type="button" class="btn btn-outline-dark btn-responsive ">Pekerjaan</button>
    </a>
    <a href="{{ route('profil-desa.administratif.agama') }}">
        <button type="button" class="btn btn-outline-dark btn-responsive ">Agama</button>
    </a>
    <a href="{{ route('profil-desa.administratif.wilayah') }}">
        <button type="button" class="btn btn-outline-dark btn-responsive ">Wilayah</button>
    </a>
    <a href="{{ route('profil-desa.administratif.warga-negara') }}">
        <button type="button" class="btn btn-outline-dark btn-responsive ">Warga Negara</button>
    </a>
</div>

<script>
    $(".btn-administratif > .btn").click(function() {
        $(".btn-administratif > .btn").removeClass("active");
        $(this).addClass("active");
    });
</script>