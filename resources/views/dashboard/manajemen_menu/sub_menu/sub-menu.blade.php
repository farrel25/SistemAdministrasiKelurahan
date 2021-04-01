@extends('dashboard.layouts.master', ['title' => "Dashboard Sub Menu"])

@section('content')

<?php
    $data=[
        'icon' => "pe-7s-albums",
        'judul' => "Dashboard Sub Menu ",
        'link' => route('manajemen-menu.sub-menu') ,
        'page1' => "Dashboard Sub Menu "
    ]
?>
@include('dashboard.layouts.page-title',$data)

<div class="row">
    <div class="col-12">
        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-header">Sub Menu
                        <div class="btn-actions-pane-right ">
                            <a type="button"
                                class="btn btn-lg btn-danger btn-sm text-white font-weight-normal m-1 mb-2  btn-responsive"
                                href="#"><i class="fas fa-trash-alt"></i> Hapus Sub Menu Terpilih</a>
                            <button type="button"
                                class="btn btn-lg btn-success btn-sm text-white font-weight-normal m-1 mb-2  btn-responsive"
                                data-toggle="modal" data-target="#addSubMenuModal"><i class="fas fa-plus"></i>
                                Tambah Sub Menu
                            </button>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="align-middle mb-0 table table-borderless table-striped table-hover p-5">
                            <thead>
                                <tr>
                                    <th class="text-center"><input type="checkbox" onchange="checkAll(this)"
                                            name="chk[]">
                                    </th>
                                    <th class="text-center">No.</th>
                                    <th class="text-center">Aksi</th>
                                    <th class="text-center">Sub Menu</th>
                                    <th class="text-center">Menu Parent</th>
                                    <th class="text-center">URL Path</th>
                                    <th class="text-center">Icon</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($subMenus as $number => $subMenu)
                                <tr>
                                    <td class="text-center">
                                        <input type="checkbox" name="chkbox[]" value="#">
                                    </td>
                                    <td class="text-center">{{ $number + $subMenus->firstItem() }}</td>
                                    <td class="text-center">
                                        <div class="d-flex justify-content-center">
                                            <form method="POST"
                                                action="{{ route('manajemen-menu.sub-menu.activation', $subMenu->id) }}">
                                                @csrf
                                                @method('patch')
                                                <input type="hidden" name="is_active"
                                                    value="{{ $subMenu->is_active == 1 ? 0:1 }}">
                                                <button type="submit" class="btn btn-focus btn-sm mr-1"
                                                    data-toggle="tooltip"
                                                    title="{{ $subMenu->is_active == 1 ? 'Non Aktifkan Sub Menu':'Aktifkan Sub Menu' }}"
                                                    data-placement="bottom"
                                                >
                                                    <i class="fas {{ $subMenu->is_active == 1 ? 'fa-lock-open':'fa-lock' }}"></i>
                                                </button>
                                            </form>
                                            <span class="editSubMenuModal" data-toggle="modal" data-target="#editSubMenuModal"
                                                data-id="{{ $subMenu->id }}"
                                                data-name="{{ $subMenu->sub_menu }}"
                                                data-menuid="{{ $subMenu->menu_id }}"
                                                data-urlpath="{{ $subMenu->url_path }}"
                                                data-icon="{{ $subMenu->icon }}"
                                            >
                                                <button type="button" class="btn btn-primary btn-sm mr-1 "
                                                    data-toggle="tooltip" title="Edit Sub Menu" data-placement="bottom">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                            </span>
                                            <form id="delete-submenu-form" action="{{ route('manajemen-menu.sub-menu.destroy-sub-menu', $subMenu->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger btn-sm mr-1"
                                                    data-toggle="tooltip" title="Hapus Sub Menu"
                                                    data-placement="bottom">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                    <td class="text-center">{{ $subMenu->sub_menu }}</td>
                                    <td class="text-center">{{ $subMenu->dashboardMenu->name }}</td>
                                    <td class="text-center">{{ $subMenu->url_path }}</td>
                                    <td class="text-center">{{ $subMenu->icon }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class=" d-block card-footer ">
                        <div class="card-body ">
                            <nav class=" " aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                    {{ $subMenus->links() }}
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
    $(document).on("click", ".editSubMenuModal", function () {
        const id = $(this).data('id');
        const name = $(this).data('name');
        const menuId = $(this).data('menuid');
        const urlPath = $(this).data('urlpath');
        const icon = $(this).data('icon');
        $("#editSubMenuModal .modal-body #id").val(id);
        $("#editSubMenuModal .modal-body #name").val(name);
        $("#editSubMenuModal .modal-body #menu-id").val(menuId);
        $("#editSubMenuModal .modal-body #urlpath").val(urlPath);
        $("#editSubMenuModal .modal-body #icon").val(icon);
    });

    $(document).on('click', '#delete-submenu-form', function(e) {
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
</script>

@endsection
