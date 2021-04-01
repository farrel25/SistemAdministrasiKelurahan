@extends('dashboard.layouts.master', ['title' => "Dokumen Persyaratan"])

@section('content')

<?php
    $data=[
        'icon' => "pe-7s-note2",
        'judul' => "Dokumen Persyaratan",
        'link' => route('manajemen-surat.dokumen-persyaratan') ,
        'page1' => "Dokumen Persyaratan"
    ]
?>
@include('dashboard.layouts.page-title',$data)



<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">Dokumen Persyaratan
                <div class="btn-actions-pane-right ">
                    <a type="button"
                        class="btn btn-lg btn-success btn-sm text-white font-weight-normal m-1 mb-2 mt-2 btn-responsive"
                        href="{{ route('dokumen-persyaratan-export-excel') }}">
                        <i class="fas fa-file-download "> </i>
                        Unduh Data Excel
                    </a>
                    <button type="button"
                        class="btn btn-lg btn-success btn-sm text-white font-weight-normal m-1 mb-2 mt-2 btn-responsive"
                        data-toggle="modal" data-target="#importExcelDocumentModal">
                        <i class="fas fa-file-upload"></i>
                        Unggah Data Excel
                    </button>
                    {{-- <a href="{{ route('dokumen-persyaratan-delete-selected') }}"
                    class="btn btn-lg btn-danger btn-sm text-white font-weight-normal m-1 mb-2 mt-2 btn-responsive">
                    <i class="fas fa-trash-alt"></i>
                    Hapus Data Terpilih
                    </a> --}}
                    <button type="button" id="deleteSelected"
                        data-url="{{ url('/dashboard/manajemen-surat/dokumen-persyaratan/delete-selected') }}"
                        class="btn btn-lg btn-danger btn-sm text-white font-weight-normal m-1 mb-2 mt-2 btn-responsive">
                        <i class="fas fa-trash-alt"></i>
                        Hapus Data Terpilih
                    </button>
                    <a type="button"
                        class="btn btn-lg btn-focus btn-sm text-white m-1 mb-2 mt-2 font-weight-normal btn-responsive"
                        href="{{ route('dokumen-persyaratan-create') }}">+ Tambah Dokumen
                        Persyaratan</a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="align-middle mb-0 table table-borderless table-striped table-hover p-5">
                    <thead>
                        <tr>
                            {{-- <th class=" text-center"><input type="checkbox" onchange="checkAll(this)" name="chk[]"></th> --}}
                            <th class=" text-center"><input type="checkbox" id="master"></th>
                            <th class=" text-center">No</th>
                            <th class=" text-center">Aksi</th>
                            <th>Nama Dokumen</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($documents as $no => $document)
                        <tr>
                            {{-- <td class="text-center"><input type="checkbox" name="chkbox[]" value="1"></td> --}}
                            <td class="text-center">
                                <input class="sub_chk" type="checkbox" name="ids" data-id="{{ $document->id }}"
                                    value="{{ $document->id }}">
                            </td>
                            <td class="text-center">{{ $no + $documents->firstItem() }}</td>
                            <td class="text-center">
                                {{-- <div class="btn-group-sm btn-group"> --}}
                                <div class="d-flex justify-content-center">
                                    <a href="{{ route('dokumen-persyaratan-edit', $document->id) }}"
                                        class="btn btn-primary btn-sm mr-1" data-toggle="tooltip"
                                        title="Edit Dokumen Persyaratan" data-placement="bottom"><i
                                            class="fas fa-edit"></i></a>

                                    <form id="delete-form"
                                        action="{{ route('dokumen-persyaratan-delete', $document->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger btn-sm mr-1" data-toggle="tooltip"
                                            title="Hapus Dokumen Persyaratan" data-placement="bottom">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                            <td>{{ $document->document }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class=" d-block card-footer ">
                <div class="card-body ">
                    <nav class=" " aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            {{ $documents->links() }}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {

        $('#master').on('click', function(e) {
            if($(this).is(':checked', true)) {
                $(".sub_chk").prop('checked', true);
            }
            else {
                $(".sub_chk").prop('checked', false);
            }
        });

        $('#deleteSelected').on('click', function(e) {
            e.preventDefault();
            var allIds = [];
            $(".sub_chk:checked").each(function() {
                allIds.push($(this).attr('data-id'));
            });

            if(allIds.length <= 0) {
                swal.fire(
                    'Tidak ada data yang dipilih',
                    'Silahkan pilih data yang akan dihapus',
                    'info'
                )
            }
            else {
                swal.fire({
                    title: 'Anda yakin ingin menghapus data ini?',
                    text: "Data Tidak Akan Kembali ",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Iya, hapus!',
                    cancelButtonText: 'Tidak, batalkan!',
                    reverseButtons: true
                }).then((result) => {
                    if(result.isConfirmed) {
                        $.ajax({
                            // url: '/dashboard/manajemen-surat/dokumen-persyaratan/delete-selected',
                            url: $(this).data('url'),
                            type: 'DELETE',
                            headers: {'X-CSRF-Token': '{{ csrf_token() }}'},
                            data: {
                            ids:allIds,
                            _token:$("input[name=_token]").val()
                            },
                        });
                    }
                    else if (result.dismiss === Swal.DismissReason.cancel) {
                        swal.fire(
                            'Dibatalkan',
                            'Data anda masih tersimpan',
                            'error'
                        )
                    }
                })
            }
        });
    });

    // $(document).on('click', '#deleteSelected', function(e) {
    //     e.preventDefault();
    //     swal.fire({
    //         title: 'Hapus Data Ini?',
    //         text: "Data Tidak Akan Kembali ",
    //         icon: 'warning',
    //         showCancelButton: true,
    //         confirmButtonText: 'Iya, hapus!',
    //         cancelButtonText: 'Tidak, batalkan!',
    //         reverseButtons: true
    //     }).then((result) => {
    //         if (result.isConfirmed) {
    //             var allIds = [];
    //             $("input:checkbox[name=ids]:checked").each(function () {
    //                 // allIds.push($(this).val());
    //                 allIds.push($(this).attr('data-id'));
    //             });
    //             $.ajax({
    //                 // url: '/dashboard/manajemen-surat/dokumen-persyaratan/delete-selected',
    //                 url: $(this).data('url'),
    //                 type: 'DELETE',
    //                 data: {
    //                 ids:allIds,
    //                 _token:$("input[name=_token]").val()
    //                 },
    //             })
    //             // .done(
    //             //     function(data){
    //             //     $('manajemen-surat.dokumen-persyaratan');
    //             //     }
    //             // );
    //         } else if (result.dismiss === Swal.DismissReason.cancel) {
    //             swal.fire(
    //                 'Dibatalkan',
    //                 'Data anda masih tersimpan :)',
    //                 'error'
    //             )
    //         }
    //     })
    // });

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
