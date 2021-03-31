<!-- Modal -->
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
            <form id="editStatusForm" action="{{route('manajemen-surat.pengajuan-surat.update')}}" method="post">
                @csrf
                @method('patch')
                <input type="text" name="letter_id" id="letter_id" value="" class="d-none">
                <div class="position-relative form-group m-5">
                    <label for="status_id" class="">Status</label>
                    <select name="status_id" id="status_id" class="mb-2 form-control" value="">
                        <option id="">Pilih...</option>
                        @foreach ($letterStatuses as $status)
                        <option value="{{ $status->id }}">{{ $status->status }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endif

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
                            <input id="name" name="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Isi Role ..." />
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
                            <input id="name" name="name" value="" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Isi Role ..." autofocus/>
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
    <div class="modal fade" id="addRolePermissionModal" tabindex="-1" role="dialog" aria-labelledby="addRolePermissionModalLabel"
        aria-hidden="true">
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
                        <p>
                            <i>Catatan:<br>Tambahkan permission name pada routes yang ada di source code file web.php untuk memasang permission</i>
                        </p>
                        <div class="form-group">
                            <label class="form-label" for="name">Nama Hak Akses</label>
                            <input id="name" name="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder=".." />
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

</section>
