@extends('dashboard.layouts.master', ['title' => "Kontributor"])

@section('content')

<?php
    $data=[
        'icon' => "pe-7s-pen",
        'judul' => "Kontributor",
        'link' => route('layanan.kontributor') ,
        'page1' => "Kontributor"
    ]
?>
@include('dashboard.layouts.page-title',$data)

<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">Artikel
                <div class="btn-actions-pane-right ">
                    <a type="button"
                        class="btn btn-lg btn-focus btn-sm text-white font-weight-normal m-1 mb-2 mt-2 btn-responsive"
                        href="{{ route('layanan.kontributor-artikel.create') }}">+
                        Buat Artikel</a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="align-middle mb-0 table table-borderless table-striped table-hover p-5">
                    <thead>
                        <tr>
                            <th class=" text-center"><input type="checkbox" onchange="checkAll(this)" name="chk[]"></th>
                            <th class=" text-center">No.</th>
                            <th class=" text-center">Aksi</th>
                            <th class=" text-left">Judul</th>
                            <th class=" text-center">Kategori</th>
                            <th class=" text-center">Status</th>
                            <th class=" text-center">Tanggal dibuat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($articles as $number => $article)
                        <tr>
                            <td class=" text-center"><input type="checkbox" name="chkbox[]" value="1"></td>
                            <td class=" text-center">{{ $number + $articles->firstItem() }}</td>
                            <td class=" text-center">
                                <div class="d-flex justify-content-center">
                                    <a href="{{ route('layanan.kontributor-artikel.edit', $article->id) }}"
                                        class="btn btn-warning btn-sm mr-1 " data-toggle="tooltip" title="Edit Artikel"
                                        data-placement="bottom">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    {{-- @else
                                    <form method="POST"
                                        action="{{ route('manajemen-artikel.artikel.activation', $article->id) }}">
                                    @csrf
                                    @method('patch')
                                    <input type="hidden" name="enabled" value="1">
                                    <button type="submit" class="btn btn-secondary btn-sm mr-1" data-toggle="tooltip"
                                        title="Aktifkan Artikel" data-placement="bottom">
                                        <i class="fas fa-lock"></i>
                                    </button>
                                    </form>
                                    @endif --}}

                                    <a href="{{ route('visitors.artikel.show', $article->slug) }}"
                                        target="_blank" class="btn btn-success btn-sm mr-1" data-toggle="tooltip"
                                        title="Lihat Artikel" data-placement="bottom">
                                        <i class="fas fa-eye"></i>
                                    </a>

                                    <a href="#" class="btn btn-info btn-sm mr-1" data-toggle="tooltip"
                                        title="Detail Artikel" data-placement="bottom">
                                        <i class="fas fa-info-circle"></i>
                                    </a>
                                </div>
                            </td>
                            <td class=" text-left">{{ $article->title }}</td>
                            <td class=" text-center">{{ $article->category->category }}</td>
                            <td class=" text-center">
                                @if ($article->enabled == 1)
                                <div class="badge badge-success">
                                    Sudah dipublikasikan
                                </div>
                                @else
                                <div class="badge badge-secondary">
                                    Belum dipublikasikan
                                </div>
                                @endif
                            </td>
                            <td class=" text-center">
                                {{-- @if ($article->enabled == 1) --}}
                                {{ date('d-m-Y', strtotime($article->created_at)) }}
                                {{-- @else
                                <div class="badge badge-secondary">
                                    Belum dipublikasikan
                                </div>
                                @endif --}}
                            </td>
                        </tr>
                        @empty
                        @endforelse
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
