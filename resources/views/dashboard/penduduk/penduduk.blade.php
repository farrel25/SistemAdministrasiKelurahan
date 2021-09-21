@extends('dashboard.layouts.master', ['title' => "Penduduk"])

@section('content')

<?php
    $data=[
        'icon' => "pe-7s-users",
        'judul' => "Penduduk",
        'link' => route('penduduk') ,
        'page1' => "Penduduk"
    ]
?>
@include('dashboard.layouts.page-title',$data)


<div class="row">
    <div class="col-lg-4 ">
        <div class=" mb-3 card widget-content">
            <div class="widget-content-outer">
                <div class="widget-content-wrapper">
                    <div class="widget-content-left">
                        <div class="widget-heading">Penduduk</div>
                        <div class="widget-subheading">Total Seluruh Penduduk </div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-danger">{{$totalVillager}}</div>
                    </div>
                </div>
                <div class="widget-progress-wrapper">
                    <div class="progress-bar-lg progress-bar-animated progress">
                        <div class="progress-bar-striped bg-danger" role="progressbar" aria-valuenow="100"
                            aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 ">
        <div class=" mb-3 card widget-content">
            <div class="widget-content-outer">
                <div class="widget-content-wrapper">
                    <div class="widget-content-left">
                        <div class="widget-heading">Aktif</div>
                        <div class="widget-subheading">Total Penduduk Aktif</div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-success">{{$activeVillager}}</div>
                    </div>
                </div>
                <div class="widget-progress-wrapper">
                    <div class="progress-bar-lg progress-bar-animated progress">
                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="{{number_format($activePercentage, 2)}}" aria-valuemin="0"
                            aria-valuemax="100" style="width: {{number_format($activePercentage, 2)}}%;">{{number_format($activePercentage, 2)}}%</div>
                    </div>
                    <div class="progress-sub-label">
                        <div class="sub-label-left">presentase</div>
                        <div class="sub-label-right">{{number_format($activePercentage, 2)}}%</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 ">
        <div class=" mb-3 card widget-content">
            <div class="widget-content-outer">
                <div class="widget-content-wrapper">
                    <div class="widget-content-left">
                        <div class="widget-heading">Tidak Aktif</div>
                        <div class="widget-subheading">Total Penduduk Tidak Aktif</div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-warning">{{$notActiveVillager}}</div>
                    </div>
                </div>
                <div class="widget-progress-wrapper">
                    <div class="progress-bar-lg progress-bar-animated progress">
                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="{{number_format($notActivePercentage, 2)}}" aria-valuemin="0"
                            aria-valuemax="100" style="width: {{number_format($notActivePercentage, 2)}}%;">{{number_format($notActivePercentage, 2)}}%</div>
                    </div>
                    <div class="progress-sub-label">
                        <div class="sub-label-left">presentase</div>
                        <div class="sub-label-right">{{number_format($notActivePercentage, 2)}}%</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="col-md-4 col-xl-4">
        <div class="card mb-3 widget-content ">
            <div class="widget-content-outer">
                <div class="widget-content-wrapper">
                    <div class="widget-content-left">
                        <div class="widget-heading">Penduduk</div>
                        <div class="widget-subheading">Total Penduduk</div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-warning">{{ $totalVillager }}
</div>
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
                            {{ number_format($activePercentage, 2) }}%
                        </div>
                    </div>
                    <div class="widget-content-right w-100">
                        <div class="progress-bar-xs progress">
                            <div class="progress-bar bg-warning" role="progressbar"
                                aria-valuenow="{{ number_format($activePercentage, 2) }}" aria-valuemin="0"
                                aria-valuemax="100" style="width: {{ number_format($activePercentage, 2) }}%;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="widget-content-left fsize-1">
                    <div class="text-muted opacity-6">Persentase Penduduk Aktif</div>
                </div>
            </div>
        </div>
    </div>
</div> --}}


</div>

