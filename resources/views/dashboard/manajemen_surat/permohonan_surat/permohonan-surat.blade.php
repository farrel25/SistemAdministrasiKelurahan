@extends('dashboard.layouts.master', ['title' => "Permohonan Surat"])

@section('content')


<?php
    $data=[
        'icon' => "pe-7s-mail",
        'judul' => "Permohonan Surat",
        'link' => route('manajemen-surat.pengajuan-surat') ,
        'page1' => "Permohonan Surat"
    ]
?>
@include('dashboard.layouts.page-title',$data)


<div class="row">
    <div class="col-md-6 col-xl">
        <div class="card mb-3 widget-content">
            <div class="widget-content-outer">
                <div class="widget-content-wrapper">
                    <div class="widget-content-left">
                        <div class="widget-heading">Total</div>
                        <div class="widget-subheading">Total Pengajuan Surat</div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-success">{{$letterSubmissionTotal}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl">
        <div class="card mb-3 widget-content">
            <div class="widget-content-outer">
                <div class="widget-content-wrapper">
                    <div class="widget-content-left">
                        <div class="widget-heading">Antrian</div>
                        <div class="widget-subheading">Total Antrian Surat</div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-primary">{{$totalAntrian}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl">
        <div class="card mb-3 widget-content">
            <div class="widget-content-outer">
                <div class="widget-content-wrapper">
                    <div class="widget-content-left">
                        <div class="widget-heading">Diproses</div>
                        <div class="widget-subheading">Total Surat Diproses</div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-warning">{{$totalDiproses}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl">
        <div class="card mb-3 widget-content">
            <div class="widget-content-outer">
                <div class="widget-content-wrapper">
                    <div class="widget-content-left">
                        <div class="widget-heading">Sudah Jadi</div>
                        <div class="widget-subheading">Total Surat Sudah Jadi</div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-success">{{$totalJadi}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl">
        <div class="card mb-3 widget-content">
            <div class="widget-content-outer">
                <div class="widget-content-wrapper">
                    <div class="widget-content-left">
                        <div class="widget-heading">Diambil</div>
                        <div class="widget-subheading">Total Surat Sudah Diambil</div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-primary">{{$totalDiambil}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">Tabel Pengajuan Surat
                <div class="btn-actions-pane-right ">
                    <a type="button"
                        class="btn btn-lg btn-success btn-sm text-white font-weight-normal m-1 mb-2 mt-2 btn-responsive"
                        href="#">
                        <i class="fas fa-file-download "></i> Unduh Data Excel
                    </a>
                    {{-- <a type="button"
                        class="btn btn-lg btn-success btn-sm text-white font-weight-normal m-1 mb-2 mt-2 btn-responsive"
                        href="#"><i class="fas fa-file-upload"></i> Unggah Data Excel</a> --}}
                    <a type="button"
                        class="btn btn-lg btn-alternate btn-sm text-white font-weight-normal m-1 mb-2 mt-2 btn-responsive"
                        href="#"><i class="fas fa-print "></i> Cetak Data Terpilih</a>
                    <a type="button"
                        class="btn btn-lg btn-danger btn-sm text-white font-weight-normal m-1 mb-2 mt-2 btn-responsive"
                        href="#"><i class="fas fa-trash-alt"></i> Hapus Data Terpilih</a>

                </div>
            </div>
            <div class="table-responsive">
                <table class="align-middle mb-0 table table-borderless table-striped table-hover p-5">
                    <thead>
                        <tr>
                            <th class=" text-center"><input type="checkbox" onchange="checkAll(this)" name="chk[]"></th>
                            <th class=" text-center">No</th>
                            <th class=" text-center">Aksi</th>
                            <th class=" text-center">Kode Surat</th>
                            <th class=" text-center">Jenis Surat</th>
                            <th class=" text-center">Nama Penduduk</th>
                            <th class=" text-center">Keperluan</th>
                            {{-- yg menandatangani masih statis --}}
                            <th class=" text-center">Ditandatangani Oleh</th>
                            <th class=" text-center">Tanggal</th>
                            <th class=" text-center">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($letterSubmissions as $number => $letterSubmission)
                        <tr>
                            <td class=" text-center">
                                <input type="checkbox" name="chkbox[]" value="{{ $letterSubmission->id }}">
                            </td>
                            <td class=" text-center">{{ $number + $letterSubmissions->firstItem() }}</td>
                            <td class=" text-center">
                                {{-- <div class="btn-group-sm btn-group"> --}}
                                <div class="d-flex justify-content-center">
                                    <span class="updateStatusModal" data-toggle="modal" data-target="#updateStatusModal"
                                        data-id="{{ $letterSubmission->id }}">
                                        <button class="btn btn-primary btn-sm mr-1" data-toggle="tooltip"
                                            title="Ubah Status Surat" data-placement="bottom">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                    </span>

                                    @if ($letterSubmission->status_id >= 3)
                                    <a href="#" class="btn btn-alternate text-white btn-sm mr-1" data-toggle="tooltip"
                                        title="Cetak Permohonan Surat" data-placement="bottom">
                                        <i class="fas fa-print"></i>
                                    </a>
                                    @endif

                                    <form id="delete-form"
                                        action="{{ route('manajemen-surat.pengajuan-surat.destroy', $letterSubmission->id) }}"
                                        method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger btn-sm mr-1" data-toggle="tooltip"
                                            title="Hapus Permohonan Surat" data-placement="bottom">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                            <td class=" text-center">{{ $letterSubmission->letterType->letter_code }}</td>
                            <td class=" text-center">{{ $letterSubmission->letterType->type }}</td>
                            <td class=" text-center">{{ $letterSubmission->user->full_name }}</td>
                            <td class=" text-center">{{ $letterSubmission->keperluan }}</td>
                            {{-- yg menandatangani masih statis --}}
                            @if ($letterSubmission->dittd_oleh == null)
                            <td class=" text-center">
                                <div class="badge badge-secondary">
                                    belum ada
                                </div>
                            </td>
                            @else
                            <td class=" text-center">{{ $letterSubmission->staff->full_name }}</td>
                            @endif
                            <td class=" text-center">
                                {{ date('d-m-Y', strtotime($letterSubmission->updated_at)) }}
                            </td>
                            <td class=" text-center">
                                @if ($letterSubmission->status_id == 1)
                                <div class="badge badge-primary">
                                    {{ $letterSubmission->letterStatus->status }}
                                </div>

                                @elseif($letterSubmission->status_id == 2)
                                <form action="action=" {{ route('manajemen-surat.pengajuan-surat.update') }}">
                                    @csrf
                                    @method('patch')
                                    <div class="dropdown d-inline-block">
                                        <button type="button" aria-haspopup="true" aria-expanded="false"
                                            data-toggle="dropdown"
                                            class="dropdown-toggle btn btn-primary btn-sm">{{ $letterSubmission->letterStatus->status }}</button>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                            @foreach ($letterStatuses as $status)
                                            <button type="button" value="{{ $status->id }}"
                                                {{ old('status_id') == $status->id ? 'selected' : '' }} tabindex="0"
                                                class="dropdown-item">{{ $status->status }}</button>
                                            @endforeach
                                        </div>
                                    </div>
                                </form>

                                @elseif($letterSubmission->status_id == 3)
                                <div class="badge badge-success">

                                    {{ $letterSubmission->letterStatus->status }}
                                </div>
                                @else
                                <div class="badge badge-secondary">
                                    {{ $letterSubmission->letterStatus->status }}
                                </div>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class=" d-block card-footer ">
                <div class="card-body ">
                    <nav class=" " aria-label="Page navigation example">
                        <ul class="pagination ">
                            {{ $letterSubmissions->links() }}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <div class="badge badge-warning">{{ $letterSubmission->letterStatus->status }}
