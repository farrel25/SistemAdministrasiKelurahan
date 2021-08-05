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

<div class="row" id="accordion">
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-header">Role
                        <div class="btn-actions-pane-right ">
                            {{-- <a type="button"
                                class="btn btn-lg btn-danger btn-sm text-white font-weight-normal m-1 mb-2  btn-responsive"
                                href="#">
                                <i class="fas fa-trash-alt"></i>
                                Hapus Data Terpilih
                            </a> --}}
                            <button type="button"
                                class="btn btn-lg btn-success btn-sm text-white font-weight-normal m-1 mb-2  btn-responsive"
                                data-toggle="modal" data-target="#addRoleModal">
                                <i class="fas fa-plus"></i>
                                Tambah Role
                            </button>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="align-middle mb-0 table table-borderless table-striped table-hover p-5">
                            <thead>
                                <tr>
                                    {{-- <th class=" text-center"><input type="checkbox" onchange="checkAll(this)"
                                            name="chk[]">
                                    </th> --}}
                                    <th class=" text-center">No.</th>
                                    <th class=" text-center">Aksi</th>
                                    <th class=" text-center">Role</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- <tr>
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
                                    <button type="submit" class="btn btn-danger btn-sm mr-1" data-toggle="tooltip"
                                        title="Hapus Anggota" data-placement="bottom">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                    </div>
                    </td>
                    <td class=" text-center">#</td>
                    </tr> --}}
                    @foreach ($roles as $number => $role)
                    <div id="heading-{{$role->id}}">
                        <tr data-toggle="collapse" data-roleId="{{$role->id}}" data-target="#collapse-{{$role->id}}"
                            aria-expanded="true" aria-controls="collapse-{{$role->id}}">
                            {{-- <td class=" text-center"><input type="checkbox" name="chkbox[]" value="#"></td> --}}
                            <td class="text-center">{{ $number + 1 }}</td>
                            <td class="text-center">
                                @if (Str::lower($role->name) == 'administrator')
                                <i>
                                    Aksi tidak tersedia
                                </i>
                                @else
                                <div class="d-flex justify-content-center">
                                    <span class="editRoleModal" data-toggle="modal" data-target="#editRoleModal"
                                        data-id="{{ $role->id }}" data-name="{{ $role->name }}">
                                        <button class="btn btn-primary btn-sm mr-1 " data-toggle="tooltip"
                                            title="Edit Role" data-placement="bottom">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                    </span>
                                    <form id="delete-role-form"
                                        action="{{ route('manajemen-pengguna.role-dan-hak-akses.destroy-role', $role->id) }}"
                                        method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger btn-sm mr-1" data-toggle="tooltip"
                                            title="Hapus Role" data-placement="bottom">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </div>
                                @endif
                            </td>
                            <td class="text-center">{{ $role->name }}</td>
                        </tr>
                    </div>
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

<div class="col-md-6">
    {{-- <div class="row">
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
                                    {{ $articles->links() }}
    </ul>
    </nav>
</div>
</div>
</div>
</div>
</div> --}}

<div class="main-card mb-3 card tab-content">
    @foreach ($roles as $role)
    <div id="collapse-{{$role->id}}" class="collapse show" aria-labelledby="heading-{{$role->id}}"
        data-parent="#accordion">
        <div class="card-header">
            Hak Akses {{$role->name}}
            <div class="btn-actions-pane-right ">
                <button type="button"
                    class="btn btn-lg btn-success btn-sm text-white font-weight-normal m-1 mb-2  btn-responsive"
                    data-toggle="modal" data-target="#addRolePermissionModal">
                    <i class="fas fa-plus"></i>
                    Tambah Jenis Hak Akses
                </button>
            </div>
        </div>
        <form action="{{ route('manajemen-pengguna.role-dan-hak-akses.update-role-permission', $role->id) }}"
            method="post">
            @csrf
            @method('patch')
            <div class="table-responsive ">
                <table class="align-middle mb-0 table table-borderless table-striped table-hover p-5 ">
                    <thead>
                        <tr>
                            <th class=" text-center">No.</th>
                            {{-- <th class=" text-center">Aksi</th> --}}
                            <th class=" text-center">Menu</th>
                            <th class=" text-center">Hak Akses</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $checkPermission = \DB::table('role_has_permissions')->where('role_id',
                        $role->id)->pluck('permission_id')->toArray();
                        // var_dump($checkPermission);
                        @endphp
                        @foreach ($permissions as $number => $permission)
                        <tr>
                            <td class=" text-center">{{ $number + 1 }}</td>
                            {{-- <td class="text-center">
                                        @if ($permission->id <= 9)
                                            <i>
                                                Aksi tidak tersedia
                                            </i>
                                        @else
                                            <div class="d-flex justify-content-center">
                                                <form id="delete-role-permission-form" action="{{ route('manajemen-pengguna.role-dan-hak-akses.destroy-role-permission', $permission->id) }}"
                            method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-sm mr-1" data-toggle="tooltip"
                                title="Hapus Role" data-placement="bottom">
                                <i class="fas fa-trash-alt"></i>
                            </button>
        </form>
    </div>
    @endif
    </td> --}}
    <td class=" text-center">{{ $permission->name }}</td>
    <td class=" text-center"><input type="checkbox" value="{{ $permission->id }}" name="permission_id[]"
            {{ in_array($permission->id, $checkPermission) ? 'checked':'' }}>
    </td>
    </tr>
    @endforeach
    </tbody>
    </table>
</div>
<div class="card-footer">
    <button type="submit" class="btn btn-primary  ml-auto">Simpan</button>
</div>
</form>
</div>
@endforeach
{{-- <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-header">Hak Akses 1
                </div>
                <div class="table-responsive ">
                    <table class="align-middle mb-0 table table-borderless table-striped table-hover p-5 ">
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
                <div class="card-footer">
                    <a href="#" class="btn btn-primary  ml-auto">Ubah</a>
                </div>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-header">Hak Akses 2
                </div>
                <div class="table-responsive ">
                    <table class="align-middle mb-0 table table-borderless table-striped table-hover p-5 ">
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
                <div class="card-footer">
                    <a href="#" class="btn btn-primary  ml-auto">Ubah</a>
                </div>
            </div> --}}
</div>
</div>
</div>


<script>
    $(document).on("click", ".editRoleModal", function () {
        const id = $(this).data('id');
        const name = $(this).data('name');
        $("#editRoleModal .modal-body #id").val(id);
        $("#editRoleModal .modal-body #name").val(name);
    });

    $(document).on('click', '#delete-role-form', function(e) {
        var form = this;
        e.preventDefault();
        swal.fire({
            title: 'Hapus Data Ini?',
            text: "Data tidak akan kembali dan semua akun dengan role ini jadi tidak memiliki hak akses ",
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

    $(document).on('click', '#delete-role-permission-form', function(e) {
        var form = this;
        e.preventDefault();
        swal.fire({
            title: 'Hapus Data Ini?',
            text: "Data tidak akan kembali",
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

</script>

@endsection
