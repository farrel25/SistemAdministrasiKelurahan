@extends('dashboard.layouts.master', ['title' => "Beranda"])

@section('content')

<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-car icon-gradient bg-mean-fruit">
                </i>
            </div>
            <div>Analytics Dashboard
                <div class="page-title-subheading">This is an example dashboard created using build-in elements and components.
                </div>
            </div>
        </div>
        <div class="page-title-actions">
            <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark">
                <i class="fa fa-star"></i>
            </button>
            <div class="d-inline-block dropdown">
                <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                    <span class="btn-icon-wrapper pr-2 opacity-7">
                        <i class="fa fa-business-time fa-w-20"></i>
                    </span>
                    Buttons
                </button>
                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon lnr-inbox"></i>
                                <span>
                                    Inbox
                                </span>
                                <div class="ml-auto badge badge-pill badge-secondary">86</div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon lnr-book"></i>
                                <span>
                                    Book
                                </span>
                                <div class="ml-auto badge badge-pill badge-danger">5</div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon lnr-picture"></i>
                                <span>
                                    Picture
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a disabled href="javascript:void(0);" class="nav-link disabled">
                                <i class="nav-link-icon lnr-file-empty"></i>
                                <span>
                                    File Disabled
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6 col-xl-4">
        <div class="card mb-3 widget-content bg-grow-early">
            <div class="widget-content-wrapper text-white">
                <div class="widget-content-left">
                    <div class="widget-heading">Surat Masuk</div>
                    <div class="widget-subheading">Total Surat Masuk</div>
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-white"><span>100</span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-4">
        <div class="card mb-3 widget-content bg-strong-bliss   ">
            <div class="widget-content-wrapper text-white">
                <div class="widget-content-left">
                    <div class="widget-heading">Surat Tertunda</div>
                    <div class="widget-subheading">Total Surat Tertunda</div>
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-white"><span>100</span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-4">
        <div class="card mb-3 widget-content bg-plum-plate  ">
            <div class="widget-content-wrapper text-white">
                <div class="widget-content-left">
                    <div class="widget-heading">Surat Keluar</div>
                    <div class="widget-subheading">Total Surat Keluar</div>
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-white"><span>100</span></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">Penduduk Aktif
                <div class="btn-actions-pane-right mr-2">
                    <div role="group" class="btn-group-sm btn-group">
                        <button class="active btn btn-focus">Terbaru</button>
                        <button class="btn btn-focus">Terlama</button>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="align-middle mb-0 table table-borderless table-striped table-hover p-5">
                    <thead>
                        <tr>
                            <th class=" text-center">NIK</th>
                            <th class=" text-center">Nama</th>
                            <th class=" text-center">Gender</th>
                            <th class=" text-center">Agama</th>
                            <th class=" text-center">Status</th>
                            <th class=" text-center">Pekerjaan</th>
                            <th class=" text-center">Alamat</th>
                            <th class=" text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class=" text-center">3373020203000003</td>
                            <td class=" text-center"> John Doe</td>
                            <td class=" text-center">Laki-laki</td>
                            <td class=" text-center">Islam</td>
                            <td class=" text-center">Menikah</td>
                            <td class=" text-center">Mahasiswa</td>
                            <td class=" text-center">bla bla bla</td>
                            <td class=" text-center">
                                <div class="btn-group-sm btn-group">
                                    <button class="btn btn-primary"><i class="fas fa-edit"></i></button>
                                    <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class=" d-block card-footer ">
                <div class="card-body ">
                    <nav class=" " aria-label="Page navigation example">
                        <ul class="pagination justify-content-center ">
                            <li class="page-item"><a href="javascript:void(0);" class="page-link" aria-label="Previous"><span aria-hidden="true">«</span><span class="sr-only">Previous</span></a></li>
                            <li class="page-item active"><a href="javascript:void(0);" class="page-link">1</a></li>
                            <li class="page-item"><a href="javascript:void(0);" class="page-link">2</a></li>
                            <li class="page-item"><a href="javascript:void(0);" class="page-link">3</a></li>
                            <li class="page-item"><a href="javascript:void(0);" class="page-link">4</a></li>
                            <li class="page-item"><a href="javascript:void(0);" class="page-link">5</a></li>
                            <li class="page-item"><a href="javascript:void(0);" class="page-link" aria-label="Next"><span aria-hidden="true">»</span><span class="sr-only">Next</span></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="scrollbar-container">
    </div>
</div>

<div class="row">
    <div class="col-md-6 col-xl-4">
        <div class="card mb-3 widget-content">
            <div class="widget-content-outer">
                <div class="widget-content-wrapper">
                    <div class="widget-content-left">
                        <div class="widget-heading">Artikel Masuk</div>
                        <div class="widget-subheading">Total Artikel Masuk</div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-success">100</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-4">
        <div class="card mb-3 widget-content">
            <div class="widget-content-outer">
                <div class="widget-content-wrapper">
                    <div class="widget-content-left">
                        <div class="widget-heading">Artikel Tertunda</div>
                        <div class="widget-subheading">Total Artikel Tertunda</div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-warning">100</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-4">
        <div class="card mb-3 widget-content">
            <div class="widget-content-outer">
                <div class="widget-content-wrapper">
                    <div class="widget-content-left">
                        <div class="widget-heading">Artikel Keluar</div>
                        <div class="widget-subheading">Total Artikel Keluar</div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-danger">100</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection