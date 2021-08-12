@extends('dashboard.layouts.master', ['title' => "Kepengurusan Desa"])

@section('content')

<?php
    $data=[
        'icon' => "pe-7s-id",
        'judul' => "Kepengurusan Desa",
        'link' => route('info-desa.kepengurusan') ,
        'page1' => "Kepengurusan Desa"
    ]
?>
@include('dashboard.layouts.page-title',$data)

<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">Kepengurusan Kelurahan
                <div class="btn-actions-pane-right ">
                    <a type="button"
                        class="btn btn-lg btn-success btn-sm text-white font-weight-normal m-1 mb-2  btn-responsive"
                        href="#">
                        <i class="fas fa-file-download "> </i> Unduh Data Excel
                    </a>
                    <button type="button"
                        class="btn btn-lg btn-success btn-sm text-white font-weight-normal btn-responsive m-1 mb-2 "
                        data-toggle="modal" data-target="#importExcelVillagerModal">
                        <i class="fas fa-file-upload mr-1"></i> Unggah Data Excel
                    </button>
                    <a type="button"
                        class="btn btn-lg btn-alternate btn-sm text-white font-weight-normal m-1 mb-2  btn-responsive"
                        href="#"><i class="fas fa-print  mr-1"></i> Cetak </a>
                    <a type="button"
                        class="btn btn-lg btn-danger btn-sm text-white font-weight-normal m-1 mb-2  btn-responsive"
                        href="#"><i class="fas fa-trash-alt mr-1"></i> Hapus Data Terpilih</a>
                    <a type="button"
                        class="btn btn-lg btn-focus btn-sm text-white font-weight-normal m-1 mb-2  btn-responsive"
                        href="{{route('info-desa.kepengurusan-create')}}">
                        <i class="fa fa-plus mr-1"></i>
                        Tambah Pengurus
                    </a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="align-middle mb-0 table table-borderless table-striped table-hover p-5">
                    <thead>
                        <tr>
                            <th class=" text-center"><input type="checkbox" onchange="checkAll(this)" name="chk[]"></th>
                            <th class=" text-center">No.</th>
                            <th class=" text-center">Aksi</th>
                            <th class=" text-center">Foto</th>
                            <th class=" text-center">Nama , NIP, NIPD</th>
                            <th class=" text-center">Tempat, Tanggal Lahir</th>
                            <th class=" text-center">Jenis Kelamin</th>
                            <th class=" text-center">Jabatan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($staff as $number => $st)
                        <tr>
                            <td class=" text-center"><input type="checkbox" name="chkbox[]" value="1"></td>
                            <td class=" text-center">{{ ++$number }}</td>
                            <td class=" text-center">
                                <div class="d-flex justify-content-center">
                                    <a href="#" target="_blank" class="btn btn-success btn-sm mr-1"
                                        data-toggle="tooltip" title="Pindah Posisi Keatas" title="Pindah Atas"
                                        data-placement="bottom">
                                        <i class="fas fa-caret-square-up "></i>
                                    </a>

                                    <a href="#" target="_blank" class="btn btn-success btn-sm mr-1"
                                        data-toggle="tooltip" title="Pindah Posisi Kebawah" title="Pindah Bawah"
                                        data-placement="bottom">
                                        <i class="fas fa-caret-square-down"></i>
                                    </a>

                                    <a href="{{route('info-desa.kepengurusan-edit', $st->nik)}}"
                                        class="btn btn-primary btn-sm mr-1 " data-toggle="tooltip"
                                        title="Edit Kepengurusan Kelurahan" data-placement="bottom">
                                        <i class="fas fa-edit "></i>
                                    </a>

                                    <form id="delete-form"
                                        action="{{ route('info-desa.kepengurusan-destroy', $st->nik) }}" method="post">
                                        @csrf
                                        @method('delete')

                                        <button type="submit" class="btn btn-danger btn-sm mr-1" data-toggle="tooltip"
                                            title="Hapus Anggota" data-placement="bottom">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>

                                    @if ($st->is_active == 1)
                                    <form method="POST"
                                        action="{{ route('info-desa.kepengurusan-activation', $st->nik) }}">
                                        @csrf
                                        @method('patch')
                                        <input type="hidden" name="is_active" value="0">
                                        <button type="submit" class="btn btn-secondary btn-sm mr-1"
                                            data-toggle="tooltip" title="Non Aktifkan Staff" data-placement="bottom">
                                            <i class="fas fa-lock-open "></i>
                                        </button>
                                    </form>
                                    @else
                                    <form method="POST"
                                        action="{{ route('info-desa.kepengurusan-activation', $st->nik) }}">
                                        @csrf
                                        @method('patch')
                                        <input type="hidden" name="is_active" value="1">
                                        <button type="submit" class="btn btn-secondary btn-sm mr-1"
                                            data-toggle="tooltip" title="Aktifkan Staff" data-placement="bottom">
                                            <i class="fas fa-lock "></i>
                                        </button>
                                    </form>
                                    @endif

                                    <a href="#" target="_blank" class="btn btn-focus btn-sm mr-1" data-toggle="tooltip"
                                        title=" Aktifkan TTD" data-placement="bottom">
                                        <del>a.n</del>
                                    </a>

                                    <a href="#" target="_blank" class="btn btn-focus btn-sm mr-1" data-toggle="tooltip"
                                        title="Non Aktifkan TTD" data-placement="bottom">
                                        u.b
                                    </a>
                                </div>
                            </td>
                            <td class=" text-center">
                                @if ($st->photo)
                                <img src="{{ asset('storage/' . $st->photo) }}" alt="" width="70">
                                @else
                                <i>Belum ada foto</i>
                                @endif
                            </td>
                            <td class="text-left">
                                Nama : {{ $st->full_name }} <br>
                                NIP : {{ $st->nip }} <br>
                                NIPD : {{ $st->nipd }}
                            </td>
                            <td class=" text-center">
                                {{ $st->villager->birth_place }},
                                {{-- {{ date('d-m-Y', strtotime($st->villager->birth_date)) }} --}}
                                {{ date('d F Y', strtotime($st->villager->birth_date)) }}
                            </td>
                            @php
                            $sex = \DB::table('villager_sexes')->select('villagers.sex_id', 'villager_sexes.sex')
                            ->join('villagers', 'villagers.sex_id', '=', 'villager_sexes.id')
                            ->where('villagers.nik', $st->nik)
                            ->where('villager_sexes.id', $st->villager->sex_id)->pluck('sex')
                            ->first();
                            // var_dump($sex);
                            // var_dump($st->villager->sex_id);
                            @endphp
                            <td class=" text-center">{{ $sex }}</td>
                            <td class=" text-center">{{ $st->staff_position }}</td>
                        </tr>
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
