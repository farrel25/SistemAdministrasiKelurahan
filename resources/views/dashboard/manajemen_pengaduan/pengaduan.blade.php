@extends('dashboard.layouts.master', ['title' => "Data Pengaduan"])

@section('content')

<?php
    $data=[
        'icon' => "pe-7s-hammer",
        'judul' => "Data Pengaduan",
        'link' => route('manajemen-pengaduan.data-pengaduan') ,
        'page1' => "Data Pengaduan"
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
                            <th class=" text-center">No</th>
                            <th class=" text-center">Aksi</th>
                            <th class=" text-center">Kategori</th>
                            <th class=" text-center">Aduan</th>
                            <th class=" text-center">Nama</th>
                            <th class=" text-center">Email</th>
                            <th class=" text-center">No. telepon</th>
                            <th class=" text-center">Tanggal</th>
                            {{-- <th class=" text-center">Komentar Pengaduan</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($complaints as $number => $complaint)
                        <tr>
                            <td class=" text-center">{{$number + 1}}</td>
                            <td class=" text-center">
                                <div class="d-flex justify-content-center">
                                    <span class="komenPengaduan" data-toggle="modal" data-target="#komenPengaduan">
                                        <a href="#" class="btn btn-info text-white btn-sm mr-1" data-toggle="tooltip"
                                            title="Balas Komentar" data-placement="bottom">
                                            <i class="fas fa-comment"></i>
                                        </a>
                                    </span>


                                    <form id="delete-form" action="#" method="post">
                                        <button type="submit" class="btn btn-danger btn-sm mr-1" data-toggle="tooltip"
                                            title="Hapus Pengaduan" data-placement="bottom">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                            <td class=" text-center">{{$complaint->category->category}}</td>
                            <td class=" text-center">{{$complaint->complaint}}</td>
                            <td class=" text-center">{{$complaint->name}}</td>
                            <td class=" text-center">{{$complaint->email}}</td>
                            <td class=" text-center">{{$complaint->phone_number}}</td>
                            <td class=" text-center">
                                {{-- {{$complaint->created_at}} --}}
                                {{ date('d-m-Y', strtotime($complaint->created_at)) }}
                            </td>
                            {{-- <td class=" text-center">#</td> --}}
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
