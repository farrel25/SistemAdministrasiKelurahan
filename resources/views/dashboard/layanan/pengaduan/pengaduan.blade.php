@extends('dashboard.layouts.master', ['title' => "Pengaduan"])

@section('content')

<?php
    $data=[
        'icon' => "pe-7s-hammer",
        'judul' => "Pengaduan",
        'link' => route('layanan.pengaduan') ,
        'page1' => "Pengaduan"
    ]
?>
@include('dashboard.layouts.page-title',$data)


<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">Tabel Pengaduan
            </div>
            <div class="table-responsive">
                <table class="align-middle mb-0 table table-borderless table-striped table-hover p-5">
                    <thead>
                        <tr>
                            <th class=" text-center"><input type="checkbox" onchange="checkAll(this)" name="chk[]"></th>
                            <th class=" text-center">No</th>
                            {{-- <th class=" text-center">Aksi</th> --}}
                            <th class=" text-center">Kategori</th>
                            <th class=" text-center">Aduan</th>
                            <th class=" text-center">Tanggal</th>
                            <th class=" text-center">Komentar Pengaduan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($complaints as $number => $complaint)
                        <tr>
                            <td class=" text-center"><input type="checkbox" name="chkbox[]" value="#"></td>
                            <td class=" text-center">{{$number + 1}}</td>
                            {{-- <td class=" text-center">
                                <div class="d-flex justify-content-center">
                                    <button data-toggle="modal" data-target="#updateStatusModal" data-community="#"
                                        name=" btn-update-status" id="btn-update-status"
                                        class="btn btn-primary openUpdateStatusModal btn-sm mr-1" data-letterId=""
                                        data-statusid="" data-statusname="" data-toggle="tooltip"
                                        title="Ubah Status Surat" data-placement="bottom">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <a href="#" class="btn btn-alternate text-white btn-sm mr-1" data-toggle="tooltip"
                                        title="Cetak Permohonan Surat" data-placement="bottom">
                                        <i class="fas fa-print"></i>
                                    </a>

                                    <form id="delete-form" action="#" method="post">
                                        <button type="submit" class="btn btn-danger btn-sm mr-1" data-toggle="tooltip"
                                            title="Hapus Permohonan Surat" data-placement="bottom">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </div>
                            </td> --}}
                            <td class=" text-center">{{$complaint->category->category}}</td>
                            <td class=" text-center">{{$complaint->complaint}}</td>
                            <td class=" text-center">
                                {{ date('d-m-Y', strtotime($complaint->created_at)) }}
                            </td>
                            <td class=" text-center"><i>belum ada komentar</i></td>
                        </tr>
                        @empty
                        <tr></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class=" d-block card-footer ">
                <div class="card-body ">
                    <nav class=" " aria-label="Page navigation example">
                        <ul class="pagination ">
                            {{-- {{ $letterSubmissions->links() }} --}}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
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
</script>

@endsection
