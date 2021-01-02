@extends('dashboard.layouts.master', ['title' => "Kategori"])

@section('content')

<?php
    $data=[
        'icon' => "pe-7s-network",
        'judul' => "Kategori",
        'link' => route('manajemen-artikel.kategori') ,
        'page1' => "Kategori"
    ]
?>
@include('dashboard.layouts.page-title',$data)

<div class="row">
    <div class="col-md-4">
        <div class="main-card mb-3 card">
            <div class="card-header">Tambah Kategori
            </div>

            <form action="{{ route('manajemen-artikel.kategori.store') }}" method="POST" class=" ">
                @csrf

                <div class="position-relative form-group m-3">
                    <label for="category" class="">Kategori</label>
                    <input name="category" id="category" type="text"
                        class="form-control @error('category') is-invalid @enderror" value="{{ old('category') }}">
                    @error('category')
                    <span class="invalid-feedback mt-2" role="alert">
                        <i>{{ $message }}</i>
                    </span>
                    @enderror

                    <button type="submit" class="mt-3 btn btn-primary">Tambah</button>
                </div>
            </form>

        </div>
    </div>
    <div class="col-md-8">
        <div class="main-card mb-3 card">
            <div class="card-header">Kategori
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
                            <th class=" text-center">Kategori</th>
                            <th class=" text-center">Slug</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $number => $category)
                        <tr>
                            <td class=" text-center"><input type="checkbox" name="chkbox[]" value="1"></td>
                            <td class=" text-center">{{ ++$number }}</td>
                            <td class=" text-center">
                                <div class="d-flex justify-content-center">
                                    <a href="{{ route('manajemen-artikel.kategori.edit', $category->id) }}"
                                        class="btn btn-primary btn-sm mr-1" data-toggle="tooltip" title="Edit Kategori"
                                        data-placement="bottom"><i class="fas fa-edit "></i>
                                    </a>

                                    <form id="delete-form"
                                        action="{{ route('manajemen-artikel.kategori.destroy', $category->id) }}"
                                        method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger btn-sm mr-1" data-toggle="tooltip"
                                            title="Hapus Kategori" data-placement="bottom">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>

                                    @if ($category->enabled == 1)
                                    <form method="POST"
                                        action="{{ route('manajemen-artikel.kategori.activation', $category->id) }}">
                                        @csrf
                                        @method('patch')
                                        <input type="hidden" name="enabled" value="0">
                                        <button type="submit" class="btn btn-secondary btn-sm mr-1"
                                            data-toggle="tooltip" title="Non Aktifkan Kategori" data-placement="bottom">
                                            <i class="fas fa-lock-open"></i>
                                        </button>
                                    </form>
                                    @else
                                    <form method="POST"
                                        action="{{ route('manajemen-artikel.kategori.activation', $category->id) }}">
                                        @csrf
                                        @method('patch')
                                        <input type="hidden" name="enabled" value="1">
                                        <button type="submit" class="btn btn-secondary btn-sm mr-1"
                                            data-toggle="tooltip" title="Aktifkan Kategori" data-placement="bottom">
                                            <i class="fas fa-lock"></i>
                                        </button>
                                    </form>
                                    @endif
                                </div>
                            </td>
                            <td class=" text-center">{{ $category->category }}</td>
                            <td class=" text-center">{{ $category->slug }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class=" d-block card-footer ">
                <div class="card-body ">
                    <nav class=" " aria-label="Page navigation example">
                        <ul class="pagination ">
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
