{{-- LETTER SUBMISSION MODAL --}}
<section id="letter">

    {{-- UPDATE LETTER STATUS --}}
    @if (Request::url() == route('manajemen-surat.pengajuan-surat'))
    <div class="modal fade" id="updateStatusModal" tabindex="-1" role="dialog" aria-labelledby="updateStatusModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="updateStatusModalLabel">Perbarui Status Pengajuan Surat</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('manajemen-surat.pengajuan-surat.update') }}" method="post">
                    @csrf
                    @method('patch')
                    <div class="modal-body">
                        <input type="hidden" id="id" name="id" value="">

                        <div class="form-group">
                            <label for="status_id" class="">Status</label>

                            <select name="status_id" id="status_id"
                                class="mb-2 form-control @error('status_id') is-invalid @enderror" value="">
                                <option></option>
                                @foreach ($letterStatuses as $status)
                                <option value="{{ $status->id }}"
                                    {{ old('status_id') == $status->id ? 'selected' : '' }}>
                                    {{ $status->status }}
                                </option>
                                @endforeach
                            </select>

                            @error('status_id')
                            <span class="invalid-feedback mt-2" role="alert">
                                <i>{{ $message }}</i>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endif

</section>



<!-- Modal Import Excel Data Penduduk -->
<div class="modal fade" id="importExcelVillagerModal" tabindex="-1" aria-labelledby="importExcelVillagerModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="importExcelVillagerModalLabel">Unggah Data Penduduk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('penduduk-import-excel') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <label for="data_penduduk" class="">Upload File</label>
                    <input name="data_penduduk" id="data_penduduk" type="file"
                        class="form-control-file @error('data_penduduk') is-invalid @enderror">
                    <small class="form-text text-muted">Unggah file data penduduk dalam format.xlsx</small>
                    @error('data_penduduk')
                    <span class="invalid-feedback mt-2" role="alert">
                        <i>{{ $message }}</i>
                    </span>
                    @enderror

                    <button type="submit" class="btn btn-sm btn-success mt-3">Import</button>
                    <button type="button" class="btn btn-sm btn-outline-danger mt-3 mr-2"
                        data-dismiss="modal">Batal</button>
                </form>
            </div>
            {{-- <div class="modal-footer">
            </div> --}}
        </div>
    </div>
</div>

<!-- Modal Import Excel Dokumen Perysaratan -->
<div class="modal fade" id="importExcelDocumentModal" tabindex="-1" aria-labelledby="importExcelDocumentModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="importExcelDocumentModalLabel">Unggah Data Dokumen Perysaratan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('dokumen-persyaratan-import-excel') }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <label for="dokumen_persyaratan" class="">Upload File</label>
                    <input name="dokumen_persyaratan" id="dokumen_persyaratan" type="file"
                        class="form-control-file @error('dokumen_persyaratan') is-invalid @enderror">
                    <small class="form-text text-muted">Unggah file dokumen persyaratan dalam format.xlsx</small>
                    @error('dokumen_persyaratan')
                    <span class="invalid-feedback mt-2" role="alert">
                        <i>{{ $message }}</i>
                    </span>
                    @enderror

                    <button type="submit" class="btn btn-sm btn-success mt-3">Import</button>
                    <button type="button" class="btn btn-sm btn-outline-danger mt-3 mr-2"
                        data-dismiss="modal">Batal</button>
                </form>
            </div>
            {{-- <div class="modal-footer">
            </div> --}}
        </div>
    </div>
</div>

