@extends('dashboard.layouts.master', ['title' => "Dashboard Menu "])

@section('content')

<?php
    $data=[
        'icon' => "pe-7s-photo-gallery",
        'judul' => "Dashboard Menu ",
        'link' => route('manajemen-menu.menu') ,
        'page1' => "Dashboard Menu "
    ]
?>
@include('dashboard.layouts.page-title',$data)

<div class="row">
    <div class="col-12">
        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-header">Menu
                        <div class="btn-actions-pane-right ">
                            <a type="button"
                                class="btn btn-lg btn-danger btn-sm text-white font-weight-normal m-1 mb-2  btn-responsive"
                                href="#"><i class="fas fa-trash-alt"></i> Hapus Menu Terpilih</a>
                            <button type="button"
                                class="btn btn-lg btn-success btn-sm text-white font-weight-normal m-1 mb-2  btn-responsive"
                                data-toggle="modal" data-target="#addMenuModal">
                                <i class="fas fa-plus"></i>
                                Tambah Menu
                            </button>
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
                                    <th class="text-center">Aksi</th>
                                    <th class="text-center">Menu</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($menus as $number => $menu)
                                <tr>
                                    <td class=" text-center">
                                        <input type="checkbox" name="chkbox[]" value="#">
                                    </td>
                                    <td class=" text-center">{{ ++$number }}</td>
                                    <td class="text-center">
                                        <div class="d-flex justify-content-center">

                                            <a href="#" target="_blank" class="btn btn-info btn-sm mr-1"
                                                data-toggle="tooltip" title="Pindah Posisi Keatas" title="Pindah Atas"
                                                data-placement="bottom">
                                                <i class="fas fa-caret-square-up "></i>
                                            </a>

                                            <a href="#" target="_blank" class="btn btn-info btn-sm mr-1"
                                                data-toggle="tooltip" title="Pindah Posisi Kebawah" title="Pindah Bawah"
                                                data-placement="bottom">
                                                <i class="fas fa-caret-square-down"></i>
                                            </a>
                                            <a href="{{ route('manajemen-menu.sub-menu') }}"
                                                class="btn btn-secondary btn-sm mr-1 text-white" data-toggle="tooltip"
                                                title="Sub Menu " data-placement="bottom">
                                                <i class="fas fa-lock"></i>
                                            </a>
                                            <a href="{{ route('manajemen-menu.sub-menu') }}"
                                                class="btn btn-success btn-sm mr-1 " data-toggle="tooltip"
                                                title="Tambah Sub Menu " data-placement="bottom">
                                                <i class="fas fa-plus"></i>
                                            </a>
                                            <span class="editMenuModal" data-toggle="modal" data-target="#editMenuModal"
                                                data-id="{{$menu->id}}" data-name="{{$menu->name}}">
                                                <button type="button" class="btn btn-primary btn-sm mr-1 "
                                                    data-toggle="tooltip" title="Edit Menu" data-placement="bottom">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                            </span>
                                            <form id="delete-form"
                                                action="{{ route('manajemen-menu.menu.destroy-menu', $menu->id) }}"
                                                method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger btn-sm mr-1 "
                                                    data-toggle="tooltip" title="Hapus Menu" data-placement="bottom">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                    <td class="text-center">{{ $menu->name }}</td>
                                </tr>
                                @endforeach
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
                    'Data anda masih tersimpan',
                    'error'
                )
            }
        })
    });

    $(document).on("click", ".editMenuModal", function () {
        const menuId = $(this).data('id');
        const menuName = $(this).data('name');
        $("#editMenuModal .modal-body #menu-id").val(menuId);
        $("#editMenuModal .modal-body #name").val(menuName);
    });

</script>

@endsection
