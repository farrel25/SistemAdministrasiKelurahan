@extends('dashboard.layouts.master', ['title' => "Wilayah "])

@section('content')

<?php
    $data=[
        'icon' => "pe-7s-map",
        'judul' => "Wilayah ",
        'link' => route('info-desa.wilayah') ,
        'page1' => "Wilayah "
    ]
?>
@include('dashboard.layouts.page-title',$data)

<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">Wilayah
                <div class="btn-actions-pane-right ">
                    <a type="button"
                        class="btn btn-lg btn-success btn-sm text-white font-weight-normal m-1 mb-2  btn-responsive"
                        href="#">
                        <i class="fas fa-file-download "> </i> Unduh Data Excel
                    </a>
                    <button type="button"
                        class="btn btn-lg btn-success btn-sm text-white font-weight-normal btn-responsive m-1 mb-2 "
                        data-toggle="modal" data-target="#importExcelVillagerModal">
                        <i class="fas fa-file-upload"></i> Unggah Data Excel
                    </button>
                    <a type="button"
                        class="btn btn-lg btn-alternate btn-sm text-white font-weight-normal m-1 mb-2  btn-responsive"
                        href="#"><i class="fas fa-print "></i> Cetak </a>
                    <a type="button"
                        class="btn btn-lg btn-focus btn-sm text-white font-weight-normal m-1 mb-2  btn-responsive"
                        href="{{route('info-desa.wilayah-create')}}">+
                        Tambah Data
                    </a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="align-middle mb-0 table table-borderless table-striped table-hover p-5">
                    <thead>
                        <tr>
                            <th class=" text-center">No.</th>
                            <th class=" text-center">Aksi</th>
                            <th class=" text-center">Dusun</th>
                            <th class=" text-center">Kepala Dusun</th>
                            <th class=" text-center">RW</th>
                            <th class=" text-center">RT</th>
                            <th class=" text-center">KK</th>
                            <th class=" text-center">L+P</th>
                            <th class=" text-center">L</th>
                            <th class=" text-center">P</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class=" text-center">#</td>
                            <td class=" text-center">
                                <div class="d-flex justify-content-center">
                                    <a href="#" class="btn btn-alternate btn-sm mr-1 text-white" data-toggle="tooltip"
                                        title="Rincian Sub Wilayah" data-placement="bottom"><i class="fas fa-list"></i>
                                    </a>
                                    <a href="{{route('info-desa.wilayah-edit')}}" class="btn btn-primary btn-sm mr-1 "
                                        data-toggle="tooltip" title="Edit wilayah " data-placement="bottom">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form id="delete-form" action="#" method="post">
                                        <button type="submit" class="btn btn-danger btn-sm mr-1" data-toggle="tooltip"
                                            title="Hapus Anggota" data-placement="bottom">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                    <a href="#" class="btn btn-secondary btn-sm mr-1 text-white" data-toggle="tooltip"
                                        title="Blokir Jenis Surat" data-placement="bottom"><i class="fas fa-lock"></i>
                                        {{-- <i class="fas fa-unlock"></i>  untuk unlock--}}
                                    </a>
                                    <a href="#" class="btn btn-focus btn-sm mr-1 text-white" data-toggle="tooltip"
                                        title="Blokir Jenis Surat" data-placement="bottom"><i class="fas fa-map"></i>
                                    </a>
                                </div>
                            </td>
                            <td class=" text-center">#</td>
                            <td class=" text-center">#</td>
                            <td class=" text-center">#</td>
                            <td class=" text-center">#</td>
                            <td class=" text-center">#</td>
                            <td class=" text-center">#</td>
                            <td class=" text-center">#</td>
                            <td class=" text-center">#</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class=" d-block card-footer ">
                <div class="card-body ">
                    <nav class=" " aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            {{-- {{ $articles->links() }} --}}
                        </ul>
                    </nav>
                </div>
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