<!-- Modal Import Excel Jenis Surat -->
<div class="modal fade" id="importExcelTypeModal" tabindex="-1" aria-labelledby="importExcelTypeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="importExcelTypeModalLabel">Unggah Data Jenis Surat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('manajemen-surat.jenis-surat.import-excel') }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <label for="letter_types" class="">Upload File</label>
                    <input name="letter_types" id="letter_types" type="file"
                        class="form-control-file @error('letter_types') is-invalid @enderror">
                    <small class="form-text text-muted">Unggah file jenis surat dalam format.xlsx</small>
                    @error('letter_types')
                    <span class="invalid-feedback mt-2" role="alert">
                        <i>{{ $message }}</i>
                    </span>
                    @enderror

                    <button type="submit" class="btn btn-sm btn-success mt-3">Import</button>
                    <button type="button" class="btn btn-sm btn-outline-danger mt-3 mr-2"
                        data-dismiss="modal">Batal</button>
                </form>
            </div>
            {{-- <div class="modal-footer">
            </div> --}}
        </div>
    </div>
</div>



{{-- MENU MANAGEMENT MODAL --}}
<section id="Menu">

    {{-- STORE MENU--}}
    <div class="modal fade" id="addMenuModal" tabindex="-1" role="dialog" aria-labelledby="addMenuModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addMenuModalLabel">Tambah Menu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="{{ route('manajemen-menu.menu.store-menu') }}" method="post">
                    @csrf

                    <div class="modal-body">
                        <div class="form-group">
                            <label class="form-label" for="name">Menu</label>
                            <input id="name" name="name" type="text"
                                class="form-control @error('name') is-invalid @enderror" placeholder="Nama Menu ..."
                                value="{{ old('name') }}" />
                            @error('name')
                            <span class="invalid-feedback mt-2" role="alert">
                                <i>{{ $message }}</i>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    {{-- UPDATE MENU --}}
    <div class="modal fade" id="editMenuModal" tabindex="-1" role="dialog" aria-labelledby="editMenuModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editMenuModalLabel">Edit Menu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('manajemen-menu.menu.update-menu') }}" method="post">
                    @csrf
                    @method('patch')
                    <div class="modal-body">
                        <input type="hidden" id="menu-id" name="menuId" value="" />
                        <div class="form-group">
                            <label class="form-label" for="name">Menu</label>
                            <input id="name" name="name" value="" type="text"
                                class="form-control @error('name') is-invalid @enderror" placeholder="Nama Menu ..." />
                            @error('name')
                            <span class="invalid-feedback mt-2" role="alert">
                                <i>{{ $message }}</i>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</section>



