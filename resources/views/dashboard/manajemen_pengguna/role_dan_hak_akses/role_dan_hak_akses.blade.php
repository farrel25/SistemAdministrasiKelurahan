@extends('dashboard.layouts.master', ['title' => "Role Dan Hak Akses "])

@section('content')

<?php
    $data=[
        'icon' => "pe-7s-plugin",
        'judul' => "Role Dan Hak Akses ",
        'link' => route('manajemen-pengguna.pengguna') ,
        'page1' => "Role Dan Hak Akses "
    ]
?>
@include('dashboard.layouts.page-title',$data)

<div class="row">
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-header">Role
                        <div class="btn-actions-pane-right ">
                            <a type="button"
                                class="btn btn-lg btn-danger btn-sm text-white font-weight-normal m-1 mb-2  btn-responsive"
                                href="#"><i class="fas fa-trash-alt"></i> Hapus Data Terpilih</a>
                            <a type="button"
                                class="btn btn-lg btn-focus btn-sm text-white font-weight-normal m-1 mb-2  btn-responsive"
                                href="{{route('manajemen-pengguna.pengguna-create')}}">+
                                Tambah Data
                            </a>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="align-middle mb-0 table table-borderless table-striped table-hover p-5">
                            <thead>
                                <tr>
                                    <th class=" text-center"><input type="checkbox" onchange="checkAll(this)"
                                            name="chk[]">
                                    </th>
                                    <th class=" text-center">No.</th>
                                    <th class=" text-center">Aksi</th>
                                    <th class=" text-center">Role</th>
                                    <th class=" text-center">Hak Akses</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class=" text-center"><input type="checkbox" name="chkbox[]" value="#">
                                    </td>
                                    <td class=" text-center">#</td>
                                    <td class=" text-center">
                                        <div class="d-flex justify-content-center">
                                            <a href="{{route('manajemen-pengguna.pengguna-edit')}}"
                                                class="btn btn-primary btn-sm mr-1 " data-toggle="tooltip"
                                                title="Edit Role Dan Hak Akses " data-placement="bottom">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form id="delete-form" action="#" method="post">
                                                <button type="submit" class="btn btn-danger btn-sm mr-1"
                                                    data-toggle="tooltip" title="Hapus Anggota" data-placement="bottom">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
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
    </div>
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-header">Hak Akses
                    </div>
                    <div class="table-responsive">
                        <table class="align-middle mb-0 table table-borderless table-striped table-hover p-5">
                            <thead>
                                <tr>
                                    <th class=" text-center">No.</th>
                                    <th class=" text-center">Menu</th>
                                    <th class=" text-center">Hak Akses</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class=" text-center">#</td>
                                    <td class=" text-center">#</td>
                                    <td class=" text-center"><input type="checkbox" name="chkbox[]" value="#">
                                    </td>
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