</div> --}}

<script>
    $(document).on("click", ".updateStatusModal", function () {
        const id = $(this).data('id');
        $("#updateStatusModal .modal-body #id").val(id);
    });

    // $(document).on('click', '#btn-update-status', function(e){
    //     e.preventDefault();
    //     var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    //     const status_id = $(this).data('statusid');
    //     const statuses = $(this).data('statuses');
    //     const urlUpdate = $(this).data('url');

    //     var statusData = {};
    //     statuses.forEach(status => {
    //         statusData[status.id] = status.status;
    //     });

    //     const { value:status } = Swal.fire({
    //       title: 'Perbarui status',
    //       input: 'select',
    //       inputOptions: statusData,
    //       inputPlaceholder: 'Pilih...',
    //       showCancelButton: true,
    //       confirmButtonText: 'Simpan',
    //       cancelButtonText: 'Batal',
    //       inputValidator: (value) => {
    //         return new Promise((resolve) => {
    //           if (!value) {
    //             // resolve();
    //             resolve('Anda belum memilih status');
    //           }
    //           else if(value == status_id) {
    //             resolve('Anda memilih status yang sama');
    //           }
    //         });
    //       }
    //     }).then((value) => {
    //         if(value.isConfirmed && value.value) {
    //             $.ajax({
    //                 url: urlUpdate,
    //                 type:'PATCH',
    //                 beforeSend: function (xhr) {
    //                     var token = $('meta[name="csrf_token"]').attr('content');
    //                     if (token) {
    //                         return xhr.setRequestHeader('X-CSRF-TOKEN', token);
    //                     }
    //                 },
    //                 headers: {
    //                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //                 },
    //                 data:{
    //                     _token : CSRF_TOKEN,
    //                     _method: "PATCH",
    //                     status_id : value.value,
    //                 }
    //             });
    //         }
    //     });
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
