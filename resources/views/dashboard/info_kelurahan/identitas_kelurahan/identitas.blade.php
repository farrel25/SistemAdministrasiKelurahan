@extends('dashboard.layouts.master', ['title' => "Identitas Kelurahan"])

@section('content')

<?php
    $data=[
        'icon' => "pe-7s-culture",
        'judul' => "Identitas Kelurahan",
        'link' => route('info-kelurahan.identitas') ,
        'page1' => "Identitas Kelurahan"
    ]
?>
@include('dashboard.layouts.page-title',$data)

<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">Identitas Kelurahan
                <div class="btn-actions-pane-right "><a type="button"
                        class="btn btn-lg btn-primary btn-sm text-white font-weight-normal  mb-2 mt-2 btn-responsive"
                        href="{{route('info-kelurahan.identitas.edit')}}">
                        <i class="fas fa-edit"></i> Edit Identitas Kelurahan</a>
                    <a type="button"
                        class="btn btn-lg btn-alternate btn-sm text-white font-weight-normal btn-responsive" href="#">
                        <i class="fas fa-map"></i> Lokasi Kantor Desa </a>
                </div>
            </div>
            <div class="table-responsive ">
                <table class="align-middle mb-0 table table-borderless table-striped table-hover p-5">
                    <thead>
                        <tr class="d-flex">
                            <div class="text-center ">
                                <p class=" card-header  bg-heavy-rain">Desa</p>
                            </div>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="">
                            <td class=" text-left ">Nama Desa</td>
                            <td class=" text-right ">:</td>
                            <td class=" text-left ">#</td>
                        </tr>
                        <tr>
                            <td class=" text-left">Kode Desa</td>
                            <td class=" text-right">:</td>
                            <td class=" text-left">#</td>
                        </tr>
                        <tr>
                            <td class=" text-left">Kode Pos Desa</td>
                            <td class=" text-right">:</td>
                            <td class=" text-left">#</td>
                        </tr>
                        <tr>
                            <td class=" text-left">Kepala Desa</td>
                            <td class=" text-right">:</td>
                            <td class=" text-left">#</td>
                        </tr>
                        <tr>
                            <td class=" text-left">NIP Kepala Desa</td>
                            <td class=" text-right">:</td>
                            <td class=" text-left">#</td>
                        </tr>
                        <tr>
                            <td class=" text-left">Alamat Kantor Desa</td>
                            <td class=" text-right">:</td>
                            <td class=" text-left">#</td>
                        </tr>
                        <tr>
                            <td class=" text-left">E-Mail Desa</td>
                            <td class=" text-right">:</td>
                            <td class=" text-left">#</td>
                        </tr>
                        <tr>
                            <td class=" text-left">Telepon Desa</td>
                            <td class=" text-right">:</td>
                            <td class=" text-left">#</td>
                        </tr>
                        <tr>
                            <td class=" text-left">Website Desa</td>
                            <td class=" text-right">:</td>
                            <td class=" text-left">#</td>
                        </tr>
                    </tbody>

                </table>
                <table class="align-middle mb-0 table table-borderless table-striped table-hover p-5">
                    <thead>
                        <tr class="d-flex">
                            <div class="text-center ">
                                <p class=" card-header  bg-heavy-rain">Kecamatan</p>
                            </div>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="">
                            <td class=" text-left">Nama Kecamatan</td>
                            <td class=" text-right">:</td>
                            <td class=" text-left">#</td>
                        </tr>
                        <tr>
                            <td class=" text-left">Kode Kecamatan</td>
                            <td class=" text-right">:</td>
                            <td class=" text-left">#</td>
                        </tr>
                        <tr>
                            <td class=" text-left">Nama Camat</td>
                            <td class=" text-right">:</td>
                            <td class=" text-left">#</td>
                        </tr>
                        <tr>
                            <td class=" text-left">NIP Camat</td>
                            <td class=" text-right">:</td>
                            <td class=" text-left">#</td>
                        </tr>
                    </tbody>

                </table>
                <table class="align-middle mb-0 table table-borderless table-striped table-hover p-5">
                    <thead>
                        <tr class="d-flex">
                            <div class="text-center ">
                                <p class=" card-header  bg-heavy-rain">Kabupaten</p>
                            </div>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="">
                            <td class=" text-left">Nama Kabupaten</td>
                            <td class=" text-right">:</td>
                            <td class=" text-left">#</td>
                        </tr>
                        <tr>
                            <td class=" text-left">Kode Kabupaten</td>
                            <td class=" text-right">:</td>
                            <td class=" text-left">#</td>
                        </tr>
                    </tbody>

                </table>
                <table class="align-middle mb-0 table table-borderless table-striped table-hover p-5">
                    <thead>
                        <tr class="d-flex">
                            <div class="text-center ">
                                <p class=" card-header  bg-heavy-rain">Provinsi</p>
                            </div>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="">
                            <td class=" text-left">Nama Provinsi</td>
                            <td class=" text-right">:</td>
                            <td class=" text-left">#</td>
                        </tr>
                        <tr>
                            <td class=" text-left">Kode Provinsi</td>
                            <td class=" text-right">:</td>
                            <td class=" text-left">#</td>
                        </tr>
                    </tbody>

                </table>
            </div>

        </div>
    </div>
</div>

<script>
    $(document).on('click', '#delete-form', function(e) {
        var form = this;
        e.preventDefault();
        swal.fire({
            title: 'Hapus Data Ini?',
            text: "Data Tidak Akan Kembali ",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Iya, hapus!',
            cancelButtonText: 'Tidak, batalkan!',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                return form.submit();
            } else if (
                /* Read more about handling dismissals below */
                result.dismiss === Swal.DismissReason.cancel
            ) {
                swal.fire(
                    'Dibatalkan',
                    'Data anda masih tersimpan :)',
                    'error'
                )
            }
        })
    });
</script>

@endsection