<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">Penduduk
                @if (session()->has('success'))
                {{ session()->get('success') }}
                @endif
                <div class="btn-actions-pane-right ">
                    <a type="button"
                        class="btn btn-lg btn-success btn-sm text-white font-weight-normal m-1 mb-2  btn-responsive"
                        href="{{ route('penduduk-export-excel') }}">
                        <i class="fas fa-file-download "> </i> Unduh Data Excel
                    </a>
                    <button type="button"
                        class="btn btn-lg btn-success btn-sm text-white font-weight-normal btn-responsive m-1 mb-2 "
                        data-toggle="modal" data-target="#importExcelVillagerModal">
                        <i class="fas fa-file-upload"></i> Unggah Data Excel
                    </button>
                    <a type="button"
                        class="btn btn-lg btn-focus btn-sm text-white font-weight-normal m-1 mb-2 btn-responsive"
                        href="{{ route('penduduk-tambah') }}">+
                        Tambah Data </a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="align-middle mb-0 table table-borderless table-striped table-hover p-5">
                    <thead>
                        <tr>
                            <th class=" text-center">No</th>
                            <th class=" text-center">Aksi</th>
                            <th class=" text-center">NIK</th>
                            <th class=" text-center">Foto</th>
                            <th class=" text-center">Nama</th>
                            <th class=" text-center">Nomor Hp</th>
                            <th class=" text-center">Alamat</th>
                            <th class=" text-center">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($villagers as $number => $villager)
                        <tr>
                            <td class="text-center">{{ $number + $villagers->firstItem()}}</td>
                            <td class=" text-center">
                                {{-- <div class="btn-group-sm btn-group"> --}}
                                <div class="d-flex justify-content-center">
                                    <a href="{{ route('penduduk-edit', $villager->nik) }}"
                                        class="btn btn-primary btn-sm mr-1" data-toggle="tooltip" title="Edit Data"
                                        data-placement="bottom">
                                        <i class="fas fa-edit">
                                        </i>
                                    </a>

                                    @php
                                    $userRoleCheck = DB::table('model_has_roles')
                                    ->join('users', 'model_has_roles.model_id', '=', 'users.id')
                                    ->where('model_has_roles.model_id', $villager->user_id)
                                    ->select('role_id', 'id', 'full_name', 'email')
                                    ->get()
                                    ->toArray();
                                    @endphp

                                    @if (!$userRoleCheck || $userRoleCheck[0]->role_id != 1)
                                    <form id="delete-form" action="{{ route('penduduk-delete', $villager->nik) }}"
                                        method="post">
                                        @csrf
                                        @method('delete')
                                        <button type=" submit" class="btn btn-danger delete btn-sm mr-1"
                                            data-toggle="tooltip" title="Hapus Data" data-placement="bottom">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                    @endif

                                    <a href="{{ route('penduduk-detail', $villager->nik) }}"
                                        class="btn btn-warning btn-sm mr-1 text-white" data-toggle="tooltip"
                                        title="Detail Data" data-placement="bottom"><i
                                            class="fas fa-info-circle"></i></a>
                                </div>
                            </td>
                            <td class="text-center">{{ $villager->nik }}</td>
                            <td class="text-center">
                                <img width="40" class="rounded-circle " height="40" style="object-fit: cover"
                                    src="{{ asset('storage/' . $villager->photo) }}" alt="">
                            </td>
                            <td class="text-center">{{ $villager->full_name }}</td>
                            <td class="text-center">{{ $villager->phone_number }}</td>
                            <td class="text-center">{{ $villager->address }}</td>
                            <td class="text-center">
                                @if (!$villager->user_id)
                                <div class="badge badge-secondary">Tidak Aktif</div>
                                @else
                                <div class="badge badge-success">Aktif</div>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class=" d-block card-footer ">
                <div class="card-body ">
                    <nav class=" " aria-label="Page navigation example">
                        <ul class="pagination justify-content-center ">
                            {{ $villagers->links() }}
                        </ul>
                    </nav>
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
                        'Data anda masih tersimpan :)',
                        'error'
                    )
                }
            })
        });

</script>
@endsection
