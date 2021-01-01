@extends('dashboard.layouts.master', ['title' => "Komentar"])

@section('content')

<?php
    $data=[
        'icon' => "pe-7s-chat",
        'judul' => "Komentar",
        'link' => route('manajemen-artikel.komentar') ,
        'page1' => "Komentar"
    ]
?>
@include('dashboard.layouts.page-title',$data)

<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">Komentar
                <div class="btn-actions-pane-right "><a type="button"
                        class="btn btn-lg btn-danger btn-sm text-white font-weight-normal m-1 mb-2 mt-2 btn-responsive"
                        href="#"><i class="fas fa-trash-alt"></i> Hapus Data Terpilih</a>
                    {{-- <a type="button" class="btn btn-lg btn-focus btn-sm text-white font-weight-normal "
                            href="{{ route('manajemen-artikel.kategori.create') }}">+
                    Tambah Data </a> --}}
                </div>
            </div>
            <div class="table-responsive">
                <table class="align-middle mb-0 table table-borderless table-striped table-hover p-5">
                    <thead>
                        <tr>
                            <th class=" text-center"><input type="checkbox" onchange="checkAll(this)" name="chk[]"></th>
                            <th class=" text-center">No.</th>
                            <th class=" text-center">Aksi</th>
                            <th class=" text-center">Pengirim</th>
                            <th class=" text-center">Email Pengirim</th>
                            <th class=" text-center">Judul Artikel</th>
                            <th class=" text-center">Isi Komentar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($comments as $number => $comment)
                        <tr>
                            <td class=" text-center"><input type="checkbox" name="chkbox[]" value="1"></td>
                            <td class=" text-center">{{ $number + $comments->firstItem() }}</td>
                            <td class=" text-center">
                                <div class=" d-flex justify-content-center">
                                    {{-- <a href="{{ route('manajemen-artikel.komentar.edit', $comment->id) }}"
                                    class="btn btn-primary btn-sm mr-1" data-toggle="tooltip" title="Edit Komentar"
                                    data-placement="bottom"><i class="fas fa-edit "></i>
                                    </a> --}}

                                    <form id="delete-form"
                                        action="{{ route('manajemen-artikel.komentar.destroy', $comment->id) }}"
                                        method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger btn-sm mr-1" data-toggle="tooltip"
                                            title="Hapus Komentar" data-placement="bottom">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>

                                    @if ($comment->enabled == 1)
                                    <form method="POST"
                                        action="{{ route('manajemen-artikel.komentar.activation', $comment->id) }}">
                                        @csrf
                                        @method('patch')
                                        <input type="hidden" name="enabled" value="0">
                                        <button type="submit" class="btn btn-secondary btn-sm mr-1"
                                            data-toggle="tooltip" title="Non Aktifkan Komentar" data-placement="bottom">
                                            <i class="fas fa-lock-open"></i>
                                        </button>
                                    </form>
                                    @else
                                    <form method="POST"
                                        action="{{ route('manajemen-artikel.komentar.activation', $comment->id) }}">
                                        @csrf
                                        @method('patch')
                                        <input type="hidden" name="enabled" value="1">
                                        <button type="submit" class="btn btn-secondary btn-sm mr-1"
                                            data-toggle="tooltip" title="Aktifkan Komentar" data-placement="bottom">
                                            <i class="fas fa-lock"></i>
                                        </button>
                                    </form>
                                    @endif

                                </div>
                            </td>
                            <td class=" text-center">{{ $comment->owner }}</td>
                            <td class=" text-center">{{ $comment->email }}</td>
                            <td class=" text-center">{{ $comment->article->title }}</td>
                            <td class=" text-center">{{ $comment->comments }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class=" d-block card-footer ">
                <div class="card-body ">
                    <nav class=" " aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            {{ $comments->links() }}
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