{{-- SUBMENU MANAGEMENT MODAL --}}
<section id="SubMenu">

    @if (Request::url() == route('manajemen-menu.sub-menu'))
    {{-- STORE SUBMENU--}}
    <div class="modal fade" id="addSubMenuModal" tabindex="-1" role="dialog" aria-labelledby="addSubMenuModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addSubMenuModalLabel">Tambah Sub Menu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('manajemen-menu.sub-menu.store-sub-menu') }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="form-label" for="sub_menu">Sub Menu</label>
                            <input id="sub_menu" name="sub_menu" type="text"
                                class="form-control @error('sub_menu') is-invalid @enderror"
                                value="{{ old('sub_menu') }}" placeholder="Isi Sub Menu ..." />
                            @error('sub_menu')
                            <span class="invalid-feedback mt-2" role="alert">
                                <i>{{ $message }}</i>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="menu_id" class="">Parent Menu</label>
                            <br>
                            <select name="menu_id" id="menu_id"
                                class="mb-2 form-control @error('menu_id') is-invalid @enderror">
                                <option></option>
                                @forelse ($menus as $menu)
                                <option value="{{$menu->id}}" {{ old('menu_id') == $menu->id ? 'selected' : '' }}>
                                    {{ $menu->name }}
                                </option>
                                @empty
                                <option value="">Menu belum tersedia</option>
                                @endforelse
                            </select>
                            @error('menu_id')
                            <span class="invalid-feedback mt-2" role="alert">
                                <i>{{ $message }}</i>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="url_path">URL Path</label>
                            <input id="url_path" name="url_path" type="text"
                                class="form-control @error('url_path') is-invalid @enderror"
                                value="{{ old('url_path') }}" placeholder="/dashboard/parent-menu/sub-menu" />
                            @error('url_path')
                            <span class="invalid-feedback mt-2" role="alert">
                                <i>{{ $message }}</i>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="icon">Icon</label>
                            <input id="icon" name="icon" type="text"
                                class="form-control @error('icon') is-invalid @enderror" value="{{ old('icon') }}"
                                placeholder="Isi Pemanggilan Icon ..." />
                            @error('icon')
                            <span class="invalid-feedback mt-2" role="alert">
                                <i>{{ $message }}</i>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
                        <button type="submit" class="btn btn-primary">Simpan </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- UPDATE SUBMENU --}}
    <div class="modal fade" id="editSubMenuModal" tabindex="-1" role="dialog" aria-labelledby="editSubMenuModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editSubMenuModalLabel">Edit Sub Menu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('manajemen-menu.sub-menu.update-sub-menu') }}" method="post">
                    @csrf
                    @method('patch')
                    <div class="modal-body">
                        <input type="hidden" name="id" id="id" value="">
                        <div class="form-group">
                            <label class="form-label" for="name">Sub Menu</label>
                            <input id="name" name="name" type="text"
                                class="form-control @error('name') is-invalid @enderror"
                                placeholder="Isi Sub Menu ..." />
                            @error('name')
                            <span class="invalid-feedback mt-2" role="alert">
                                <i>{{ $message }}</i>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="menu-id" class="">Menu Parent</label>
                            <select name="menuId" id="menu-id"
                                class="mb-2 form-control @error('menuId') is-invalid @enderror">
                                <option></option>
                                @forelse ($menus as $menu)
                                <option value="{{$menu->id}}"
                                    {{ old('dashboard_menu_id') == $menu->id ? 'selected' : '' }}>
                                    {{ $menu->name }}
                                </option>
                                @empty
                                <option value="">Menu belum tersedia</option>
                                @endforelse
                            </select>
                            @error('menuId')
                            <span class="invalid-feedback mt-2" role="alert">
                                <i>{{ $message }}</i>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="urlpath">URL Path</label>
                            <input id="urlpath" name="url_path" type="text"
                                class="form-control @error('url_path') is-invalid @enderror"
                                placeholder="Isi URL Path ..." />
                            @error('url_path')
                            <span class="invalid-feedback mt-2" role="alert">
                                <i>{{ $message }}</i>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="icon">Icon</label>
                            <input id="icon" name="icon" type="text"
                                class="form-control @error('icon') is-invalid @enderror"
                                placeholder="Isi Pemanggilan Icon ..." />
                            @error('icon')
                            <span class="invalid-feedback mt-2" role="alert">
                                <i>{{ $message }}</i>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endif
</section>



{{-- USER ACCOUNT MANAGEMENT MODAL --}}
<section id="user">

    {{-- UPDATE USER ROLE --}}
    @if (Request::url() == route('manajemen-pengguna.pengguna'))
    <div class="modal fade" id="editUserRoleModal" tabindex="-1" role="dialog" aria-labelledby="editUserRoleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editUserRoleModalLabel">Ubah Role</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('manajemen-pengguna.pengguna.update-user-role') }}" method="post">
                    @csrf
                    @method('patch')
                    <div class="modal-body">
                        <input type="hidden" id="id" name="id" value="">

                        <div class="form-group">
                            <label class="form-label" for="role_name">Role</label>

                            <select name="role_name" id="role_name"
                                class="mb-2 form-control @error('role_name') is-invalid @enderror">
                                {{-- <option value="{{ old('role_name') ?? Auth::user()->roles->first()->name}}">
                                {{ old('role_name') ??  Auth::user()->roles->first()->name}}
                                </option> --}}
                                @foreach ($roles as $role)
                                <option value="{{ $role->name }}">
                                    {{-- {{ old('role') == $role->name ? 'selected' : '' }}> --}}
                                    {{ $role->name }}
                                </option>
                                @endforeach
                            </select>

                            @error('role_name')
                            <span class="invalid-feedback mt-2" role="alert">
                                <i>{{ $message }}</i>
                            </span>
                            @enderror

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endif

