@extends('dashboard.layouts.master', ['title' => "Pengajuan Surat"])

@section('content')

<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="  pe-7s-mail icon-gradient bg-mean-fruit">
                </i>
            </div>
            <div>Pengajuan Surat
                <div class="page-title-subheading">Pengajuan Surat
                </div>
            </div>
        </div>
        <div class="page-title-actions d-flex">
            <a href="{{ route('visitors.beranda.index') }}" type="button" data-toggle="tooltip"
                title="Kembali Ke Beranda" data-placement="left" class="btn-shadow btn btn-dark pt-2">
                <i class="fas fa-home"></i>
            </a>
            <div class="input-group ml-3">
                <input type="text" class="form-control" id="#" placeholder="Search" aria-describedby="inputGroupPrepend"
                    required>
                <a href="#" class="input-group-prepend text-decoration-none ">
                    <span class="input-group-text rounded-right" id="inputGroupPrepend"><i
                            class="fas fa-search"></i></span>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6 col-xl-4">
        <div class="card mb-3 widget-content">
            <div class="widget-content-outer">
                <div class="widget-content-wrapper">
                    <div class="widget-content-left">
                        <div class="widget-heading">Surat Masuk</div>
                        <div class="widget-subheading">Total Surat Masuk</div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-primary">#</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-4">
        <div class="card mb-3 widget-content">
            <div class="widget-content-outer">
                <div class="widget-content-wrapper">
                    <div class="widget-content-left">
                        <div class="widget-heading">Surat Keluar</div>
                        <div class="widget-subheading">Total Surat Keluar</div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-warning">#</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-4">
        <div class="card mb-3 widget-content">
            <div class="widget-content-outer">
                <div class="widget-content-wrapper">
                    <div class="widget-content-left">
                        <div class="widget-heading">Pengajuan Surat</div>
                        <div class="widget-subheading">Total Pengajuan Surat</div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-success">{{$letterSubmissionTotal}}</div>
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
                        href="#"><i class="fas fa-file-download "> </i> Unduh Data Excel</a>
                    <a type="button"
                        class="btn btn-lg btn-success btn-sm text-white font-weight-normal m-1 mb-2 mt-2 btn-responsive"
                        href="#"><i class="fas fa-file-upload"></i> Unggah Data Excel</a>
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
                            <th class=" text-center">Actions</th>
                            <th class=" text-center">Kode Surat</th>
                            <th class=" text-center">Jenis Surat</th>
                            <th class=" text-center">Nama Penduduk</th>
                            <th class=" text-center">Keperluan</th>
                            <th class=" text-center">Ditangani Oleh</th>
                            <th class=" text-center">Tanggal</th>
                            <th class=" text-center">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($letterSubmissions as $number => $letterSubmission)
                        <tr>
                            <td class=" text-center"><input type="checkbox" name="chkbox[]"
                                    value="{{ $letterSubmission->id }}"></td>
                            <td class=" text-center">{{ $number + $letterSubmissions->firstItem() }}</td>
                            <td class=" text-center">
                                <div class="btn-group-sm btn-group">
                                    <!-- Modal ada di master -->
                                    {{-- <button data-toggle="modal" data-target="#exampleModal" class="btn btn-info"
                                        data-toggle="tooltip" title="Ubah Permohonan Surat" data-placement="bottom">
                                        <i class="fas fa-edit"></i>
                                    </button> --}}
                                    <button data-toggle="modal" data-target="#updateStatusModal"
                                        name="btn-update-status" id="btn-update-status"
                                        class="btn btn-info openUpdateStatusModal"
                                        data-letterId="{{$letterSubmission->id}}"
                                        data-statusid="{{$letterSubmission->status_id}}"
                                        data-statusname="{{$letterSubmission->letterStatus->status}}"
                                        data-toggle="tooltip" title="Ubah Status Surat" data-placement="bottom">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    @if ($letterSubmission->status_id >= 3)
                                    <a href="#" class="btn btn-alternate text-white" data-toggle="tooltip"
                                        title="Cetak Permohonan Surat" data-placement="bottom">
                                        <i class="fas fa-print"></i>
                                    </a>
                                    @endif
                                    <a href="#" class="btn btn-danger" data-toggle="tooltip"
                                        title="Hapus Permohonan Surat" data-placement="bottom">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                </div>
                            </td>
                            <td class=" text-center">{{ $letterSubmission->letterType->letter_code }}</td>
                            <td class=" text-center">{{ $letterSubmission->letterType->type }}</td>
                            <td class=" text-center">{{ $letterSubmission->user->full_name }}</td>
                            <td class=" text-center">{{ $letterSubmission->keperluan }}</td>
                            <td class=" text-center">Bapaq</td>
                            <td class=" text-center">
                                {{ date('d-m-Y', strtotime($letterSubmission->updated_at)) }}
                            </td>
                            <td class=" text-center">
                                @if ($letterSubmission->status_id == 1)
                                <div class="badge badge-primary">
                                    {{ $letterSubmission->letterStatus->status }}
                                </div>
                                @elseif($letterSubmission->status_id == 2)
                                <div class="badge badge-warning">
                                    {{ $letterSubmission->letterStatus->status }}
                                </div>
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
                            <!-- {{-- <li class="page-item"><a href="javascript:void(0);" class="page-link"
                                aria-label="Previous"><span aria-hidden="true">«</span><span
                                    class="sr-only">Previous</span></a></li>
                        <li class="page-item active"><a href="javascript:void(0);" class="page-link">1</a></li>
                        <li class="page-item"><a href="javascript:void(0);" class="page-link">2</a></li>
                        <li class="page-item"><a href="javascript:void(0);" class="page-link">3</a></li>
                        <li class="page-item"><a href="javascript:void(0);" class="page-link">4</a></li>
                        <li class="page-item"><a href="javascript:void(0);" class="page-link">5</a></li>
                        <li class="page-item"><a href="javascript:void(0);" class="page-link" aria-label="Next"><span
                                    aria-hidden="true">»</span><span class="sr-only">Next</span></a></li> --}} -->
                            {{ $letterSubmissions->links() }}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // $('#exampleModal').on('show.bs.modal', function(e) {
    //     var button = e.relatedTarget();
    //     var modal = $(this);
    //     const letter_id = button.attr('data-id');
    //     const status_id = button.data("statusid");
    //     const status_name = button.data("statusname");
    //     console.log(letter_id);

    //     modal.find("#exampleModal #letter_id").attr('value', letter_id);
    // });

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
</script>

@endsection
