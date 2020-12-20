@extends('dashboard.layouts.master', ['title' => "Penduduk"])

@section('content')

<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-users icon-gradient bg-mean-fruit">
                </i>
            </div>
            <div>Penduduk
                <div class="page-title-subheading">Penduduk
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
    <div class="col-md-4 col-xl-4">
        <div class="card mb-3 widget-content ">
            <div class="widget-content-outer">
                <div class="widget-content-wrapper">
                    <div class="widget-content-left">
                        <div class="widget-heading">Penduduk</div>
                        <div class="widget-subheading">Total Penduduk</div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-warning">{{ $totalVillager }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-xl-4">
        <div class="card mb-3 widget-chart widget-chart2 text-left card">
            <div class="widget-content">
                <div class="widget-content-outer">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left pr-2 fsize-1">
                            <div class="widget-numbers mt-0 fsize-3 text-warning">
                                {{ number_format($activePercentage,2) }}%
                            </div>
                        </div>
                        <div class="widget-content-right w-100">
                            <div class="progress-bar-xs progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="{{ number_format($activePercentage,2) }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ number_format($activePercentage,2) }}%;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content-left fsize-1">
                        <div class="text-muted opacity-6">Persentase Penduduk Aktif</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-lg-4 mb-3 ">
        <div class=" row d-flex">
            <div class="col-6">
                <button type="button " class="btn btn-lg btn-block btn-danger text-white font-weight-bold  shadow "> <i class="fas fa-file-pdf fa-2x"></i></button>
            </div>
            <div class="col-6">
                <button type="button" class="btn btn-lg btn-block btn-success text-white font-weight-bold  shadow "> <i class="fas fa-file-excel fa-2x"></i></button>
            </div>
        </div>
    </div>

</div>

<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">Penduduk
                <div class="btn-actions-pane-right ">
                    <a type="button" class="btn btn-lg btn-success btn-sm text-white font-weight-normal " href="{{ route('penduduk-tambah') }}">+ Tambah Data Excel</a>
                    <a type="button" class="btn btn-lg btn-focus btn-sm text-white font-weight-normal ml-3" href="{{ route('penduduk-tambah') }}">+ Tambah Data </a>
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
                            <th class=" text-center">Pekerjaan</th>
                            <th class=" text-center">Alamat</th>
                            <th class=" text-center">Status</th>
                            <th class=" text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($villagers as $villager)
                        <tr>
                            <td class=" text-center">{{ $villager->nik }}</td>
                            <td class=" text-center">{{ $villager->full_name }}</td>
                            <td class=" text-center">{{ $villager->villagerSex->sex }}</td>
                            <td class=" text-center">{{ $villager->villagerReligion->religion }}</td>
                            <td class=" text-center">{{ $villager->villagerProfession->profession }}</td>
                            <td class=" text-center">{{ $villager->address }}</td>
                            <td class=" text-center">
                                @if (!$villager->user_id)
                                <div class="badge badge-secondary">Tidak Aktif</div>
                                @else
                                <div class="badge badge-success">Aktif</div>
                                @endif
                            </td>
                            <td class=" text-center">
                                <div class="btn-group-sm btn-group">
                                    <a href="{{ route('penduduk-edit') }}" class="btn btn-primary" data-toggle="tooltip" title="Edit Data" data-placement="bottom"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger" data-toggle="tooltip" title="Hapus Data" data-placement="bottom"><i class="fas fa-trash-alt"></i></a>
                                    <a href="{{ route('penduduk-detail') }}" class="btn btn-warning text-white" data-toggle="tooltip" title="Detail Data" data-placement="bottom"><i class="fas fa-info-circle"></i></a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        <!--{{-- <tr>
                            <td class=" text-center">3373020203000003</td>
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
                                    <a href="{{ route('penduduk-edit') }}" class="btn btn-primary" ><i class="fas fa-edit"></i></a>
                        <a href="#" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                        <a href="{{ route('penduduk-detail') }}" class="btn btn-warning text-white"><i class="fas fa-info-circle"></i></a>
            </div>
            </td>
            </tr> --}}-->
                    </tbody>
                </table>
            </div>
            <div class=" d-block card-footer ">
                <div class="card-body ">
                    <nav class=" " aria-label="Page navigation example">
                        <ul class="pagination ">
                            <!--{{-- <li class="page-item"><a href="javascript:void(0);" class="page-link"
                                aria-label="Previous"><span aria-hidden="true">«</span><span
                                    class="sr-only">Previous</span></a></li>
                        <li class="page-item active"><a href="javascript:void(0);" class="page-link">1</a></li>
                        <li class="page-item"><a href="javascript:void(0);" class="page-link">2</a></li>
                        <li class="page-item"><a href="javascript:void(0);" class="page-link">3</a></li>
                        <li class="page-item"><a href="javascript:void(0);" class="page-link">4</a></li>
                        <li class="page-item"><a href="javascript:void(0);" class="page-link">5</a></li>
                        <li class="page-item"><a href="javascript:void(0);" class="page-link" aria-label="Next"><span
                                    aria-hidden="true">»</span><span class="sr-only">Next</span></a></li> --}}-->
                            {{ $villagers->links() }}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection