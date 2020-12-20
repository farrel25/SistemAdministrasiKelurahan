@extends('dashboard.layouts.master', ['title' => "Jenis Surat"])

@section('content')

<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class=" pe-7s-keypad icon-gradient bg-mean-fruit">
                </i>
            </div>
            <div>Jenis Surat
                <div class="page-title-subheading">Jenis Surat
                </div>
            </div>
        </div>
        <div class="page-title-actions d-flex">
            <a href="{{ route('visitors.beranda.index') }}" type="button" data-toggle="tooltip" title="Kembali Ke Beranda" data-placement="left" class="btn-shadow btn btn-dark pt-2">
                <i class="fas fa-home"></i>
            </a>
            <div class="input-group ml-3">
                <input type="text" class="form-control" id="#" placeholder="Search" aria-describedby="inputGroupPrepend" required>
                <a href="#" class="input-group-prepend text-decoration-none ">
                    <span class="input-group-text rounded-right" id="inputGroupPrepend"><i class="fas fa-search"></i></span>
                </a>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">Jenis Surat
                <div class="btn-actions-pane-right ">
                    <a type="button" class="btn btn-lg btn-danger btn-sm text-white font-weight-normal mr-2 " href="#" data-toggle="tooltip" title="Download Data PDF" data-placement="bottom"><i class="fas fa-file-pdf "></i></a>
                    <a type="button" class="btn btn-lg btn-success btn-sm text-white font-weight-normal mr-2" href="#" data-toggle="tooltip" title="Download Data Excel" data-placement="bottom"><i class="fas fa-file-excel "></i></a>
                    <a type="button" class="btn btn-lg btn-primary btn-sm text-white font-weight-normal mr-2" href="#"><i class="fas fa-trash-alt"></i> Hapus Data Terpilih</a>
                    <a type="button" class="btn btn-lg btn-success btn-sm text-white font-weight-normal mr-2" href="#"><i class="fas fa-file-upload"></i> Unggah Data Excel</a>
                    <a type="button" class="btn btn-lg btn-focus btn-sm text-white font-weight-normal " href="tambah-jenis-surat">+ Tambah Jenis Surat </a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="align-middle mb-0 table table-borderless table-striped table-hover p-5">
                    <thead>
                        <tr>
                            <th class=" text-center"><input type="checkbox" onchange="checkAll(this)" name="chk[]"></th>
                            <th class=" text-center">No.</th>
                            <th class=" text-center">Aksi</th>
                            <th class=" text-center">Kode Surat</th>
                            <th class=" text-center">Nama Surat</th>
                            <th class=" text-center">Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class=" text-center"><input type="checkbox" name="chkbox[]" value="1"></td>
                            <td class=" text-center">#</td>
                            <td class=" text-center">
                                <div class="btn-group-sm btn-group">
                                    <a href="edit-jenis-surat" class="btn btn-primary" data-toggle="tooltip" title="Edit Jenis Surat" data-placement="bottom"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-secondary text-white" data-toggle="tooltip" title="Blokir Jenis Surat" data-placement="bottom"><i class="fas fa-lock"></i></a>
                                    <a href="#" class="btn btn-danger" data-toggle="tooltip" title="Hapus Jenis Surat" data-placement="bottom"><i class="fas fa-trash-alt"></i></a>
                                </div>
                            </td>
                            <td class=" text-center">#</td>
                            <td class=" text-center">#</td>
                            <td class=" text-center">#</td>

                        </tr>
                    </tbody>
                </table>
            </div>
            <div class=" d-block card-footer ">
                <div class="card-body ">
                    <nav class=" " aria-label="Page navigation example">
                        <ul class="pagination ">
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
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection