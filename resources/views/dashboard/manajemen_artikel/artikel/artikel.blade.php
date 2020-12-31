@extends('dashboard.layouts.master', ['title' => "Artikel"])

@section('content')

<?php
    $data=[
        'icon' => "pe-7s-news-paper",
        'judul' => "Artikel",
        'link' => route('manajemen-artikel.artikel') ,
        'page1' => "Artikel"
    ]
?>
@include('dashboard.layouts.page-title',$data)

<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">Artikel
                <div class="btn-actions-pane-right "><a type="button"
                        class="btn btn-lg btn-danger btn-sm text-white font-weight-normal m-1 mb-2 mt-2 btn-responsive"
                        href="#"><i class="fas fa-trash-alt"></i> Hapus Data Terpilih</a>
                    <a type="button" class="btn btn-lg btn-focus btn-sm text-white font-weight-normal "
                        href="{{ route('manajemen-artikel.artikel.create') }}">+
                        Tambah Data </a>
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
                            <th class=" text-center">Tanggal Posting</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($articles as $number => $article)
                        <tr>
                            <td class=" text-center"><input type="checkbox" name="chkbox[]" value="1"></td>
                            <td class=" text-center">{{ $number + $articles->firstItem() }}</td>
                            <td class=" text-center">
                                <div class="btn-group-sm btn-group">
                                    <a href="{{ route('manajemen-artikel.artikel.edit', $article->id) }}"
                                        class="btn btn-primary" data-toggle="tooltip" title="Edit Artikel"
                                        data-placement="bottom">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    <form id="delete-form"
                                        action="{{ route('manajemen-artikel.artikel.destroy', $article->id) }}"
                                        method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger" data-toggle="tooltip"
                                            title="Hapus Artikel" data-placement="bottom">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>

                                    {{-- <a href="#" class="btn btn-warning text-white" data-toggle="tooltip"
                                        title="Ubah Kategori" data-placement="bottom">
                                        <i class="fas fa-layer-group"></i>
                                    </a> --}}

                                    <a href="#" class="btn btn-focus text-white" data-toggle="tooltip"
                                        title="Tutup Komentar" data-placement="bottom">
                                        <i class="fas fa-comment"></i>
                                        {{-- <i class="fas fa-comment-slash"></i> buat aktifkan komen --}}
                                    </a>
                                    <a href="#" class="btn btn-secondary" data-toggle="tooltip"
                                        title="Non Aktifkan Artikel" data-placement="bottom">
                                        <i class="fas fa-lock-open"></i>
                                        {{-- <i class="fas fa-lock"></i> Tutup Lock--}}
                                    </a>
                                    <a href="#" class="btn btn-success" data-toggle="tooltip" title="Lihat Artikel"
                                        data-placement="bottom">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </div>
                            </td>
                            <td class=" text-left">{{ $article->title }}</td>
                            <td class=" text-center">{{ $article->category->category }}</td>
                            <td class=" text-center">{{ date('d-m-Y', strtotime($article->created_at)) }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class=" d-block card-footer ">
                <div class="card-body ">
                    <nav class=" " aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            {{ $articles->links() }}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
