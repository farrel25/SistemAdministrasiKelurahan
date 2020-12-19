@extends('dashboard.layouts.master', ['title' => "Beranda"])

@section('content')

<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-rocket icon-gradient bg-mean-fruit">
                </i>
            </div>
            <div>Dashboard
                <div class="page-title-subheading">Dashboard
                </div>
            </div>
        </div>
        <div class="page-title-actions">
            <a href="{{ route('visitors.beranda.index') }}" type="button" data-toggle="tooltip"
                title="Kembali Ke Beranda" data-placement="left" class="btn-shadow mr-3 btn btn-dark">
                <i class="fas fa-home"></i>
            </a>
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
            <div class="card-header">Data Penduduk Aktif
            </div>
            <div class="table-responsive">
                <table class="align-middle mb-0 table table-borderless table-striped table-hover p-5">
                    <thead>
                        <tr>
                            <th class=" text-center">NIK</th>
                            <th class=" text-center">Foto</th>
                            <th class=" text-center">Nama</th>
                            <th class=" text-center">Gender</th>
                            <th class=" text-center">Agama</th>
                            <th class=" text-center">Pekerjaan</th>
                            <th class=" text-center">Alamat</th>
                            {{-- <th class=" text-center">Status Akun</th> --}}
                            {{-- <th class=" text-center">Actions</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($villagers as $villager)
                        <tr>
                            <td class=" text-center">{{ $villager->nik }}</td>
                            <td class=" text-center"></td>
                            <td class=" text-center">{{ $villager->full_name }}</td>
                            <td class=" text-center">{{ $villager->villagerSex->sex }}</td>
                            <td class=" text-center">{{ $villager->villagerReligion->religion }}</td>
                            <td class=" text-center">{{ $villager->villagerProfession->profession }}</td>
                            <td class=" text-center">{{ $villager->address }}</td>
                        </tr>
                        @endforeach
                        {{-- <tr>
                            <td class=" text-center">3373020203000003</td>
                            <td class=" text-center"></td>
                            <td class=" text-center"> John Doe</td>
                            <td class=" text-center">Laki-laki</td>
                            <td class=" text-center">Islam</td>
                            <td class=" text-center">Mahasiswa</td>
                            <td class=" text-center">bla bla bla</td>
                            <td class=" text-center">
                                <div class="badge badge-success">Aktif</div>
                            </td>
                            <td class=" text-center">
                                <div class="btn-group-sm btn-group">
                                    <button class="btn btn-primary"><i class="fas fa-edit"></i></button>
                                    <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                    <button class="btn btn-warning text-white"><i
                                            class="fas fa-info-circle"></i></button>
                                </div>
                            </td>
                        </tr> --}}
                    </tbody>
                </table>
            </div>
            <div class=" d-block card-footer ">
                <div class="card-body ">
                    <nav class=" " aria-label="Page navigation example">
                        <ul class="pagination justify-content-center ">
                            {{-- <li class="page-item"><a href="javascript:void(0);" class="page-link"
                                    aria-label="Previous"><span aria-hidden="true">«</span><span
                                        class="sr-only">Previous</span></a></li>
                            <li class="page-item active"><a href="javascript:void(0);" class="page-link">1</a></li>
                            <li class="page-item"><a href="javascript:void(0);" class="page-link">2</a></li>
                            <li class="page-item"><a href="javascript:void(0);" class="page-link">3</a></li>
                            <li class="page-item"><a href="javascript:void(0);" class="page-link">4</a></li>
                            <li class="page-item"><a href="javascript:void(0);" class="page-link">5</a></li>
                            <li class="page-item"><a href="javascript:void(0);" class="page-link"
                                    aria-label="Next"><span aria-hidden="true">»</span><span
                                        class="sr-only">Next</span></a></li> --}}
                            {{ $villagers->links() }}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6 col-xl-3">
        <div class="card mb-3 widget-content">
            <div class="widget-content-outer">
                <div class="widget-content-wrapper">
                    <div class="widget-content-left">
                        <div class="widget-heading">Artikel Total</div>
                        <div class="widget-subheading">Total Artikel</div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-primary">100</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="card mb-3 widget-content">
            <div class="widget-content-outer">
                <div class="widget-content-wrapper">
                    <div class="widget-content-left">
                        <div class="widget-heading">Artikel Aktif</div>
                        <div class="widget-subheading">Total Artikel Tampil</div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-success">100</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
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
    <div class="col-md-6 col-xl-3">
        <div class="card mb-3 widget-content">
            <div class="widget-content-outer">
                <div class="widget-content-wrapper">
                    <div class="widget-content-left">
                        <div class="widget-heading">Artikel Terhapus</div>
                        <div class="widget-subheading">Total Artikel Terhapus</div>
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