</section>



{{-- Role and Permission Modal --}}
<section id="Role">

    {{-- STORE NEW ROLE --}}
    <div class="modal fade" id="addRoleModal" tabindex="-1" role="dialog" aria-labelledby="addRoleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addRoleModalLabel">Tambah Role</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('manajemen-pengguna.role-dan-hak-akses.store-role') }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="form-label" for="name">Role</label>
                            <input id="name" name="name" type="text"
                                class="form-control @error('name') is-invalid @enderror" placeholder="Isi Role ..." />
                            @error('name')
                            <span class="invalid-feedback mt-2" role="alert">
                                <i>{{ $message }}</i>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- UPDATE ROLE --}}
    <div class="modal fade" id="editRoleModal" tabindex="-1" role="dialog" aria-labelledby="editRoleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editRoleModalLabel">Edit Role</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('manajemen-pengguna.role-dan-hak-akses.update-role') }}" method="post">
                    @csrf
                    @method('patch')
                    <div class="modal-body">
                        <input type="hidden" id="id" name="id" value="">
                        <div class="form-group">
                            <label class="form-label" for="name">Role</label>
                            <input id="name" name="name" value="" type="text"
                                class="form-control @error('name') is-invalid @enderror" placeholder="Isi Role ..."
                                autofocus />
                            @error('name')
                            <span class="invalid-feedback mt-2" role="alert">
                                <i>{{ $message }}</i>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- STORE NEW ROLE PERMISSION --}}
    <div class="modal fade" id="addRolePermissionModal" tabindex="-1" role="dialog"
        aria-labelledby="addRolePermissionModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addRolePermissionModalLabel">Tambah Jenis Hak Akses</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('manajemen-pengguna.role-dan-hak-akses.store-role-permission') }}" method="post">
                    @csrf
                    <div class="modal-body">

                        <div class="form-group">
                            <label class="form-label" for="name">Nama Hak Akses</label>
                            <input id="name" name="name" type="text"
                                class="form-control @error('name') is-invalid @enderror" placeholder=".." />
                            @error('name')
                            <span class="invalid-feedback mt-2" role="alert">
                                <i>{{ $message }}</i>
                            </span>
                            @enderror
                        </div>
                        <p>
                            <i>Catatan:<br>Tambahkan permission name pada routes yang ada di source code file web.php
                                untuk memasang permission</i>
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</section>



{{-- Isi Komentar --}}
<div class="modal fade" id="komenPengaduan" tabindex="-1" role="dialog" aria-labelledby="komenPengaduanLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="komenPengaduanLabel">Tambah Komentar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="#" method="post">
                {{-- @csrf
                @method('patch') --}}
                <div class="modal-body">
                    <input type="hidden" id="id" name="id" value="">
                    <div class="form-group">
                        <label class="form-label" for="name">Komentar</label>
                        <input id="name" name="name" value="" type="text"
                            class="form-control @error('name') is-invalid @enderror" placeholder="Isi Komentar ..."
                            autofocus />
                        @error('name')
                        <span class="invalid-feedback mt-2" role="alert">
                            <i>{{ $message }}</i>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- Isi Komentar --}}
<div class="modal fade" id="komenPengaduan" tabindex="-1" role="dialog" aria-labelledby="komenPengaduanLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="komenPengaduanLabel">Tambah Komentar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="#" method="post">
                {{-- @csrf
                @method('patch') --}}
                <div class="modal-body">
                    <input type="hidden" id="id" name="id" value="">
                    <div class="form-group">
                        <label class="form-label" for="name">Komentar</label>
                        <input id="name" name="name" value="" type="text"
                            class="form-control @error('name') is-invalid @enderror" placeholder="Isi Komentar ..."
                            autofocus />
                        @error('name')
                        <span class="invalid-feedback mt-2" role="alert">
                            <i>{{ $message }}</i>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</div>
