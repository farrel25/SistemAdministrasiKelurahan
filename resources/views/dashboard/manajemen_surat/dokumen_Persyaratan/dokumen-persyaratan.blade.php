@extends('dashboard.layouts.master', ['title' => "Dokumen Persyaratan"])

@section('content')

<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class=" pe-7s-note2 icon-gradient bg-mean-fruit">
                </i>
            </div>
            <div>Dokumen Persyaratan
                <div class="page-title-subheading">Dokumen Persyaratan
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
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">Dokumen Persyaratan
                <div class="btn-actions-pane-right ">
                    <a type="button"
                        class="btn btn-lg btn-success btn-sm text-white font-weight-normal m-1 mb-2 mt-2 btn-responsive"
                        href="{{ route('dokumen-persyaratan-export-excel') }}">
                        <i class="fas fa-file-download "> </i>
                        Unduh Data Excel
                    </a>
                    <button type="button"
                        class="btn btn-lg btn-success btn-sm text-white font-weight-normal m-1 mb-2 mt-2 btn-responsive"
                        data-toggle="modal" data-target="#importExcelDocumentModal">
                        <i class="fas fa-file-upload"></i>
                        Unggah Data Excel
                    </button>
                    {{-- <a href="{{ route('dokumen-persyaratan-delete-selected') }}"
                    class="btn btn-lg btn-danger btn-sm text-white font-weight-normal m-1 mb-2 mt-2 btn-responsive">
                    <i class="fas fa-trash-alt"></i>
                    Hapus Data Terpilih
                    </a> --}}
                    <button type="button" id="deleteSelected"
                        class="btn btn-lg btn-danger btn-sm text-white font-weight-normal m-1 mb-2 mt-2 btn-responsive">
                        <i class="fas fa-trash-alt"></i>
                        Hapus Data Terpilih
                    </button>
                    <a type="button"
                        class="btn btn-lg btn-focus btn-sm text-white m-1 mb-2 mt-2 font-weight-normal btn-responsive"
                        href="{{ route('dokumen-persyaratan-create') }}">+ Tambah Dokumen
                        Persyaratan</a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="align-middle mb-0 table table-borderless table-striped table-hover p-5">
                    <thead>
                        <tr>
                            {{-- <th class=" text-center"><input type="checkbox" onchange="checkAll(this)" name="chk[]"></th> --}}
                            <th class=" text-center"><input type="checkbox" onchange="checkAll(this)" name="chk[]"></th>
                            <th class=" text-center">No</th>
                            <th class=" text-center">Aksi</th>
                            <th>Nama Dokumen</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($documents as $no => $document)
                        <tr>
                            {{-- <td class="text-center"><input type="checkbox" name="chkbox[]" value="1"></td> --}}
                            <td class="text-center"><input type="checkbox" name="ids" value="{{ $document->id }}"></td>
                            <td class="text-center">{{ $no + $documents->firstItem() }}</td>
                            <td class="text-center">
                                <div class="btn-group-sm btn-group">
                                    <a href="{{ route('dokumen-persyaratan-edit', $document->id) }}"
                                        class="btn btn-primary" data-toggle="tooltip" title="Edit Dokumen Persyaratan"
                                        data-placement="bottom"><i class="fas fa-edit"></i></a>

                                    <form action="{{ route('dokumen-persyaratan-delete', $document->id) }}"
                                        method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger" data-toggle="tooltip"
                                            title="Hapus Dokumen Persyaratan" data-placement="bottom">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                            <td>{{ $document->document }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class=" d-block card-footer ">
                <div class="card-body ">
                    <nav class=" " aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
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
                            {{ $documents->links() }}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $("#deleteSelected").click(function(e) {
        e.preventDefault();
        var allIds = [];
        $("input:checkbox[name=ids]:checked").each(function () {
            allIds.push($(this).val());
        });

        $.ajax({
            url: '{{ route('dokumen-persyaratan-delete-selected') }}',
            type: 'DELETE',
            data: {
                ids:allIds,
                _token:$("input[name=_token]").val()
            },
            // success:function(response) {
            //     $each(allIds, function(key,val))
            // }
        });
    });
</script>

@endsection
