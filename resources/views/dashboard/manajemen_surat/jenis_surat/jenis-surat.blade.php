@extends('dashboard.layouts.master', ['title' => "Jenis Surat"])

@section('content')

<?php
    $data=[
        'icon' => "pe-7s-keypad",
        'judul' => "Jenis Surat",
        'link' => route('manajemen-surat.jenis-surat') ,
        'page1' => "Jenis Surat"
    ]
?>
@include('dashboard.layouts.page-title',$data)



<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">Jenis Surat
                <div class="btn-actions-pane-right ">
                    <a type="button"
                        class="btn btn-lg btn-success btn-sm text-white font-weight-normal m-1 mb-2 mt-2 btn-responsive"
                        href="{{ route('manajemen-surat.jenis-surat.export-excel') }}">
                        <i class="fas fa-file-download "></i>
                        Unduh Data Excel
                    </a>
                    <button type="button"
                        class="btn btn-lg btn-success btn-sm text-white font-weight-normal m-1 mb-2 mt-2 btn-responsive"
                        data-toggle="modal" data-target="#importExcelTypeModal">
                        <i class="fas fa-file-upload"></i>
                        Unggah Data Excel
                    </button>
                    <a type="button"
                        class="btn btn-lg btn-alternate btn-sm text-white font-weight-normal m-1 mb-2 mt-2 btn-responsive"
                        href="#"><i class="fas fa-print "></i> Cetak Data Terpilih</a>
                    <a type="button"
                        class="btn btn-lg btn-danger btn-sm text-white font-weight-normal m-1 mb-2 mt-2 btn-responsive"
                        href="#"><i class="fas fa-trash-alt"></i> Hapus Data Terpilih</a>
                    <a type="button"
                        class="btn btn-lg btn-focus btn-sm text-white m-1 mb-2 mt-2 font-weight-normal btn-responsive"
                        href="{{ route('manajemen-surat.jenis-surat.create') }}">+ Tambah Jenis Surat</a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="align-middle mb-0 table table-borderless table-striped table-hover p-5">
                    <thead>
                        <tr>
                            <th class=" text-center"><input type="checkbox" onchange="checkAll(this)" name="chk[]"></th>
                            <th class=" text-center">No.</th>
                            <th class=" text-center">Aksi</th>
                            <th class=" text-center">Kode Surat</th>
                            <th class=" text-left">Nama Surat</th>
                            <th class=" text-center">Template</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($letterTypes as $number => $type)
                        <tr>
                            <td class=" text-center"><input type="checkbox" name="chkbox[]" value="{{ $type->id }}">
                            </td>
                            <td class=" text-center">{{ $number + $letterTypes->firstItem() }}</td>
                            <td class=" text-center">
                                {{-- <div class="btn-group-sm btn-group"> --}}
                                <div class="d-flex justify-content-center">
                                    <a href="{{ route('manajemen-surat.jenis-surat.edit', $type->letter_code) }}"
                                        class="btn btn-primary btn-sm mr-1" data-toggle="tooltip"
                                        title="Edit Jenis Surat" data-placement="bottom">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    <a href="#" class="btn btn-secondary btn-sm mr-1 text-white" data-toggle="tooltip"
                                        title="Blokir Jenis Surat" data-placement="bottom"><i
                                            class="fas fa-lock"></i></a>

                                    <form id="delete-form"
                                        action="{{ route('manajemen-surat.jenis-surat.delete', $type->letter_code) }}"
                                        method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger btn-sm mr-1" data-toggle="tooltip"
                                            title="Hapus Jenis Surat" data-placement="bottom">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                            <td class=" text-center">{{ $type->letter_code }}</td>
                            <td class=" text-left">{{ $type->type }}</td>
                            <td class=" text-center">
                                {{-- <div class="btn-group-sm btn-group"> --}}
                                <a href="#" class="btn btn-info" data-toggle="tooltip" title="Hapus Jenis Surat"
                                    data-placement="bottom">
                                    <i class="fas fa-file-code"></i> Lihat isi
                                </a>
                                <a href="#" class="btn btn-success" data-toggle="tooltip" title="Hapus Jenis Surat"
                                    data-placement="bottom">
                                    <i class="fas fa-download"></i> Unduh
                                </a>
                                <a href="#" class="btn btn-warning" data-toggle="tooltip" title="Hapus Jenis Surat"
                                    data-placement="bottom">
                                    <i class="fas fa-upload"></i> Unggah
                                </a>
                                {{-- </div> --}}
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class=" d-block card-footer ">
                <div class="card-body ">
                    <nav class=" " aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            {{-- <li class="page-item"><a href="javascript:void(0);" class="page-link"
                                    aria-label="Previous"><span aria-hidden="true">«</span><span
                                        class="sr-only">Previous</span></a></li>
                            <li class="page-item active"><a href="javascript:void(0);" class="page-link">1</a></li>
                            <li class="page-item"><a href="javascript:void(0);" class="page-link">2</a></li>
                            <li class="page-item"><a href="javascript:void(0);" class="page-link">3</a></li>
                            <li class="page-item"><a href="javascript:void(0);" class="page-link">4</a></li>
                            <li class="page-item"><a href="javascript:void(0);" class="page-link">5</a></li>
                            <li class="page-item"><a href="javascript:void(0);" class="page-link"
                                    aria-label="Next"><span aria-hidden="true">»</span><span
                                        class="sr-only">Next</span></a></li> --}}
                            {{-- {{ $letterTypes->links() }} --}}
                            {{ $letterTypes->links() }}
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
            title: 'Anda yakin ingin menghapus data ini?',
            text: "Data Tidak Akan Kembali",
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
                    'Data anda masih tersimpan',
                    'error'
                )
            }
        });
    });
</script>

@endsection
