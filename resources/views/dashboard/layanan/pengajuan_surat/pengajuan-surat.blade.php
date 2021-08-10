@extends('dashboard.layouts.master', ['title' => "Pengajuan Surat"])

@section('content')

<?php
    $data=[
        'icon' => "pe-7s-mail",
        'judul' => "Pengajuan Surat",
        'link' => route('layanan.pengajuan-surat') ,
        'page1' => "Pengajuan Surat"
    ]
?>
@include('dashboard.layouts.page-title',$data)


<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">
                Tabel Info Pengajuan Surat
            </div>
            <div class="table-responsive">
                <table class="align-middle mb-0 table table-borderless table-striped table-hover p-5">
                    <thead>
                        <tr>
                            {{-- <th class=" text-center"><input type="checkbox" onchange="checkAll(this)" name="chk[]"></th> --}}
                            <th class=" text-center">No</th>
                            {{-- <th class=" text-center">Aksi</th> --}}
                            <th class=" text-center">Kode Surat</th>
                            <th class=" text-center">Jenis Surat</th>
                            <th class=" text-center">Keperluan</th>
                            {{-- yg menandatangani masih statis --}}
                            <th class=" text-center">Ditandatangani Oleh</th>
                            <th class=" text-center">Tanggal</th>
                            <th class=" text-center">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($letterSubmissions as $number => $letterSubmission)
                        <tr>
                            {{-- <td class=" text-center">
                                <input type="checkbox" name="chkbox[]" value="{{ $letterSubmission->id }}">
                            </td> --}}
                            <td class=" text-center">{{ $number + $letterSubmissions->firstItem() }}</td>
                            {{-- <td class=" text-center">
                                <div class="btn-group-sm btn-group">
                                <div class="d-flex justify-content-center">
                                    @if ($letterSubmission->status_id == 1)
                                    <a href="{{ route('layanan.pengajuan-surat.edit', $letterSubmission->id)}}"
                            class="btn btn-primary btn-sm mr-1 " data-toggle="tooltip"
                            title="Edit Pengajuan Surat" data-placement="bottom">
                            <i class="fas fa-edit"></i>
                            </a>
                            @else
                            <i>Tidak ada aksi</i>
                            @endif

            </div>
            </td> --}}
            <td class=" text-center">{{ $letterSubmission->letterType->letter_code }}</td>
            <td class=" text-center">{{ $letterSubmission->letterType->type }}</td>
            {{-- <td class=" text-center">{{ $letterSubmission->user->full_name }}</td> --}}
            <td class=" text-center">{{ $letterSubmission->keperluan }}</td>
            {{-- yg menandatangani masih statis --}}
            @if ($letterSubmission->dittd_oleh == null)
            <td class=" text-center">
                <div class="badge badge-warning">
                    belum ada
                </div>
            </td>
            @else
            <td class=" text-center"> </td>
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
                        {{ $letterSubmissions->links() }}
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>

{{-- <script>
    $('#updateStatusModal').on('show.bs.modal', function(e) {
        var button = e.relatedTarget();
        var modal = $(this);
        const letter_id = button.attr('data-id');
        const status_id = button.data("statusid");
        const status_name = button.data("statusname");
        console.log(letter_id);

        modal.find("#updateStatusModal #letter_id").attr('value', letter_id);
    });



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
</script> --}}

@endsection
